<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup API
 */

/**
 * A query action to return meta information about the proofread extension.
 */
class ApiQueryProofreadInfo extends ApiQueryBase {

	public function __construct( $query, $moduleName ) {
		parent::__construct( $query, $moduleName, 'pi' );
	}

	public function execute() {
		$params = $this->extractRequestParams();
		$prop = array_flip( $params['prop'] );

		if ( isset( $prop['namespaces'] ) ) {
			$this->appendNamespaces();
		}

		if ( isset( $prop['qualitylevels'] ) ) {
			$this->appendQualityLevels();
		}
	}

	protected function appendNamespaces() {
		$data = [];

		$index = ProofreadPage::getIndexNamespaceId();
		if ( $index != null ) {
			$data['index']['id'] = $index;
		}

		$page = ProofreadPage::getPageNamespaceId();
		if ( $page != null ) {
			$data['page']['id'] = $page;
		}

		return $this->getResult()->addValue( 'query', 'proofreadnamespaces', $data );
	}

	protected function appendQualityLevels() {
		$data = [];
		for ( $i = 0; $i < 5; $i++ ) {
			$level = [];
			$level['id'] = $i;
			$level['category'] = $this->msg( "proofreadpage_quality{$i}_category" )
				->inContentLanguage()->text();
			$data[$i] = $level;
		}
		$this->getResult()->setIndexedTagName( $data, 'level' );
		return $this->getResult()->addValue( 'query', 'proofreadqualitylevels', $data );
	}

	public function getCacheMode( $params ) {
		return 'public';
	}

	public function getAllowedParams() {
		return [
			'prop' => [
				ApiBase::PARAM_DFLT => 'namespaces|qualitylevels',
				ApiBase::PARAM_ISMULTI => true,
				ApiBase::PARAM_TYPE => [
					'namespaces',
					'qualitylevels',
				]
			],
		];
	}

	/**
	 * @inheritDoc
	 */
	protected function getExamplesMessages() {
		return [
			'action=query&meta=proofreadinfo'
				=> 'apihelp-query+proofreadinfo-example-1',
			'action=query&meta=proofreadinfo&piprop=namespaces'
				=> 'apihelp-query+proofreadinfo-example-3',
		];
	}
}
