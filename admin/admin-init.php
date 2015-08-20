<?php
/**
 * ADMIN INIT
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// add menu item to wp-admin
add_action( 'admin_menu', 'bodhi_svgs_admin_menu' );

function bodhi_svgs_admin_menu() {

    add_options_page(
        __('SVG Support Options and Instructions', 'svgsupport'),
        __('SVG Support', 'svgsupport'),
        'manage_options',
        'svg-support',
        'bodhi_svg_support_settings_page'
    );

}

// create settings page
function bodhi_svg_support_settings_page() {

    if( ! current_user_can( 'manage_options' ) ) {

        wp_die( __('You can\'t play with this.', 'svgsupport') );

    }

    global $bodhi_svgs_options;

    require( BODHI_SVGS_PLUGIN_PATH . 'admin/svgs-settings-page.php' );

}

// register settings in the database
add_action('admin_init', 'bodhi_svgs_register_settings');

function bodhi_svgs_register_settings() {

    register_setting('bodhi_svgs_settings_group', 'bodhi_svgs_settings');
    
}

?>