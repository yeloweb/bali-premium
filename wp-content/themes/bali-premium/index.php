<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */


get_header(); ?>

		<div id="slider_wrapper">
			<div class="owl-slider-wrapper center-capture">
				<div id="owl-slider" class="owl-carousel owl-theme">
					 <?php putRevSlider("villas_slider", "homepage") ?>
				</div>
			</div>
		</div><!-- end slider_wrapper -->
		
		<div id="content_wrapper">
			<div class="container">
				
				<div class="travel-search">
					<div class="travel-search-inner">
						<ul class="tabs searchTab">
							<li><a href="#hotelsSearch" class="active"><span class="hotel mi"></span>Hotels</a></li>
						</ul><!-- tabs -->
						
						<ul class="tabs-content">
							<li id="hotelsSearch" class="active">
								<form role="form" class="row" />
									<div class="col-xs-12 col-sm-4 col-md-4">
										<div class="form-group">
											<label for="hotelLocation">Where to Stay?</label>
											<input type="text" class="form-control" id="hotelLocation" placeholder="Thailand" />
										</div>
									</div>
									<div class="col-xs-12 col-sm-4 col-md-2">
										<div class="form-group datepicker-wrapper">
											<label for="hotel-check-in">Check-in</label>
											<input type="text" class="form-control date" id="hotel-check-in" placeholder="dd/dm/yy" />
											<i class="fa fa-calendar"></i>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4 col-md-2">
										<div class="form-group datepicker-wrapper">
											<label for="hotel-check-out">Check-out</label>
											<input type="text" class="form-control date" id="hotel-check-out" placeholder="dd/dm/yy" />
											<i class="fa fa-calendar"></i>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4 col-md-1">
										<div class="form-group">
											<label for="hotelAdult">Adult</label>
											<select class="form-control mySelectBoxClass" id="hotelAdult">
												<option />0
												<option selected="" />1
												<option />2
												<option />3
												<option />4
												<option />5
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4 col-md-1">
										<div class="form-group">
											<label for="HotelChild">Child</label>
											<select class="form-control mySelectBoxClass" id="HotelChild">
												<option />0
												<option selected="" />1
												<option />2
												<option />3
												<option />4
												<option />5
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4 col-md-2">
										<div class="clear"></div>
										<button type="submit" class="btn btn-primary btn-block">Search</button>
									</div>
								</form>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="clear"></div>
				<!--------------------------------------------------------->
				<!--------------          DESCRIPTION         ----------------->
				<!--------------------------------------------------------->			
				
				
				<?php 
				wp_reset_postdata();
				query_posts('pagename=accueil');
				?>
				<?php if(have_posts()): while(have_posts()): the_post();?>
				
				<div class="white-bg">
					<div class="container">
						<div class="last-min">
							<span class="menu-image">.</span>
							<div class="block clearfix mv-15"><?php the_content();?></div>
							<a href="#">En savoir plus sur Bali Premium</a>
						</div>
					</div>
				</div>
				<?php endwhile;  ?>
				<?php wp_reset_postdata(); ?>
				<?php endif;  ?>
				
				<!--------------------------------------------------------->
				<!--------------           VILLAS         ----------------->
				<!--------------------------------------------------------->
				<div class="row clearfix pv-30 mt-20">
					<div class="col-xs-12 col-sm-12 col-md-12 product-3">
						<h3 class="section-title mb-30">Notre sélection des villas du mois</h3>
						<div class="hot-deal-wrapper">
							<div class="hotDeal1Navigation">
								<a class="hotDeal1-prev"><i class="icon icon-left-open-big"></i></a>
								<a class="hotDeal1-next"><i class="icon icon-right-open-big"></i></a>
							</div>

							<div id="hot-deal-1" class="owl-carousel items-container small-grid">
							<!--------------------------------------------------------->
							
							<?php 
							wp_reset_postdata();
							query_posts('post_type=product');
							?>
							<?php if(have_posts()): while(have_posts()): the_post();?>
							
							
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
												<span>$250</span><a href="">$150</a>
											</div>
										</div><!-- end list-item-label -->
									</div>
								</div>
								<?php endwhile;  ?>
								<?php wp_reset_postdata(); ?>
								<?php endif;  ?>
								
								<!--------------------------------------------------------->
								

							</div>
						</div>
					</div>
					<div class="clear"></div><!-- Fin villas -->
					
					
					<div class="row clearfix pv-30 mt-20">
						<div class="col-xs-12 col-sm-12 col-md-12 product-3 display-prestataire">
							<div class="row">
								<div class="box small-box col-md-4 col-xs-12 col-sm-12">
									<div class="bg-prestataire">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="<?php the_permalink();?>">
													<img src="http://www.balilocations.com/sites/default/files/collection/42.jpg" alt="Image" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div><!--/ .extra-content-->	
													</div><!--/ .image-extra-->
												</a>	
											</div>
										</div><!-- end list-item -->
										<p class="text">Art & Culture</p>
									</div>
								</div>
								<div class="box small-box col-md-4 col-xs-12 col-sm-12">
									<div class="bg-prestataire">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="<?php the_permalink();?>">
													<img src="http://www.balilocations.com/sites/default/files/collection/9632.jpg" alt="Image" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div><!--/ .extra-content-->	
													</div><!--/ .image-extra-->
												</a>	
											</div>
										</div><!-- end list-item -->
										<p class="text">Shopping</p>
									</div>
								</div>
								<div class="box small-box col-md-4 col-xs-12 col-sm-12">
									<div class="bg-prestataire">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="<?php the_permalink();?>">
													<img src="http://www.balilocations.com/sites/default/files/collection/Affordable%20villas.jpg" alt="Image" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div><!--/ .extra-content-->	
													</div><!--/ .image-extra-->
												</a>	
											</div>
										</div><!-- end list-item -->
										<p class="text">Sport & Activités</p>
									</div>
								</div>
							</div><!-- End First ROW -->
							
							
							<div class="row">
								<div class="box col-md-4 col-xs-12 col-sm-12">
									<div class="bg-prestataire">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="<?php the_permalink();?>">
													<img src="http://www.balilocations.com/sites/default/files/collection/6666.jpg" alt="Image" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div><!--/ .extra-content-->	
													</div><!--/ .image-extra-->
												</a>	
											</div>
										</div><!-- end list-item -->
										<p class="text">Spa & Beauté</p>
									</div>
								</div>
								<div class="box col-md-8 col-xs-12 col-sm-12">
									<div class="bg-prestataire">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="<?php the_permalink();?>">
													<img src="http://www.balilocations.com/sites/default/files/collection/Sans-titre-2.jpg" alt="Image" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div><!--/ .extra-content-->	
													</div><!--/ .image-extra-->
												</a>	
											</div>
										</div><!-- end list-item -->
										<p class="text">Restaurant & Lounges</p>
									</div>
								</div>							
							</div><!-- End Second ROW -->		

							<div class="row">
								<div class="box small-box col-md-4 col-xs-12 col-sm-12">
									<div class="bg-prestataire">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="<?php the_permalink();?>">
													<img src="http://www.balilocations.com/sites/default/files/collection/42.jpg" alt="Image" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div><!--/ .extra-content-->	
													</div><!--/ .image-extra-->
												</a>	
											</div>
										</div><!-- end list-item -->
										<p class="text">Evenements</p>
									</div>
								</div>
								<div class="box small-box col-md-4 col-xs-12 col-sm-12">
									<div class="bg-prestataire">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="<?php the_permalink();?>">
													<img src="http://www.balilocations.com/sites/default/files/collection/9632.jpg" alt="Image" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div><!--/ .extra-content-->	
													</div><!--/ .image-extra-->
												</a>	
											</div>
										</div><!-- end list-item -->
										<p class="text">Transports</p>
									</div>
								</div>									
								<div class="box small-box col-md-4 col-xs-12 col-sm-12">
									<div class="bg-prestataire">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="<?php the_permalink();?>">
													<img src="http://www.balilocations.com/sites/default/files/collection/Affordable%20villas.jpg" alt="Image" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div><!--/ .extra-content-->	
													</div><!--/ .image-extra-->
												</a>	
											</div>
										</div><!-- end list-item -->
										<p class="text">Compagnies aériennes</p>
									</div>
								</div>	
							</div><!-- End Third ROW -->
							
						</div>
					</div>
					<div class="clear"></div><!-- Fin villas -->
				<!--------------------------------------------------------->
				<!--------------           PRESTATAIRES   ----------------->
				<!--------------------------------------------------------->
					
					
					<div class="col-xs-12 col-sm-12 col-md-12 product-3">
						<h3 class="section-title mb-30">Les lieux à visiter</h3>
						<div class="hot-deal-wrapper">
						<div class="container home-prestataire">
											
							<div class="row pv-30 mt-20 product-4">
							<!--------------------------------------------------------->
							
							<?php
	
							query_posts('post_type=prestataire&showposts=3');
							?>
							<?php if(have_posts()): while(have_posts()): the_post();?>
							
							<?php $categories = get_the_category(); 
								//echo '<pre>'; print_r($categories); echo '</pre>';
								$category = $categories[1]->name;
							?>
							
								<div class="col-xs-12 col-sm-4 col-md-4">
									<div class="list-item ">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="<?php the_permalink();?>">
													<?php the_post_thumbnail();?>
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div><!--/ .extra-content-->	
													</div><!--/ .image-extra-->
												</a>	
											</div>
										</div><!-- end list-item -->
										<div class="product-4-label">
											<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
											<h4>- <?php echo $category; ?> -</h4>
											<div class="bb2 mb-20"></div>
											<?php the_excerpt();?>
											<a href="<?php the_permalink();?>" class="more-link">More</a>
										</div>
									</div>
								</div>
								<?php endwhile;  ?>
								<?php wp_reset_postdata(); ?>
								<?php endif;  ?>
								<?php wp_reset_query();?>
								
								<!--------------------------------------------------------->
								
								
													<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="list-item">
							<div class="list-item-image">
								<div class="image-inner">
									<a class="link-image" href="page-details.html">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/list-items/item-wide-05.jpg" alt="" />
										<div class="image-overlay">
											<div class="overlay-content">
												<div class="overlay-icon"><i class="icon_link"></i></div>
											</div><!--/ .extra-content-->	
										</div><!--/ .image-extra-->
									</a>	
								</div>
							</div><!-- end list-item -->
							<div class="product-4-label">
								<h3><a href="#">Zealously prevailed be arranging do. Set arranging too dejection.</a></h3>
								<div class="bb2 mb-20"></div>
								<p>Sir margaret drawings repeated recurred exercise laughing may you but. Do repeated whatever to welcomed absolute no. Fat surprise although outlived and informed shy dissuade property.</p>
								<a href="#" class="more-link">More</a>
							</div>
						</div>
					</div>
					
								
								<!--------------------------------------------------------->
																

							</div>
						</div>
					</div>
					</div>
					<div class="clear"></div><!---Fin prestataires------>
					
										
				<!--------------------------------------------------------->
				<!--------------    	CARTE INTERACTIVE  ----------------->
				<!--------------------------------------------------------->
				
				
				<div class='homepage-carte'>
				<?php					
									
				$id_post = get_the_ID(); 
				$exclu = "0";

				// The Query
				$the_query = new WP_Query( array( 'post_type' => 'prestataire', 'post__not_in' => array( $id_post ) ) );

				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						$exclu .= ',';
						$exclu .= get_the_ID();
					}
				} else {
					// no posts found
					echo 'not found';
				}

				/* Restore original Post Data */
				wp_reset_postdata();

				 //echo GeoMashup::nearby_list( 'object_id='.$id_post.'&radius=50&units=mi&limit=3&exclude_object_ids='.$exclu ); 
				 
				 echo GeoMashup::map('height=500&width=100%&zoom=10&add_overview_control=false&add_map_type_control=false&object_id='.$id_post.'&radius=20&units=mi&map_content=global&marker_select_center=true&exclude_object_ids='.$exclu.'&map_cat=villa' ); 
				 
				 //echo GeoMashup::map('height=500&width=100%&zoom=9&add_overview_control=false&add_map_type_control=false&center_lat=-8.351669&center_lng=115.215209&radius=20&units=mi&map_content=global&marker_select_center=true' ); 
				 
				 //echo GeoMashup::term_legend(); 
				 //echo GeoMashup::full_post(); 
				 //echo GeoMashup::visible_posts_list(); 
				 
				 //echo GeoMashup::show_on_map_link();
				 //echo GeoMashup::list_located_posts_by_area('limit=2'); 
				 //echo GeoMashup::category_name(); 
				 
				 /******************************************************************************/
									
				?>	
				</div>
				
				<!--------------------------------------------------------->
				<!--------------    	DESTINATIONS	   ----------------->
				<!--------------------------------------------------------->
					
					

					<div class="col-xs-12 col-sm-12 col-md-12 mt-30">
						<div class="gr-style"></div>
						<h3 class="section-title mv-30">Top Destinations</h3>
					</div>
							<div class="produc-item region">
							<!--------------------------------------------------------->
							
							<?php
							query_posts('post_type=region');
							?>
							<?php if(have_posts()): while(have_posts()): the_post(); ?>
							
								
									<div class="col-xs-12 col-sm-6 col-md-3">
										<div class="list-item">
											<div class="list-item-image">
												<div class="image-inner">
													<a class="link-image" href="<?php the_permalink();?>">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/list-items/top-destination-05.jpg" alt="Image" />
														<div class="image-overlay">
															<div class="overlay-content">
																<div class="overlay-icon"><i class="icon_link"></i></div>
															</div><!--/ .extra-content-->	
														</div><!--/ .image-extra-->
													</a>	
												</div>
											</div><!-- end list-item -->
											<div class="list-item-label">
												<h4 class="list-item-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
												<div class="list-item-price">
													<a href="<?php the_permalink();?>"><i class="fa-arrow-right"></i></a>
												</div>
											</div>
										</div>
									

									</div>
									<?php endwhile;  ?>
									<?php wp_reset_postdata(); ?>
									<?php endif;  ?>
									<?php wp_reset_query();?>
									
									<!--------------------------------------------------------->
					</div>
					<div class="clear"></div><!---Fin regions------>
					

				</div>
			</div>
		</div><!-- end content_wrapper -->

<?php get_footer(); ?>
