<?php

class LocalTimeShortCode {

	function __construct() {

		add_shortcode( 'localtime', array( $this, 'local_time_display' ));

	}

	function local_time_display( $atts ) {

		$atts = shortcode_atts( array(
			'text' => 'Local Time is ',
		), $atts );

	  $display = '<div class="localtime"><p>'.$atts['text'].' <span id="localtimedisplay"></span></p></div>';

	  return $display;

	}

}

$displayTime = new LocalTimeShortCode();
