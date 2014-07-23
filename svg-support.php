<?php
/*
Plugin Name: 	SVG Support
Plugin URI:		http://wordpress.org/plugins/svg-support/
Description: 	Allows SVG file uploads plus direct styling of SVG elements using CSS.
Author: 		Benbodhi
Author URI: 	http://benbodhi.com
Text Domain: 	svg-support
Domain Path:	/languages
License: 		GPL2
Version: 		1.0
*/
/*  Copyright 2013  Benbodhi  (email : wp@benbodhi.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/********************************************
* INTERNATIONALIZATION / LOCALIZATION
********************************************/
load_plugin_textdomain('svg-support', false, basename( dirname( __FILE__ ) ) . '/languages' );

/********************************************
* GLOBAL VARIABLES
********************************************/
define( 'BODHI_SVGS_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );	// define the absolute plugin path for includes

/********************************************
* INCLUDES - keeping it modular
********************************************/
include( BODHI_SVGS_PLUGIN_PATH . 'functions/mime-types.php' );		// include mime types support file
include( BODHI_SVGS_PLUGIN_PATH . 'functions/enqueue.php' );		// include enqueues file

?>