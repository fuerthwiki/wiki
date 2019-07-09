<?php

class AuthorProtect {
	public static function AssignAuthor( $user, &$aRights ) {
		$title = RequestContext::getMain()->getTitle();

		if ( self::UserIsAuthor( $user, $title ) ) {
			$aRights[] = 'author';
			$aRights = array_unique( $aRights );
		}

		return true;
	}

	public static function MakeContentAction( $skin, &$links ) {
		$title = $skin->getTitle();
		$user = $skin->getUser();
		$request = $skin->getRequest();

		if ( self::UserIsAuthor( $user, $title ) && $user->isAllowed( 'authorprotect' ) && !$user->isAllowed( 'protect' ) ) {
			$action = $request->getText( 'action' );
			$links['actions']['authorprotect'] = [
				'class' => $action == 'authorprotect' ? 'selected' : false,
				'text' => wfMessage( self::AuthorProtectMessage( $title ) ),
				'href' => $title->getLocalUrl( 'action=authorprotect' ),
			];
		}

		return true;
	}

	public static function UserIsAuthor( $user, $title, $checkMaster = false ) {
		if ( !$title instanceof Title ) {
			return false; // quick hack to prevent the API from messing up.
		}

		if ( $user->getID() === 0 ) {
			return false; // don't allow anons, they shouldn't even get this far but just in case...
		}

		$id = $title->getArticleID();
		$dbr = wfGetDB( $checkMaster ? DB_MASTER : DB_REPLICA );
		$aid = $dbr->selectField(
			'revision',
			'rev_user',
			[ 'rev_page' => $id ],
			__METHOD__,
			[ 'ORDER BY' => 'rev_timestamp ASC' ]
		);

		return $user->getID() == $aid;
	}

	private static function AuthorProtectMessage( $title ) {
		foreach ( $title->getRestrictionTypes() as $type ) {
			if ( in_array( 'author', $title->getRestrictions( $type ) ) ) {
				return 'unprotect';
			}
		}
		return 'protect';
	}
}
