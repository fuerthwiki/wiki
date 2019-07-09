<?php

class AuthorProtectAction extends FormAction {
	public function getName() {
		return 'authorprotect';
	}

	public function getRestriction() {
		return 'authorprotect';
	}

	protected function checkCanExecute( User $user ) {
		parent::checkCanExecute( $user );

		if ( !AuthorProtect::UserIsAuthor( $user, $this->getTitle() ) ) {
			throw new ErrorPageError( 'errorpagetitle', 'authorprotect-notauthor', [ $user->getName() ] );
		}

		$errors = array_values( $this->getTitle()->getUserPermissionsErrors( 'protect', $user, 'secure', [ 'badaccess-groups' ] ) );
		if ( $errors ) {
			throw new PermissionsError( 'authorprotect', $errors );
		}
	}

	protected function getPageTitle() {
		return wfMessage( 'authorprotect' )->escaped();
	}

	protected function getDescription() {
		// page subtitle
		return '';
	}

	protected function preText() {
		return $this->msg( 'authorprotect-intro' )->parseAsBlock();
	}

	public function onSuccess() {
		$this->getOutput()->addWikiMsg( 'authorprotect-success' );
	}

	public function onSubmit( $data ) {
		$title = $this->getTitle();
		$user = $this->getUser();
		$out = $this->getOutput();
		$restrictionTypes = $title->getRestrictionTypes();

		$restrictions = [];
		$expiration = [];
		$expiry = $this->getExpiry( $data['ExpiryTime'] );

		foreach ( $restrictionTypes as $type ) {
			// FIXME: schema supports multiple restrictions on a page, but there is no real functionality
			// to work with this in MediaWiki core. Once core fully supports multiple restrictions, this will
			// need to be updated to work with that. Otherwise, we could be accidentally obliterating restrictions.
			$rest = $title->getRestrictions( $type );
			if ( $rest !== [] ) {
				if ( !call_user_func_array( [ $user, 'isAllowedAll' ], $rest ) ) {
					// don't let them lower the protection level
					$restrictions[$type] = implode( '', $rest );
					$expiration[$type] = $title->getRestrictionExpiry( $type );
					continue;
				}
			}

			if ( $data["check-{$type}"] ) {
				$restrictions[$type] = 'author';
				$expiration[$type] = $expiry;
			} else {
				if ( in_array( 'author', $rest ) ) {
					$restrictions[$type] = '';
					$expiration[$type] = '';
				} else {
					$restrictions[$type] = implode( '', $rest );
					$expiration[$type] = $title->getRestrictionExpiry( $type );
				}
			}
		}

		$article = Article::newFromTitle( $title, $this->getContext() );
		$cascade = false;
		$success = $article->doUpdateRestrictions(
			$restrictions,
			$expiration,
			$cascade, // cascading protection disabled, need to pass by reference
			$data['Reason'],
			$user
		);

		return $success;
	}

	protected function getFormFields() {
		$title = $this->getTitle();
		$request = $this->getRequest();
		$user = $this->getUser();
		$out = $this->getOutput();
		$restrictionTypes = $title->getRestrictionTypes();

		$fields = [];

		foreach ( $title->getRestrictionTypes() as $type ) {
			$rest = $title->getRestrictions( $type );

			if ( $rest !== [] ) {
				if ( !call_user_func_array( [ $user, 'isAllowedAll' ], $rest ) ) {
					continue; // it's protected at a level higher than them, so don't let them change it so they can now mess with stuff
				}
			}

			// Give grep a chance to find the usages:
			// authorprotect-edit, authorprotect-move
			$checked = in_array( 'author', $rest );
			$fields["check-$type"] = [
				'type' => 'check',
				'name' => "check-$type",
				'label-message' => "authorprotect-$type",
				'default' => $checked
			];
		}

		$fields['ExpiryTime'] = [
			'type' => 'text',
			'label-message' => 'protectexpiry'
		];

		$fields['Reason'] = [
			'type' => 'text',
			'label-message' => [ 'protectcomment', 'reason' ]
		];

		return $fields;
	}

	// forked from ProtectionForm::getExpiry and modified to rewrite '' to infinity
	private function getExpiry( $value ) {
		if ( $value == 'infinite' || $value == 'indefinite' || $value == 'infinity' || $value == '' ) {
			$time = wfGetDB( DB_REPLICA )->getInfinity();
		} else {
			$unix = strtotime( $value );

			if ( !$unix || $unix === -1 ) {
				return false;
			}

			// Fixme: non-qualified absolute times are not in users specified timezone
			// and there isn't notice about it in the ui
			$time = wfTimestamp( TS_MW, $unix );
		}

		return $time;
	}
}
