<?php
/**
 * Related Products
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */


$args = array(
	'post_type'            => 'product',
	'ignore_sticky_posts'  => 1,
	'no_found_rows'        => 1,
	'posts_per_page'       => $posts_per_page,
	'orderby'              => $orderby,
	'post__in'             => $related,
	'post__not_in'         => array( $product->id )
) ;

$products = new WP_Query( $args );


?>

<?php
if ( $products->have_posts() ) : ?>

	<div class="related products">

		<h2>Villas similaires</h2>
		<div id="hot-deal-1" class="owl-carousel items-container small-grid">
			<?php while ( $products->have_posts() ) : $products->the_post(); ?>

												<div class="item">
									<div class="list-item">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="<?php the_permalink();?>">
													<!--<img class="lazyOwl" data-src="/images/list-items/best-offer-01.jpg" alt="Image" />-->
													<?php the_post_thumbnail();?>
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div>	
													</div>
												</a>	
											</div><!-- end image-inner -->
										</div><!-- end list-item-image -->
										<div class="list-item-label">
											<h4 class="list-item-title"><a href="<?php the_permalink();?>" class="inverse"><?php the_title();?></a></h4>
											<p class="line-h16px"><?php the_excerpt();?></p>
											<div class="clear"></div>
											<div class="list-item-save">
												<span class="text-bold">45 sec remaining</span>
												Save 40%
											</div>
											<div class="list-item-price">
												
											</div>
										</div><!-- end list-item-label -->
									</div>
								</div>

			<?php endwhile; // end of the loop. ?>
		</div>

	</div>

<?php endif;

