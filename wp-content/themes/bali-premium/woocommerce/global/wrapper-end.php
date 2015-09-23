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
		echo '</div></div>';
		break;
	case 'twentytwelve' :
		echo '</div></div>';
		break;
	case 'twentythirteen' :
		echo '</div></div>';
		break;
	case 'twentyfourteen' :
		echo '</div></div></div>';
		get_sidebar( 'content' );
		break;
	case 'twentyfifteen' :
		echo '</div></div>';
		break;
	case 'bali-premium' :
		include (TEMPLATEPATH . "/woocommerce/single-product/related-villa.php"); 
		echo '<div class="clear xss-mb"></div>
				</div>';
				
				if(!is_post_type_archive( 'product' )){
					get_sidebar('right');
				}
		echo '	</div></div></div><!-- end content_wrapper -->';
		break;
	default :
		echo '</div></div>';
		break;
}


