<?php

/**
 * Semantic Bundle - A pre-packaged bundle of extensions that includes
 * Semantic MediaWiki and many of the extensions used in conjunction with it.
 *
 * Documentation: https://www.mediawiki.org/wiki/Semantic_Bundle
 * Support: https://www.mediawiki.org/wiki/Talk:Semantic_Bundle
 * Source code: http://git.wikimedia.org/tree/mediawiki%2Fextensions%2FSemanticBundle
 *
 * @file
 * @defgroup SemanticBundle
 * @ingroup Extensions
 * @package MediaWiki
 *
 * @license http://opensource.org/licenses/bsd-license.php The BSD 2-Clause License
 *
 * @author Sergey Chernyshev
 * @author Yaron Koren
 * @author Jeroen De Dauw
 */

if ( !defined( 'MEDIAWIKI' ) ) {
    echo "This file is not a valid entry point.";
    exit( 1 );
}

define( 'SemanticBundle_VERSION', '1.9.2' );

$wgExtensionCredits['semantic'][] = array(
	'path'           => __FILE__,
	'name'           => 'Semantic Bundle',
	'descriptionmsg' => 'semanticbundle-desc',
	'version'        => SemanticBundle_VERSION,
	'author'         => array(
		'[https://www.mediawiki.org/wiki/User:Yaron_Koren Yaron Koren]',
		'[https://www.mediawiki.org/wiki/User:Jeroen_De_Dauw Jeroen De Dauw]',
		'...'
		),
	'url'            => 'https://www.mediawiki.org/wiki/Semantic_Bundle'
);

// define server-local path to this file
$dir = dirname( __FILE__ );

// register message file
$wgMessagesDirs['SemanticBundle'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['SemanticBundle'] = $dir . '/SemanticBundle.i18n.php';
