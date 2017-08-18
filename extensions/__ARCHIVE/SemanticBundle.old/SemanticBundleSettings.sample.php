<?php

/**
 * SemanticBundle - A pre-packaged bundle of extensions meant to be used on wikis
 * based around the Semantic MediaWiki extension.
 *
 * Sample of the settings file for the Semantic Bundle
 *
 * @link https://www.mediawiki.org/wiki/Extension:Semantic_Bundle Documentation
 *
 * @file SemanticBundleSettings.php
 * @ingroup SemanticBundle
 */

if ( !defined( 'MEDIAWIKI' ) ) {
    echo "This file is not a valid entry point.";
    exit( 1 );
}

# Semantic MediaWiki basic installation.
# More info: http://semantic-mediawiki.org/wiki/Help:Installation

# First, all of SMW's current dependencies.
# This includes adding autoload calls for the classes that would normally
# be autoloaded by Composer.
$classMap = require_once( "$IP/extensions/SemanticBundle/SB_AutoloadClassmap.php" );
foreach ( $classMap as $className => $fileName ) {
        $wgAutoloadClasses[$className] = $fileName;
}
include_once( "$IP/extensions/SemanticBundle/param-processor/param-processor/src/ParamProcessor/Processor.php" );
include_once( "$IP/extensions/SemanticBundle/param-processor/param-processor/DefaultConfig.php" );
include_once( "$IP/extensions/Validator/Validator.php" );

include_once( "$IP/extensions/SemanticMediaWiki/SemanticMediaWiki.php" );
enableSemantics( parse_url( $wgServer, PHP_URL_HOST ) );

# Semantic Result Formats
# More info: http://semantic-mediawiki.org/wiki/Help:Semantic_Result_Formats#Installation
#include_once( "$IP/extensions/SemanticResultFormats/SemanticResultFormats.php" );

# Semantic Forms
# More info: https://www.mediawiki.org/wiki/Extension:Semantic_Forms
#include_once( "$IP/extensions/SemanticForms/SemanticForms.php" );

# Semantic Forms Inputs
# More info: https://www.mediawiki.org/wiki/Extension:Semantic_Forms_Inputs
#include_once( "$IP/extensions/SemanticFormsInputs/SemanticFormsInputs.php" );

# Semantic Compound Queries
# More info: https://www.mediawiki.org/wiki/Extension:Semantic_Compound_Queries
#include_once( "$IP/extensions/SemanticCompoundQueries/SemanticCompoundQueries.php" );

# Semantic Drilldown
# More info: https://www.mediawiki.org/wiki/Extension:Semantic_Drilldown#Installation
#include_once( "$IP/extensions/SemanticDrilldown/SemanticDrilldown.php" );

# Maps and Semantic Maps 
#include_once( "$IP/extensions/Maps/Maps.php" );
#include_once( "$IP/extensions/SemanticMaps/SemanticMaps.php" );

# Semantic Extra Special Properties
# More info: https://www.mediawiki.org/wiki/Extension:Semantic_Extra_Special_Properties
#include_once( "$IP/extensions/SemanticExtraSpecialProperties/SemanticExtraSpecialProperties.php" );

# Semantic Tasks
# More info: https://www.mediawiki.org/wiki/Extension:Semantic_Tasks#Installation
#include_once( "$IP/extensions/SemanticTasks/SemanticTasks.php" );

# Semantic Internal Objects
# More info: https://www.mediawiki.org/wiki/Extension:Semantic_Internal_Objects
#include_once( "$IP/extensions/SemanticInternalObjects/SemanticInternalObjects.php" );

# Semantic Image Input
# More info: https://www.mediawiki.org/wiki/Extension:Semantic_Image_Input
#include_once( "$IP/extensions/SemanticImageInput/SemanticImageInput.php" );

# Admin Links
# More info: https://www.mediawiki.org/wiki/Extension:Admin_Links#Installation
#include_once( "$IP/extensions/AdminLinks/AdminLinks.php" );

# Approved Revs
# More info: https://www.mediawiki.org/wiki/Extension:Approved_Revs#Installation
#include_once( "$IP/extensions/ApprovedRevs/ApprovedRevs.php" );

# Arrays
# More info: https://www.mediawiki.org/wiki/Extension:Arrays#Installation
#include_once( "$IP/extensions/Arrays/Arrays.php" );

# Data Transfer
# More info: https://www.mediawiki.org/wiki/Extension:Data_Transfer#Installation
#include_once( "$IP/extensions/DataTransfer/DataTransfer.php" );

# External Data
# More info: https://www.mediawiki.org/wiki/Extension:External_Data#Installation
#include_once( "$IP/extensions/ExternalData/ExternalData.php" );

# Header Tabs
# More info: https://www.mediawiki.org/wiki/Extension:Header_Tabs#Installation
#include_once( "$IP/extensions/HeaderTabs/HeaderTabs.php" );

# Page Schemas
# More info: https://www.mediawiki.org/wiki/Extension:Page_Schemas#Installation
#require_once( "$IP/extensions/PageSchemas/PageSchemas.php" );

# Replace Text
# More info: https://www.mediawiki.org/wiki/Extension:Replace_Text#Installation
#require_once( "$IP/extensions/ReplaceText/ReplaceText.php" );

# Widgets
# Also need to do some permission setup: http://www.mediawiki.org/wiki/Extension:Widgets#Folder_permissions
# More info: https://www.mediawiki.org/wiki/Extension:Widgets#Installation
#require_once( "$IP/extensions/Widgets/Widgets.php" );
#$wgGroupPermissions['sysop']['editwidgets'] = true;
