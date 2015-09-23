<?php
/**
 * Single Product title
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

?>

<?php 
/*$myvalues = get_post_meta($post->ID,'type-regions',true); //using 'true' here is vital
foreach ($myvalues as $myvalue) { echo $myvalue->name.', '; } */
?>



<div class="detail-header clearfix">
							<div class="detail-header-name">
								<h3 itemprop="name" class="product_title entry-title hotel-name no-mb">Villa <?php the_title();?></h3>
								<span class="hotel-location">
								<i class="fa-map-marker mi text-warning">
								<?php
								$terms = get_field('type-region', $post->ID);
								if( $terms ): ?>
									<?php foreach( $terms as $term ): ?>
									<a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name.". "; ?></a>
									<?php endforeach; ?>
								<?php endif; ?>
								</i></span>
							</div>
							
							