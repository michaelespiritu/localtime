<?php

class LocalTimeScript {

  function __construct(){
    add_action('wp_enqueue_scripts', array( $this, 'local_time_script' ) );
    add_action('admin_enqueue_scripts', array( $this, 'local_time_script' ) );
  }

  function local_time_script(){

      wp_enqueue_script( 'local-time', plugin_dir_url( __DIR__ ) . '/public/js/localtime.js', array('jquery'), '1.0.0', false );

  }

}

$localTimeScript = new LocalTimeScript();
