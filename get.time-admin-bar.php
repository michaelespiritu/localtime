<?php

function local_time_display_admin_bar(){

  global $wp_admin_bar;

  $args = array(
    'id' => 'local_time_admin_bar',
    'title' => '<p id="localtimedisplay"></p>',
    'parent' => 'top-secondary'
  );


  $wp_admin_bar->add_menu($args);

}

add_action('wp_before_admin_bar_render', 'local_time_display_admin_bar');
