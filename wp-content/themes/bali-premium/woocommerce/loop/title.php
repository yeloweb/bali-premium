<?php
/**
 * Product loop title
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $post, $product;
?>

								<div class="list-item-label">
										<h4 class="list-item-title">
										<a href="<?php the_permalink(); ?>" class="inverse"><?php the_title(); ?></a>
										<span class="sku_wrapper"> - <?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'woocommerce' ); ?></span>
										</h4>
										
										
										<span class="list-item-location">
										<?php
										$terms = get_field('type-region', $post->ID);
										if( $terms ): ?>
											<?php foreach( $terms as $term ): ?>
											<a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a><br/>
											<?php endforeach; ?>
										<?php endif; ?>
										</span>
