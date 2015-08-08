<?php
/**
 * INTERNATIONALIZATION / LOCALIZATION
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_action( 'plugins_loaded', 'bodhi_svgs_localization' );

function bodhi_svgs_localization() {
	load_plugin_textdomain( 'svgsupport', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

?>