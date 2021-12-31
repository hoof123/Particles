<?php
/**
* Plugin Name: particles.js
* Plugin URI: https://github.com/VincentGarreau/particles.js/
* Description: a WordPress plugin for installing particles.js
* Version: 1.0
* Author: Jake Price | JP Creative Media
* Author URI: https://jpcreativemedia.ca/
**/

// hooks
add_action( 'wp_enqueue_scripts' , 'particles_enqueue_scripts' );
add_action( 'wp_body_open', 'particles_init');

// register styles & scripts
function particles_enqueue_scripts() {

    // css
    wp_register_style('particles-css', plugin_dir_url( __FILE__ ) . 'css/particles.css', 1.0, true);
    wp_enqueue_style('particles-css');

    // js
    wp_register_script('particles-js', plugin_dir_url( __FILE__ ) . 'js/particles.min.js', 1.0, true);
    wp_enqueue_script('particles-js');
}

function particles_init() {

    // init script
    wp_register_script('particles-init-js', plugin_dir_url( __FILE__ ) . 'js/particles-init.js', 1.0, true);
    wp_enqueue_script('particles-init-js');

}
?>