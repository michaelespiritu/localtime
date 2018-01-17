<?php

/*
* Plugin Name: Local Time
* Author: Michael Espiritu
* Description: Get Local Time
* Version: 1.0
*/


//Exit if access directly
if( !defined('ABSPATH') ){

  exit;

}


require_once( plugin_dir_path( __FILE__ ) . 'get.time.php' );
require_once( plugin_dir_path( __FILE__ ) . 'get.time-admin-bar.php' );

function local_time_script(){
    wp_enqueue_script( 'local-time', plugin_dir_url( __FILE__ ) . 'js/local-time.js', array('jquery'), '1.0.0', false );
}

add_action('wp_enqueue_scripts', 'local_time_script');
add_action('admin_enqueue_scripts', 'local_time_script');
