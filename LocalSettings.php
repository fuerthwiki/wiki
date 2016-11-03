<?php
require_once("./SECRETS.php");

//error_reporting( E_ALL );
//ini_set( 'display_errors', 1 );

# This file was automatically generated by the MediaWiki 1.19.2
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename      = "FürthWiki";
#$wgReadOnly = 'Das FürthWiki wird gerade gewartet. Wir bitten um Verständnis!';

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath       = "/wiki";
$wgScriptExtension  = ".php";

## The protocol and server name to use in fully-qualified URLs
$wgServer           = "http://www.fuerthwiki.de";

## Wiki editor by default
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;

## Custom upload page (!)
$wgUploadNavigationUrl = "/wiki/index.php/Special:Upload"; //Wizard";

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo             = "$wgStylePath/common/images/fuerthwiki.png";

## UPO means: this is also a user preference option

$wgEnableEmail      = true;
$wgEnableUserEmail  = true; # UPO
$wgEmailAuthentication = true;
$wgEmailConfirmToEdit = true;

$wgEmergencyContact = "webmaster@fuerthwiki.de";
$wgPasswordSender   = "webmaster@fuerthwiki.de";

$wgEnotifUserTalk      = false; # UPO
$wgEnotifWatchlist     = false; # UPO

## Database settings
$wgDBtype           = $SECRET_wgDBtype;
$wgDBserver         = $SECRET_wgDBserver;
$wgDBname           = $SECRET_wgDBname;
$wgDBuser           = $SECRET_wgDBuser;
$wgDBpassword       = $SECRET_wgDBpassword;

# MySQL specific settings
$wgDBprefix         = "fw_";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

# Upload limit
$wgMaxUploadSize = 1024*1024*1024; # Would be 1Gb, shows as 200Mb

## Shared memory settings
$wgMainCacheType    = CACHE_NONE;
$wgMemCachedServers = array();
$wgMemoryLimit = "1024M";

## How to handle SVGs
#$wgFileExtensions[] = "svg";
$wgFileExtensions = array_merge( $wgFileExtensions, array( 'svg', 'mp3', 'mp4', 'pdf' ));
$wgAllowTitlesInSVG = true;
$wgSVGConverter = 'ImageMagick';
$wgSVGConverterPath = "/usr/bin/convert";

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads  = true;

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons  = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "de";

$wgSecretKey = $SECRET_wgSecretKey;

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = $SECRET_wgUpgradeKey;

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "vector";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl  = "http://creativecommons.org/licenses/by-sa/3.0/";
$wgRightsText = "Creative Commons „Namensnennung, Weitergabe unter gleichen Bedingungen“";
$wgRightsIcon = "{$wgStylePath}/common/images/cc-by-sa.png";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "";

# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
$wgResourceLoaderMaxQueryLength = -1;

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['rollback'] = false;

# By Muzenhardt, enable Category tree
# $wgUseCategoryBrowser = true;

# Extra Namespaces at FürthWiki
#$wgExtraNamespaces[100] = "Portal";
#$wgExtraNamespaces[101] = "Portal_Diskussion";


$wgExtraNamespaces =
	array(100 => "Portal",
	      101 => "Portal_Diskussion",
	      200 => "Objekt",
	      201 => "Objekt_Diskussion",
);

$smwgNamespacesWithSemanticLinks[200] = true;
$smwgNamespacesWithSemanticLinks[201] = true;


# Enabled Extensions. Most extensions are enabled by including the base extension file here
# but check specific extension documentation for more details
# The following extensions were automatically enabled:
require_once( "$IP/extensions/ConfirmEdit/ConfirmEdit.php" );
require_once( "$IP/extensions/ConfirmEdit/QuestyCaptcha.php");
$wgCaptchaClass = 'QuestyCaptcha';
$arr = array (
        'Schreibe die Zahl 9 in Worten:' => 'neun',
        'Schreibe die Zahl 13 in Worten:' => 'dreizehn',
        'Schreibe die Zahl 7 in Worten:' => 'sieben',
        'Vervollständige die Reihe: eins, zwei, ...' => 'drei',
        'Eine Ampel ist rot, gelb und ...' => 'grün',
        'Der Himmel hat die Farbe ...' => 'blau',
        'Einer für alle und alle für ...' => 'einen',
        'Sie halten zusammen wie Pech und ...' => 'Schwefel',
        'Kohle hat die Farbe ...' => 'schwarz',
        'Vervollständige die Reihe: zwei, vier, sechs, ...' => 'acht',
        'Vervollständige die Reihe: drei, zwei, eins, ...' => 'null',
        'Welche Farbe hat eine Erdbeere?' => 'rot',
        'Das Gegenteil von groß ist ...' => 'klein',
        'Das Gegenteil von weiß ist ...' => 'schwarz',
        'Wer anderen eine Grube gräbt, fällt ... hinein' => 'selbst',
        'Einer für alle und alle für ...' => 'einen',
        'Du sollst Vater und ... ehren' => 'Mutter',
        'Messer, Gabel und ...' => 'Löffel',
        'Vater und Sohn, Mutter und ...' => 'Tochter',
        'Mutter und Tochter, Vater und ...' => 'Sohn',
);
foreach ( $arr as $key => $value ) {
        $wgCaptchaQuestions[] = array( 'question' => $key, 'answer' => $value );
}

$wgUseImageMagick = true;
$wgImageMagickConvertCommand = '/usr/bin/convert';

# ---------------------------------------------------------------------------- #
#require_once( "$IP/extensions/Gadgets/Gadgets.php" );
#require_once( "$IP/extensions/Nuke/Nuke.php" );

# First line autocreated, second line added by Red Rooster
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );
$wgPFEnableStringFunctions = true;
$wgPFStringLengthLimit = 10000;

#require_once( "$IP/extensions/Renameuser/Renameuser.php" );
#require_once( "$IP/extensions/Vector/Vector.php" );
require_once("$IP/extensions/WikiEditor/WikiEditor.php" );


# End of automatically generated settings.
# Add more configuration options below.

# Needed for footnotes!
require_once("$IP/extensions/Cite/Cite.php");

# Semantic Mediawiki
#require_once( "$IP/extensions/SemanticBundle/SemanticBundleSettings.php" );
#require_once( "$IP/extensions/SemanticBundle/SemanticBundle.php" );
require_once("$IP/extensions/SemanticMediaWiki/SemanticMediaWiki.php");

# Maps and Semantic Maps
require_once("$IP/extensions/Maps/Maps.php");
require_once("$IP/extensions/SemanticMaps/SemanticMaps.php");

# Semantic Result Formats and Forms
require_once("$IP/extensions/SemanticForms/SemanticForms.php");
require_once("$IP/extensions/SemanticFormsInputs/SemanticFormsInputs.php");
require_once("$IP/extensions/SemanticResultFormats/SemanticResultFormats.php");
require_once("$IP/extensions/SemanticCompoundQueries/SemanticCompoundQueries.php");
#require_once("$IP/extensions/SemanticDrilldown/SemanticDrilldown.php");
require_once("$IP/extensions/SemanticExtraSpecialProperties/SemanticExtraSpecialProperties.php");
$GLOBALS['sespSpecialProperties'] = array(
    '_VIEWS',
    '_EXIFDATA',
    '_EXIF',
);

# Other Hazzle Dazzle
include_once("$IP/extensions/Arrays/Arrays.php");
require_once("$IP/extensions/Loops/Loops.php");
include_once("$IP/extensions/HeaderTabs/HeaderTabs.php");
include_once("$IP/extensions/Widgets/Widgets.php");
require_once("$IP/extensions/Tabs/Tabs.php");

# CategoryTree extension
$wgUseAjax = true;
require_once("$IP/extensions/CategoryTree/CategoryTree.php");

# Loops extension

# Variables extension
require_once("$IP/extensions/Variables/Variables.php");

# Facebook extension
#require_once("$IP/extensions/Facebook/Facebook.php");
#$wgFbAppId  = '294659870655724';

#$wgFbSecret = 'b760f91121a6a350a848174c5a7200be';
#$smwgShowFactbox = SMW_FACTBOX_NONEMPTY;

# SVG direct embedd
#require_once( "$IP/extensions/NativeSvgHandler/NativeSvgHandler.php" );

# FancyDancyBox
require_once("$IP/extensions/FancyBoxThumbs/FancyBoxThumbs.php");

# UploadWizard
// Needed to make UploadWizard work in IE, see bug 39877
//$wgApiFrameOptions = 'SAMEORIGIN';

#require_once( "$IP/extensions/UploadWizard/UploadWizard.php" );
#$wgUploadWizardConfig['autoCategories'] =  array('Bilder');
#$wgUploadWizardConfig['skipTutorial'] =  true;

$wgNamespaceAliases = array('Bild' => NS_FILE);

# Link Checker in Spezialseiten
require_once("$IP/extensions/ExternalLinks/ExternalLinks.php");
$wgELvalidationMode = 'cURL';
$wgELmaxPerPage = 100;
$wgELvalidationMaxPerPage = 100;
$wgELenableSessionStoring = true;
$wgELtoolboxLink = true;

# Interwiki-Links
require_once "$IP/extensions/Interwiki/Interwiki.php";
// To grant sysops permissions to edit interwiki data
$wgGroupPermissions['sysop']['interwiki'] = true;

// To create a new user group that may edit interwiki data
// (bureaucrats can add users to this group)
#$wgGroupPermissions['developer']['interwiki'] = true;    #<---delete the comment indicator as appropriate

# PDFextension
require_once "$IP/extensions/Collection/Collection.php";

# Chat extension
#require_once "$IP/extensions/MediaWikiChat/MediaWikiChat.php";

require_once("$IP/extensions/ReplaceText/ReplaceText.php");

require_once "$IP/extensions/Echo/Echo.php";

require_once("$IP/extensions/AuthorProtect/AuthorProtect.php");

require_once "$IP/extensions/ProofreadPage/ProofreadPage.php";

# Skin
require_once( "$IP/skins/bootstrap-mediawiki/bootstrap-mediawiki.php" );
