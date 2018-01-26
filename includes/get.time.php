<?php

class LocalTimeShortCode {

	function __construct() {

		add_shortcode( 'localtime', array( $this, 'local_time_display' ));

	}

	function local_time_display( $atts ) {

		$atts = shortcode_atts( array(
			'text' => 'Local Time is ',
			'color' => '',
			'size' => ''
		), $atts );

		$style_array = array();
		$style = '';

		if( !empty( $atts['color'] ) ) {
			$style_array['color'] = $atts['color'];
		}

		if( !empty( $atts['size'] ) )   {
			$style_array['font-size'] = $atts['size'];
		}


		if (!empty( $style_array ) ){

			$style = 'style="';

			foreach ($style_array as $key => $value) {

					$style .= $key.': '.$value.'; ';

			}

			$style .= '"';

		}

	  $display = '<div class="localtime"><p '. $style .'>'.$atts['text'].' <span id="localtimedisplay"></span></p></div>';

	  return $display;

	}

}

$displayTime = new LocalTimeShortCode();
