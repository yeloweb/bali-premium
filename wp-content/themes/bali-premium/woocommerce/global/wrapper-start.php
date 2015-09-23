<?php
/**
 * Content wrappers
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$template = get_option( 'template' );

switch( $template ) {
	case 'twentyeleven' :
		echo '<div id="primary"><div id="content" role="main" class="twentyeleven">';
		break;
	case 'twentytwelve' :
		echo '<div id="primary" class="site-content"><div id="content" role="main" class="twentytwelve">';
		break;
	case 'twentythirteen' :
		echo '<div id="primary" class="site-content"><div id="content" role="main" class="entry-content twentythirteen">';
		break;
	case 'twentyfourteen' :
		echo '<div id="primary" class="content-area"><div id="content" role="main" class="site-content twentyfourteen"><div class="tfwc">';
		break;
	case 'twentyfifteen' :
		echo '<div id="primary" role="main" class="content-area twentyfifteen"><div id="main" class="site-main t15wc">';
		break;
	case 'bali-premium' :
		echo '<div id="container content_wrapper">';
		echo '<div id="content" class="container" role="main">';
		
			if(is_post_type_archive( 'product' )){
				
					echo '<div class="row clearfix pv-30 mt-20">';
					echo get_sidebar('left');	

				}else{
					
					echo '<div class="row clearfix pv-50">';
				}
		
		echo '<div class="main-content col-xs-12 col-sm-8 col-md-9">';
		
		break;
	default :
		echo '<div id="container"><div id="content" role="main">';
		break;
}

