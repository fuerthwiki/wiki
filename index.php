<?php

/* // Umleitung zur Wartungsseite
if ($_SERVER['REMOTE_ADDR'] != '146.52.238.94') {
	header('HTTP/1.1 503 Service Temporarily Unavailable'); //send the proper response code
	header('Retry-After: 10800'); //Retry after 3 hours
	header('Location: /wartung/');
	exit;
}
*/

/* #Blackout21 - Abschaltung zum Protest gegen #Artikel13. */
if (date('d') == '21' && date('m') == '3' && date('Y') == '2019') {
	header('HTTP/1.1 503 Service Temporarily Unavailable'); //send the proper response code
	header('Retry-After: 3600'); //Retry after 1 hour
	header('Location: https://www.fuerthwiki.de/verein/2019/03/18/wir-sind-dann-mal-weg/');
	exit;
}

/**
 * This is the main web entry point for MediaWiki.
 *
 * If you are reading this in your web browser, your server is probably
 * not configured correctly to run PHP applications!
 *
 * See the README, INSTALL, and UPGRADE files for basic setup instructions
 * and pointers to the online documentation.
 *
 * https://www.mediawiki.org/
 *
 * ----------
 *
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
 */

// Bail on old versions of PHP, or if composer has not been run yet to install
// dependencies. Using dirname( __FILE__ ) here because __DIR__ is PHP5.3+.
// @codingStandardsIgnoreStart MediaWiki.Usage.DirUsage.FunctionFound
require_once dirname( __FILE__ ) . '/includes/PHPVersionCheck.php';
// @codingStandardsIgnoreEnd
wfEntryPointCheck( 'index.php' );

require __DIR__ . '/includes/WebStart.php';

$mediaWiki = new MediaWiki();
$mediaWiki->run();
