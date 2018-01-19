<?php

function local_time_display( $atts ) {

	$atts = shortcode_atts( array(
		'text' => 'Local Time is ',
	), $atts );

  $display = '<div class="localtime"><p>'.$atts['text'].' <span id="localtimedisplay"></span></p></div>';

  return $display;
  
}

add_shortcode( 'localtime', 'local_time_display' );
