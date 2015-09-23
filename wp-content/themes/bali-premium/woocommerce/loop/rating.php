<?php
/**
 * Loop Rating
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' )
	return;
?>


	

										<div class="list-item-meta">
										
										<span class="rating-static rating-30">
											<?php if ( $rating_html = $product->get_rating_html() ) : ?>
												<?php echo $rating_html; ?>
											<?php endif; ?>
										</span>
											<span class="list-item-review">
											<?php 
												$chambre = get_field('nb_chambre', $post->ID );
												echo $chambre; 
										?> chambres 	</span>
										</div>
										<div class="list-item-details">
											<?php the_excerpt(); ?>
										</div>
										<div class="clear"></div>

									