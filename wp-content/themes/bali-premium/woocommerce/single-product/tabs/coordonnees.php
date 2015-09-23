<?php
/**
 * Description tab
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

								
?>							<div class="bali-address">
								<ul class="address">
								
								<?php
								/******* adresse ***********/
								if(!empty(get_post_meta($post->ID,'adresse', true))) {
									$adresse= get_post_meta($post->ID,'adresse', true);
								};	
								
								/******* code_postal ***********/
								if(!empty(get_post_meta($post->ID,'code_postal', true))) {
									$code_postal= get_post_meta($post->ID,'code_postal', true);
								};	
								
								/******* ville ***********/
								if(!empty(get_post_meta($post->ID,'ville', true))) {
									$ville= get_post_meta($post->ID,'ville', true);
								};	
								
								/******* pays ***********/
								if(!empty(get_post_meta($post->ID,'pays', true))) {
									$pays= get_post_meta($post->ID,'pays', true);
								};	
								
								/******* telephone ***********/
								if(!empty(get_post_meta($post->ID,'telephone', true))) {
									$telephone= get_post_meta($post->ID,'telephone', true);
								};	
								
								
								/******* email ***********/
								if(!empty(get_post_meta($post->ID,'email', true))) {
									$email= get_post_meta($post->ID,'email', true);
								};	
								
																
								/******* site_web ***********/
								if(!empty(get_post_meta($post->ID,'site_web', true))) {
									$site_web= get_post_meta($post->ID,'site_web', true);
								};	
								
								/******* proprietaire ***********/
								if(!empty(get_post_meta($post->ID,'proprietaire', true))) {
									$proprietaire= get_post_meta($post->ID,'proprietaire', true);
								};	
								
								
								?>
								
								
									<li><i class="fa-map-marker"></i><?php echo $adresse; ?>, <?php echo $ville; ?>, <?php echo $code_postal; ?> | <?php echo $pays; ?></li>
									<li><i class="fa-phone"></i><?php echo $telephone; ?></li>
									<li><i class="fa-envelope"></i><?php echo $email; ?></li>
									<li><i class="fa-user"></i>Propriétaire de la villa : <?php echo $proprietaire; ?></li>
									<li><i class="fa-globe"></i> <a href="<?php echo $site_web; ?>">http://<?php echo $site_web; ?></a></li>
								</ul>  
							</div>