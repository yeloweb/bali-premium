<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
					<div class="detail-header-review">
								<span class="rating-static rating-45"></span>
								<span>436 reviews</span>
					</div>
				</div><!-- detail-header -->
					
					<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="detail-header-price">
								<p class="price"><?php echo $product->get_price_html(); ?><span>avg/night</span></p>
								
								<meta itemprop="price" content="<?php echo $product->get_price(); ?>" />
								<meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
								<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />
								

					</div>
			
