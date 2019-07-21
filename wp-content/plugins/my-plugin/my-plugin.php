<?php
/*
* Plugin Name: My Plugin
* Plugin URI: http://webdevstudios.com/
* Description: Plugin pertama.
* Author: Hendra Gunawan
* Version: 1.0.0
* Author URI: http://bwawwp.com
* License: GPLv2 or later
*/

function my_plugin_wp_footer() {
    echo 'I read Building Web Apps with WordPress
    and now I am a WordPress Genius! ';
}


add_action( 'wp_footer', 'my_plugin_wp_footer' );
?>