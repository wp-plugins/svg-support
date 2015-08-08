<?php
/**
 * ENQUEUE SCRIPTS AND STYLES
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// enqueue and localize JS for IMG tag replacement
add_action( 'wp_enqueue_scripts', 'bodhi_svgs_inline' );

function bodhi_svgs_inline() {

	global $bodhi_svgs_options;

	$css_target = 'img.'. $bodhi_svgs_options['css_target']; // sets the custom class for use in JS

	if ( ! empty( $bodhi_svgs_options['js_foot_choice'] ) ) {
		wp_register_script('bodhi_svg_inline', plugins_url('svg-support/js/min/svg-inline-min.js'), array('jquery'), '1.0.0', true );
	} else {
		wp_register_script('bodhi_svg_inline', plugins_url('svg-support/js/min/svg-inline-min.js'), array('jquery'), '1.0.0', false );
	}
	wp_enqueue_script('bodhi_svg_inline');
	wp_localize_script( 'bodhi_svg_inline', 'cssTarget', $css_target );

}

// check if we're on our settings page for conditional loading
function bodhi_svgs_settings_page_only() {

    $screen = get_current_screen();

    if( is_object($screen) && $screen->id == 'settings_page_svg-support' ) {
        return true;
    } else {
        return false;
    }
    
}

// enqueue admin settings css only on our settings page
add_action( 'admin_enqueue_scripts', 'bodhi_svgs_admin_style' );

function bodhi_svgs_admin_style() {

	if( bodhi_svgs_settings_page_only() ) {
		wp_enqueue_style( 'bodhi_svgs_admin_style', plugins_url('svg-support/css/svgs-admin.css') );
	}

}

?>