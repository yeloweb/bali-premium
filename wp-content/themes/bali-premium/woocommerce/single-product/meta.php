<?php
/**
 * Single Product Meta
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
$tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );


?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>
	
	<?php
	/*echo '<pre>';
	print_r(get_post_custom($post->ID));
	echo '</pre>';*/
	
	echo '<h5>'.get_post_meta($post->ID,'nb_chambre', true).' chambres</h5></br>';
	echo '<span>Superficie : '.get_post_meta($post->ID,'superficie_totale', true).' m²</span></br>';
	echo '<span>Capacité maximum : '.get_post_meta($post->ID,'capacite_maxi', true).' personnes</span></br></br>';


	
	echo '<span>'.the_terms( $post->ID, 'type_villa', 'Type de villa : ', ', ', ' ' ).'</span></br>';
	echo '<span>'.the_terms( $post->ID, 'emplacement', 'Emplacement de la villa : ', ' | ', ' ' ).'</span></br></br>';

	
	if(get_post_meta($post->ID,'credit_card', true) == 0) {
		$reponse = 'Oui';
		}else{
		$reponse = 'Non';
		}
	echo '<span>Carte de crédit acceptée : '.$reponse.'</span></br>';
	
	
	if(get_post_meta($post->ID,'enfant', true) == 0) {
		$reponse = 'Oui';
		}else{
		$reponse = 'Non';
		}
	echo '<span>Adaptée au moins de 10 ans  : '.$reponse.'</span></br></br>';

	
	


	?>
	
	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><?php _e( 'Reference de la villa :', 'woocommerce' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>

	<?php echo $product->get_categories( ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', $cat_count, 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php echo $product->get_tags( ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', $tag_count, 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
