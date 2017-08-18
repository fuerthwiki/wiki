/**
 * @license GNU GPL v2+
 * @since 0.1
 *
 * @author mwjames
 */

/*global jQuery */
/*jslint white: true */

( function( $ ) {

	'use strict';

	/**
	 * @since  0.2
	 * @constructor
	 *
	 * @return {this}
	 */
	var util = function () {
		this.VERSION = '0.2';
		return this;
	};

	/**
	 * @since  0.2
	 * @method
	 *
	 * @param {string} classReplacement
	 * @param {string} type
	 *
	 * @return {string}
	 */
	util.prototype.getLoadingImg = function( classReplacement, type ) {

		if ( type === undefined ) {
			type = circle;
		}

		var element = '<div class="class-replacement"><span class="class-replacement-loading onoi-loading-image-' + type + '" alt="Loading..." /></span>';

		return element.replace( /class-replacement/g, ( classReplacement === undefined ? 'onoi' : classReplacement ) );
	};

	/**
	 * @since  0.2
	 * @method
	 *
	 * @param {string} value
	 *
	 * @return {string}
	 */
	util.prototype.md5 = function( value ) {
		return md5( value );
	};

	/**
	 * @since  0.2
	 * @method
	 * @credit http://www.abeautifulsite.net/parsing-urls-in-javascript/
	 *
	 * @param {string} url
	 *
	 * @return {Object}
	 */
	util.prototype.parseURL = function ( url ) {

		var parser = document.createElement('a'),
			searchObject = {},
			queries, split, i;

		// Let the browser do the work
		parser.href = url;

		// Convert query string to object
		queries = parser.search.replace(/^\?/, '').split('&');
		for( i = 0; i < queries.length; i++ ) {
			split = queries[i].split('=');
			searchObject[split[0]] = split[1];
		}

		return {
			protocol: parser.protocol,
			host: parser.host,
			hostname: parser.hostname,
			port: parser.port,
			pathname: parser.pathname,
			search: parser.search,
			searchObject: searchObject,
			hash: parser.hash
		};
	}

	window.onoi = window.onoi || {};
	window.onoi.util = util;

}( jQuery ) );
