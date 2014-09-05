<?php
/*
Plugin Name: 	SVG Support
Plugin URI:		http://wordpress.org/plugins/svg-support/
Description: 	Allow SVG file uploads using the WordPress Media Library uploader plus direct styling of SVG elements using CSS.
Author: 		Benbodhi
Author URI: 	http://benbodhi.com
Text Domain: 	svgsupport
Domain Path:	/languages
License: 		GPL2
Version: 		2.1.7
*/
/*  Copyright 2013  Benbodhi  (email : wp@benbodhi.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/********************************************
* GLOBAL VARIABLES
********************************************/
$plugin_version = '2.1.7';											// for use on admin pages
$plugin_file = plugin_basename(__FILE__);							// plugin file for reference
define( 'BODHI_SVGS_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );	// define the absolute plugin path for includes
$bodhi_svgs_options = get_option('bodhi_svgs_settings');			// retrieve our plugin settings from the options table

/********************************************
* INCLUDES - keeping it modular
********************************************/
include( BODHI_SVGS_PLUGIN_PATH . 'admin/admin-init.php' );         		// initialize admin menu & settings page
include( BODHI_SVGS_PLUGIN_PATH . 'admin/plugin-action-meta-links.php' );	// add links to the plugin on the plugins page
include( BODHI_SVGS_PLUGIN_PATH . 'functions/mime-types.php' );				// setup mime types support for SVG
include( BODHI_SVGS_PLUGIN_PATH . 'functions/enqueue.php' );				// enqueue js & css for inline replacement & admin
include( BODHI_SVGS_PLUGIN_PATH . 'functions/localization.php' );			// setup localization & languages

?>