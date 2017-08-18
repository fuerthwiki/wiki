<?php
/**
 * SearchStats extension
 *
 * For more info see http://mediawiki.org/wiki/Extension:SearchStats
 *
 * @file
 * @ingroup Extensions
 * @author Steven Orvis, 2016
 * @license GNU General Public Licence 2.0 or later
 */
 
 # Alert the user that this is not a valid access point to MediaWiki if they try to access the special pages file directly.
if ( !defined( 'MEDIAWIKI' ) ) {
	echo <<<EOT
To install my extension, put the following line in LocalSettings.php:
require_once( "\$IP/extensions/SearchStats/SearchStats.php" );
EOT;
	exit( 1 );
}

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Search Stats',
	'author' => array(
		'Steven Orvis',
	),
	'version'  => '0.1.0',
	'url' => 'https://www.mediawiki.org/wiki/Extension:SearchStats',
	'descriptionmsg' => 'searchstats-desc',
);

/* Setup */

$wgMessagesDirs['SearchStats'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['SearchStatsAlias'] = __DIR__ . '/SearchStats.alias.php';

// Autoload classes
$wgAutoloadClasses['SpecialSearchStats'] = __DIR__ . '/SpecialSearchStats.php'; # Location of the SpecialSearchStats class (Tell MediaWiki to load this file)

// Register files
$wgAutoloadClasses['SearchStatsHooks'] = __DIR__ . '/SearchStats.hooks.php';

// Register hooks
$wgHooks['LoadExtensionSchemaUpdates'][] = 'SearchStatsHooks::onLoadExtensionSchemaUpdates';
$wgHooks['SpecialSearchCreateLink'][] = 'SearchStatsHooks::onSpecialSearchCreateLink';
$wgHooks['SpecialSearchNogomatch'][] = 'SearchStatsHooks::onSpecialSearchNogomatch';

// Register special pages
$wgSpecialPages['SearchStats'] = 'SpecialSearchStats'; # Tell MediaWiki about the new special page and its class name

/* Configuration */

