<?php
/**
 * Single Product tabs
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>



	<div class="clear"></div>
	<div class="tabs mt-20">
						<ul class="tabs">
							<li><a href="#details-tab1" class="active">Description</a></li>
							<li><a href="#details-tab2">Galerie</a></li>
							<li><a href="#details-tab3">Spécifications</a></li>
							<li onclick="loadScript()"><a href="#details-tab4">Carte</a></li>
							<li><a href="#details-tab5" >Réservation</a></li>
							<li><a href="#details-tab6">Avis</a></li>
							<li><a href="#details-tab7">A découvrir...</a></li>
						</ul><!-- tabs -->
			
					<ul id="detail-tab" class="tabs-content xss-mb">
							
							
							<!-- DESCRIPTION -->
							<li id="details-tab1" class="active description">
							<?php include (TEMPLATEPATH . "/woocommerce/single-product/tabs/description.php"); ?>
							</li>
							
							<!-- GALLERY -->
							<li id="details-tab2" class="gallery">
							<?php include (TEMPLATEPATH . "/woocommerce/single-product/tabs/gallery.php"); ?>
							</li>							
							
							<!-- SPECIFICATIONS -->	
							<li id="details-tab3" class="specification">
							<?php include (TEMPLATEPATH . "/woocommerce/single-product/tabs/specification.php"); ?>
							</li>
							
															
							<!-- CARTE -->	
							<li id="details-tab4" class="carte">
							<?php include (TEMPLATEPATH . "/woocommerce/single-product/tabs/carte.php"); ?>
							</li>
							
							<!-- RESERVATION -->							
							<li id="details-tab5" class="reservation">
							<?php include (TEMPLATEPATH . "/woocommerce/single-product/tabs/reservation.php"); ?>
							</li>

							<!-- AVIS -->	
							<li id="details-tab6" class="commentaire">
							<?php include (TEMPLATEPATH . "/woocommerce/single-product/tabs/commentaire.php"); ?>
							</li>

							<!-- A DECOUVRIR -->	
							<li id="details-tab7" class="decouvrir">
							<?php include (TEMPLATEPATH . "/woocommerce/single-product/tabs/decouvrir.php"); ?>
							</li>
							
						</ul><!-- end tabs -->
					
	</div>

<?php endif; ?>
