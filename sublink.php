<?php
/*
Plugin Name: Sub Link
Plugin URI: https://sinexme.wordpress.com
Description: Puts one click subscribe link to your youtube channel.
Version: 1.0
Author: Sinishaw Tadele
*/

if (!defined('ABSPATH')){
    exit;
}

require_once(plugin_dir_path(__FILE__). '/inc/sublink-scripts.php');
require_once(plugin_dir_path(__FILE__). '/inc/sublink-class.php');

function register_sublink(){
    register_widget('sub_link_Widget');
}

add_action('widgets_init', 'register_sublink');