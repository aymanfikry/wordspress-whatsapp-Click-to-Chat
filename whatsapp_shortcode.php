<?php 
/**
 * What's app Shortcode
 */
 function whatsapp_button_shortcode($atts='') {
	 
   $atts_value = shortcode_atts( array(
		'phone' => '',
		'message' => '',
		'button' => '',
	), $atts );
	 
	 
   if ( wp_is_mobile() ):
	  $whatsbutton = '<a href="https://api.whatsapp.com/send?phone='.$atts_value['phone'].'&text='.$atts_value['message'].'" data-original-title="whatsapp" target="_blank" class="btn-whatsapp"><i class="fa fa-whatsapp"></i> '.$atts_value['button'].'</a>';

   else:
	    $whatsbutton = '<a target="_blank" class="btn-whatsapp" href="https://web.whatsapp.com/send?phone='.$atts_value['phone'].'&text='.$atts_value['message'].'"><i class="fa fa-whatsapp"></i> '.$atts_value['button'].'</a>';
  endif;
	 return $whatsbutton;
}
add_shortcode('whatsapp', 'whatsapp_button_shortcode');
/* Shortcode Output
** [whatsapp phone="21021705353" message="I want ask about..." button="whatsapp" ]
**/