<?php
/**
 * Specifications tab
 *
 * @author        WooThemes
 * @package       WooCommerce/Templates
 * @version       2.0.0
 */
?>

							<h4>Logement</h4>
								<h5>Chambres</h5>
								<ul class="facilities">
<?php

								
								/******* Nombre de chambres ***********/
								if(!empty(get_post_meta($post->ID,'nb_chambre', true))) {
									echo '<li class="nombre">Nombre de chambres : <span>'.get_post_meta($post->ID,'nb_chambre', true).'</span></li>';
								}else{
									echo '<li class="nombre">Nombre de chambres : / </li>';
								};									

								
								/******* Nombre de chambres mitoyennes ***********/
								if(!empty(get_post_meta($post->ID,'nb_chambre_mitoyenne', true))) {
									echo '<li class="nombre">Chambres mitoyennes : <span>'.get_post_meta($post->ID,'nb_chambre_mitoyenne', true).'</span></li>';
								}else{
									echo '<li class="nombre">Chambres mitoyennes : / </li>';
								};	
								
								
								/******* Nombre de chambres climatisées  ***********/
								if(!empty(get_post_meta($post->ID,'nb_chambre_climatisee', true))) {
									echo '<li class="nombre">Chambres climatisées : <span>'.get_post_meta($post->ID,'nb_chambre_climatisee', true).'</span></li>';
								}else{
									echo '<li class="nombre">Chambres climatisées : / </li>';
								};	
								
								echo "</ul>";
								echo "<div class='clear'></div>";
								echo "<h5>Couchages</h5>";
								echo "<ul class='facilities'>";
								
								
								
								/******* Nombre de lit(s) "King Size" ***********/
								if(!empty(get_post_meta($post->ID,'king_size', true))) {
									echo '<li class="nombre">Nombre de lit(s) "King Size" : <span>'.get_post_meta($post->ID,'king_size', true).'</span></li>';
								}else{
									echo '<li class="nombre">Nombre de lit(s) "King Size"  : / </li>';
								};		


								/******* Nombre de lit(s) "queen_size" ***********/
								if(!empty(get_post_meta($post->ID,'queen_size', true))) {
									echo '<li class="nombre">Nombre de lit(s) "Queen Size" : <span>'.get_post_meta($post->ID,'queen_size', true).'</span></li>';
								}else{
									echo '<li class="nombre">Nombre de lit(s) "Queen Size" : / </li>';
								};	

								
								/******* Nombre de lit(s) double(s) ***********/
								if(!empty(get_post_meta($post->ID,'lit_double', true))) {
									echo '<li class="nombre">Nombre de lit(s) double(s) : <span>'.get_post_meta($post->ID,'lit_double', true).'</span></li>';
								}else{
									echo '<li class="nombre">Nombre de lit(s) double(s) : / </li>';
								};	
								
								
								/******* Nombre de lit(s) simple(s)  ***********/
								if(!empty(get_post_meta($post->ID,'lit_simple', true))) {
									echo '<li class="nombre">Nombre de lit(s) simple(s) : <span>'.get_post_meta($post->ID,'lit_simple', true).'</span></li><br/>';
								}else{
									echo '<li class="nombre">Nombre de lit(s) simple(s) : / </li>';
								};	
								
								
								/******* Lit(s) enfants en bas âge  ***********/
								if(!empty(get_post_meta($post->ID,'lit_enfant', true))) {
									echo '<li class="nombre">Lit(s) enfants en bas âge : <span>'.get_post_meta($post->ID,'lit_enfant', true).'</span></li>';
								}else{
									echo '<li class="nombre">Lit(s) enfants en bas âge : / </li>';
								};	
								
								
								/******* Couchage(s) supplémentaire(s)  ***********/
								if(!empty(get_post_meta($post->ID,'couchage_supp', true))) {
									echo '<li class="nombre">Couchage(s) supplémentaire(s) : <span>'.get_post_meta($post->ID,'couchage_supp', true).'</span></li><br/>';
								}else{
									echo '<li class="nombre">Couchage(s) supplémentaire(s) : / </li>';
								};	

		
								echo "</ul>";
								echo "<div class='clear'></div>";
								echo "<h5>Salles de bain</h5>";
								echo "<ul class='facilities'>";
								
								
								
								/******* Nombre de salles de bain ***********/
								if(!empty(get_post_meta($post->ID,'nb_sdb', true))) {
									echo '<li class="nombre">Nombre de salles de bain : <span>'.get_post_meta($post->ID,'nb_sdb', true).'</span></li>';
								}else{
									echo '<li class="nombre">Nombre de salles de bain : / </li>';
								};	
								
								
								echo "</ul>";
								echo "<div class='clear'></div>";
								echo "<h5>Salons</h5>";
								echo "<ul class='facilities'>";
								
								
								/******* Nombre de salons ***********/
								if(!empty(get_post_meta($post->ID,'nb_salon', true))) {
									echo '<li class="nombre">Nombre de salons : <span>'.get_post_meta($post->ID,'nb_salon', true).'</span></li>';
								}else{
									echo '<li class="nombre">Nombre de salons : / </li>';
								};	
								
								/******* Nombre de salons climatisés ***********/
								if(!empty(get_post_meta($post->ID,'nb_salon_climatise', true))) {
									echo '<li class="nombre">Nombre de salons climatisés: <span>'.get_post_meta($post->ID,'nb_salon_climatise', true).'</span></li>';
								}else{
									echo '<li class="nombre">Nombre de salons climatisés : / </li>';
								};	

								
?>
								</ul>
							<div class="clear"></div>






							<h4>Loisirs</h4>
								<h5>Activités</h5>
								<ul class="facilities">
<?php
								$myvalues = get_post_meta($post->ID,'loisirs',true); //using 'true' here is vital
								$get_field = get_field( 'loisirs' ); 
								$count =0;
								foreach ($myvalues as $myvalue) { 								
									$value = 'valeur'.$count;
									$value = in_array( $myvalue, $get_field) ? 'checked' : ''; 
										echo '<li class="'.$value.' '.$myvalue.'">'.$myvalue.'</li>';
									$count ++;
								};
								

								
								
								echo "</ul>";
								echo "<div class='clear'></div>";
								echo "<h5 class='piscine'>Pisicines, Jacuzzis et spas</h5>";
								echo "<ul class='facilities'>";
								
								/******* nb_piscine ***********/
								if(!empty(get_post_meta($post->ID,'nb_piscine', true))) {
									echo '<li class="nombre">Nombre de piscine(s) : <span>'.get_post_meta($post->ID,'nb_piscine', true).'</span></li>';
								}else{
									echo '<li class="nombre">Nombre de piscine(s) : / </li>';
								};	
								
								/******* taille_piscine_principale ***********/
								if(!empty(get_post_meta($post->ID,'taille_piscine_principale', true))) {
									echo '<li class="nombre">Piscine principale : <span>'.get_post_meta($post->ID,'taille_piscine_principale', true).' m²</span></li>';
								}else{
									echo '<li class="nombre">Piscine principale : / </li>';
								};	
								
								/******* sauna ***********/
								if(get_post_meta($post->ID,'sauna', true) == 1) {
									echo '<li class="checked">Sauna</li>';
								}else{
									echo '<li>Sauna</li>';
								};	
								
								/******* nb_jacuzzi ***********/
								if(!empty(get_post_meta($post->ID,'nb_jacuzzi', true))) {
									echo '<li class="nombre">Nombre de jacuzzi(s) : <span>'.get_post_meta($post->ID,'nb_jacuzzi', true).'</span></li>';
								}else{
									echo '<li class="nombre">Nombre de jacuzzi(s) : / </li>';
								};	
								
								/******* spa_integre ***********/
								if(get_post_meta($post->ID,'spa_integre', true) == 1) {
									echo '<li class="checked">Spa intégré</li>';
								}else{
									echo '<li>Spa intégré</li>';
								};	
								
								
?>



								
								</ul>
							<div class="clear"></div>
							<h4>Equipements</h4>
								<ul class="facilities">
								<?php
								$myvalues = get_post_meta($post->ID,'equipements',true); //using 'true' here is vital
								$get_field = get_field( 'equipements' ); 
								$count =0;
								foreach ($myvalues as $myvalue) { 								
									$value = 'valeur'.$count;
									$value = in_array( $myvalue, $get_field) ? 'checked' : ''; 
										echo '<li class="'.$value.' '.$myvalue.'">'.$myvalue.'</li>';
									$count ++;
								}
								
								/******* COFFRE FORT ***********/
								if(!empty(get_post_meta($post->ID,'coffres_forts', true))) {
									echo '<li class="nombre">Nombre de coffres forts : <span>'.get_post_meta($post->ID,'coffres_forts', true).'</span></li>';
								}else{
									echo '<li class="nombre">Nombre de coffres forts : / </li>';
								};	

								
								/******* Nb de TV ***********/
								if(!empty(get_post_meta($post->ID,'tv', true))) {
									echo '<li class="nombre">Nombre de TV : <span>'.get_post_meta($post->ID,'tv', true).'</span></li>';
								}else{
									echo '<li class="nombre">Nombre de TV : / </li>';
								};	
								
								
								/******* Nb de TV avec chaines satellite ***********/
								if(!empty(get_post_meta($post->ID,'tv_satellite', true))) {
									echo '<li class="nombre">TV avec chaines satellite : <span>'.get_post_meta($post->ID,'tv_satellite', true).'</span></li><br/>';
								}else{
									echo '<li class="nombre">TV avec chaines satellite : / </li>';
								};	
								
?>
								</ul>
								<div class="clear"></div>
								
							<h4>Transports</h4>
								<ul class="facilities">
								<?php
								$myvalues = get_post_meta($post->ID,'transport',true); //using 'true' here is vital
								if(!empty($myvalues)){
									$get_field = get_field( 'transport' ); 
									$count =0;
									foreach ($myvalues as $myvalue) { 								
										$value = 'valeur'.$count;
										$value = in_array( $myvalue, $get_field) ? 'checked' : ''; 
											echo '<li class="'.$value.' '.$myvalue.'">'.$myvalue.'</li>';
										$count ++;
									}
									
								}
?>
								</ul>
								<div class="clear"></div>
								
								
								
							<h4>Personnel et Organisation</h4>
								<ul class="facilities">
										<?php echo the_terms( $post->ID, 'personnel', '<li class="checked">', '</li><li class="checked">', '</li> ' ).'</br>';?>
								</ul>
								<div class="clear"></div>