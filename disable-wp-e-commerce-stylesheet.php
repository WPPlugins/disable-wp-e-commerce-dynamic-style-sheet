<?php
/*
Plugin Name:Disable wp-e-commerce dynamic style sheet
Description: The title says it all
Version: 0.1
Author: James Harvey
Author URI: http://www.webmarkdesigns.com.au/services/wordpress/plugins/disable-wp-e-commerce-dynamic-stylesheet.php
*/
add_action('template_redirect', 'deregister_wp_e_commerce_dynamic_style', 30);
function deregister_wp_e_commerce_dynamic_style() {
wp_deregister_style('wp-e-commerce-dynamic');
}
?>