<?php

function rng_shortcode_SHORTCODENAME( $atts, $content ) {
    //ATTRIBUTE
	$array_atts = shortcode_atts(
	array(
		'PARAM'	 => '',
	), $atts, 'SHORTCODENAME'
    );
    //USE PARAMS
    $atts['PARAM'];
    //USE CONTENT
    $content;
    //RETURN VALUE
    ob_start();
    $outpout = ob_get_clean();
	return $outpout;
}

add_shortcode( 'SHORTCODENAME', 'rng_shortcode_SHORTCODENAME' );

//[SHORTCODENAME PARAM=""]content[/SHORTCODENAME]