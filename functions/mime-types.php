<?php
add_filter( 'upload_mimes', 'bodhi_gc_upload_mimes' );

function bodhi_gc_upload_mimes($mimes = array()) {
	$mimes['svg'] = 'image/svg+xml';	// allow SVG file upload
	return $mimes;
}
?>