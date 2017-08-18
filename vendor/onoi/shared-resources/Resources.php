<?php

/**
 * @codeCoverageIgnore
 * @since 0.1
 *
 * @license GNU GPL v2+
 * @author mwjames
 */

if ( defined( 'ONOI_SHARED_RESOURCES_VERSION' ) ) {
	return 1;
}

define( 'ONOI_SHARED_RESOURCES_VERSION', true );

if ( defined( 'MEDIAWIKI' ) ) {

	// Core styles
	$GLOBALS['wgResourceModules']['onoi.qtip.core'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'bottom',
		'styles' => array(
			'res/jquery.qtip/core/jquery.qtip.css'
		),
		'scripts' => array(
			'res/jquery.qtip/core/jquery.qtip.js'
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	// Core styles, Basic colour styles, CSS3 styles
	// Viewport adjustment, SVG support
	$GLOBALS['wgResourceModules']['onoi.qtip.extended'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'bottom',
		'styles' => array(
			'res/jquery.qtip/extended/jquery.qtip.css'
		),
		'scripts' => array(
			'res/jquery.qtip/extended/jquery.qtip.js'
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	$GLOBALS['wgResourceModules']['onoi.qtip'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'bottom',
		'dependencies'  => array(
			'onoi.qtip.extended',
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	$GLOBALS['wgResourceModules']['onoi.md5'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'bottom',
		'scripts' => array(
			'res/md5/jquery.md5.js'
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	$GLOBALS['wgResourceModules']['onoi.blockUI'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'bottom',
		'scripts' => array(
			'res/jquery.blockUI/jquery.blockUI.js'
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	$GLOBALS['wgResourceModules']['onoi.rangeslider'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'bottom',
		'styles' => array(
			'res/jquery.rangeSlider/ion.rangeSlider.css',
			'res/jquery.rangeSlider/ion.rangeSlider.skinFlat.css'
		),
		'scripts' => array(
			'res/jquery.rangeSlider/ion.rangeSlider.js'
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	$GLOBALS['wgResourceModules']['onoi.localForage'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'bottom',
		'scripts' => array(
			'res/localForage/localforage.min.js'
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	$GLOBALS['wgResourceModules']['onoi.blobstore'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'bottom',
		'scripts' => array(
			'res/onoi.blobstore.js'
		),
		'dependencies'  => array(
			'onoi.localForage',
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	$GLOBALS['wgResourceModules']['onoi.util'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'bottom',
		'styles' => array(
			'res/onoi.util.css'
		),
		'scripts' => array(
			'res/onoi.util.js'
		),
		'dependencies'  => array(
			'onoi.md5',
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	$GLOBALS['wgResourceModules']['onoi.async'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'bottom',
		'scripts' => array(
			'res/jquery.async/jquery.async.js'
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	$GLOBALS['wgResourceModules']['onoi.jstorage'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'bottom',
		'scripts' => array(
			'res/jStorage/jstorage.js'
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	$GLOBALS['wgResourceModules']['onoi.clipboard'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'bottom',
		'scripts' => array(
			'res/clipboard/clipboard.js',
			'res/onoi.clipboard.js'
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	// Bootstrap tab resources
	$GLOBALS['wgResourceModules']['onoi.bootstrap.tab.styles'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'top',
		'styles' => array(
			'res/bootstrap/bootstrap.4.tab.css',
			'res/bootstrap/bootstrap.4.mediawiki.tab.css'
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	$GLOBALS['wgResourceModules']['onoi.bootstrap.tab'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'top',
		'styles' => array(
			'res/bootstrap/bootstrap.4.tab.css',
			'res/bootstrap/bootstrap.4.mediawiki.tab.css'
		),
		'scripts' => array(
			'res/bootstrap/bootstrap.4.util.js',
			'res/bootstrap/bootstrap.4.tab.js'
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	$GLOBALS['wgResourceModules']['onoi.highlight'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'bottom',
		'scripts' => array(
			'res/jquery.highlight/jquery.highlight.js'
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	// DataTables resources
	$GLOBALS['wgResourceModules']['onoi.dataTables.styles'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'top',
		'styles' => array(
			'res/jquery.dataTables/jquery.dataTables.css'
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	$GLOBALS['wgResourceModules']['onoi.dataTables.searchHighlight'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'bottom',
		'styles' => array(
			'res/jquery.dataTables/dataTables.searchHighlight.css'
		),
		'scripts' => array(
			'res/jquery.dataTables/dataTables.searchHighlight.js'
		),
		'dependencies'  => array(
			'onoi.highlight',
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	$GLOBALS['wgResourceModules']['onoi.dataTables.responsive'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'bottom',
		'styles' => array(
			'res/jquery.dataTables/dataTables.responsive.css'
		),
		'scripts' => array(
			'res/jquery.dataTables/dataTables.responsive.js'
		),
		'dependencies'  => array(
			'onoi.dataTables',
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

	$GLOBALS['wgResourceModules']['onoi.dataTables'] = array(
		'localBasePath' => __DIR__ ,
		'remoteExtPath' => '../vendor/onoi/shared-resources',
		'position' => 'top',
		'styles' => array(
			'res/jquery.dataTables/jquery.dataTables.css'
		),
		'scripts' => array(
			'res/jquery.dataTables/jquery.dataTables.min.js',
			'res/jquery.dataTables/dataTables.search.js'
		),
		'dependencies'  => array(
			'onoi.dataTables.searchHighlight',
		),
		'targets' => array(
			'mobile',
			'desktop'
		)
	);

}
