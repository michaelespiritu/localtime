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


<<<<<<< HEAD
if ( ! defined( 'LOCALTIME_DIR' ) ) {

	define( 'LOCALTIME_DIR', dirname( __FILE__ ) );

}


require_once LOCALTIME_DIR . '/public/get.time.php';
require_once LOCALTIME_DIR . '/admin/get.time-admin-bar.php';
require_once LOCALTIME_DIR . '/admin/get.time-enqueue.php';
=======
require_once( plugin_dir_path( __FILE__ ) . 'get.time.php' );
require_once( plugin_dir_path( __FILE__ ) . 'get.time-admin-bar.php' );

function local_time_script(){
    wp_enqueue_script( 'local-time', plugin_dir_url( __FILE__ ) . 'js/local-time.js', array('jquery'), '1.0.0', false );
}

add_action('wp_enqueue_scripts', 'local_time_script');
add_action('admin_enqueue_scripts', 'local_time_script');
>>>>>>> 17d2e969eb77355e7004c6a86da8664f58c39f62
