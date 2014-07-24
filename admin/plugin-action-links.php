<?php
/********************************************
* PLUGIN ACTION LINKS
********************************************/

// add filter to svg-support only
add_filter( 'plugin_action_links_svg-support/svg-support.php', 'bodhi_svgs_plugin_action_links' );

function bodhi_svgs_plugin_action_links( $links ) {

   $links[] = '<a href="'. get_admin_url(null, 'options-general.php?page=svg-support') .'">Settings</a>';
   //$links[] = '<a href="http://gowebben.com" target="_blank">More plugins by GoWebben</a>';
   return $links;
   
}

?>