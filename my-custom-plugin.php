<?php
/*
Plugin Name: Trimech Plugin Name
Plugin URI: https://mysite.com
Description: My custom plugin description 
Version: 1.0.0
Author: TriMech
Author URI: https://trimech.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/


function enqueue_plugin_styles_and_scripts() {
    // Enqueue styles
    wp_enqueue_style('plugin-style', plugins_url('/dist/styles.bundle.css', __FILE__));

    // Enqueue scripts
    wp_enqueue_script('plugin-script', plugins_url('/dist/main.bundle.js', __FILE__), array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_plugin_styles_and_scripts');