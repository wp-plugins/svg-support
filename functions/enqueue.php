<?php
add_action( 'wp_enqueue_scripts', 'bodhi_gc_svg_inline' );

function bodhi_gc_svg_inline() {
	wp_register_script('bodhi_gc_svg_inline', plugins_url('svg-support/js/svg-inline.js'), array(), '1.0.0', false );
	wp_enqueue_script('bodhi_gc_svg_inline');
}
?>