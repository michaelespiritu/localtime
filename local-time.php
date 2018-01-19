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


if ( ! defined( 'LOCALTIME_DIR' ) ) {

	define( 'LOCALTIME_DIR', dirname( __FILE__ ) );

}


require_once LOCALTIME_DIR . '/public/get.time.php';
require_once LOCALTIME_DIR . '/admin/get.time-admin-bar.php';
require_once LOCALTIME_DIR . '/admin/get.time-enqueue.php';
