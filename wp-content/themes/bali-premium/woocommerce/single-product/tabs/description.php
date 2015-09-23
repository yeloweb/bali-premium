<?php
/**
 * Description tab
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

								
?>								<h4>Découvrez la villa <?php the_title();?></h4>
								<?php echo '<span>'.the_terms( $post->ID, 'emplacement', '<h5>Emplacement de la villa : </h5><br/>', ' ', ' ' ).'</span></br>';?>
								<?php echo '<span>'.the_terms( $post->ID, 'vue', '<h5>Vue directe de la villa : </h5><br/>', ' ', ' ' ).'</span></br>';?>
								<?php echo '<span>'.the_terms( $post->ID, 'decoration', '<h5>Type de décoration : </h5><br/>', ', ', ' ' ).'</span></br>';?>
								<?php echo '<span>'.the_terms( $post->ID, 'architecture', '<h5>Architecture : </h5><br/>', ', ', ' ' ).'</span></br>';?>

								
									<?php the_content();?>
									

									
								
								
								<div class="clear mb-20"></div>

