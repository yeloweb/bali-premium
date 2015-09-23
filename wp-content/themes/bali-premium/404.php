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


		
		<div id="content_wrapper">
			<div class="container">
				

				
				<div class="clear"></div>
				
				<div class="row clearfix pv-30 mt-20">
					<div class="col-xs-12 col-sm-12 col-md-12 product-3">
						<h3 class="section-title mb-30">Page non trouvée</h3>
						<h3 class="section-title mb-30">Voir nos autres offres :</h3>
						<div class="hot-deal-wrapper">
							<div class="hotDeal1Navigation">
								<a class="hotDeal1-prev"><i class="icon icon-left-open-big"></i></a>
								<a class="hotDeal1-next"><i class="icon icon-right-open-big"></i></a>
							</div>

							<div id="hot-deal-1" class="owl-carousel items-container small-grid">
							<!--------------------------------------------------------->
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
											<p class="line-h16px"><?php the_content('Lire la suite');?></p>
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
								<?php endwhile; endif; ?>
								
								<!--------------------------------------------------------->
								<!--------------------------------------------------------->
								
								
								<div class="item">
									<div class="list-item">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="page-details.html">
													<img class="lazyOwl" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/list-items/best-offer-02.jpg" alt="Image" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div>	
													</div>
												</a>	
											</div><!-- end image-inner -->
										</div><!-- end list-item-image -->
										<div class="list-item-label">
											<h4 class="list-item-title mb-10"><a href="page-details.html" class="inverse">The Hilton Maldives Resort & Spa</a></h4>
											<p class="line-h16px">Rangali Island, Maldives</p>
											<div class="clear"></div>
											<div class="list-item-save">
												<span class="text-bold">120 sec remaining</span>
												Save 50%
											</div>
											<div class="list-item-price">
												<span>$300</span><a href="">$230</a>
											</div>
										</div><!-- end list-item-label -->
									</div>
								</div>
								<div class="item">
									<div class="list-item">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="page-details.html">
													<img class="lazyOwl" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/list-items/best-offer-03.jpg" alt="Image" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div>	
													</div>
												</a>	
											</div><!-- end image-inner -->
										</div><!-- end list-item-image -->
										<div class="list-item-label">
											<h4 class="list-item-title mb-10"><a href="page-details.html" class="inverse">Anantara Seminyak Resort & Spa</a></h4>
											<p class="line-h16px">Bali, Indonesia</p>
											<div class="clear"></div>
											<div class="list-item-save">
												<span class="text-bold">21 min remaining</span>
												Save 30%
											</div>
											<div class="list-item-price">
												<span>$540</span><a href="">$400</a>
											</div>
										</div><!-- end list-item-label -->
									</div>
								</div>
								<div class="item">
									<div class="list-item">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="page-details.html">
													<img class="lazyOwl" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/list-items/best-offer-04.jpg" alt="Image" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div>	
													</div>
												</a>	
											</div><!-- end image-inner -->
										</div><!-- end list-item-image -->
										<div class="list-item-label">
											<h4 class="list-item-title mb-10"><a href="page-details.html" class="inverse">Shanti Maurice</a></h4>
											<p class="line-h16px">Grenier, Mauritius</p>
											<div class="clear"></div>
											<div class="list-item-save">
												<span class="text-bold">45 min remaining</span>
												Save 45%
											</div>
											<div class="list-item-price">
												<span>$700</span><a href="">$550</a>
											</div>
										</div><!-- end list-item-label -->
									</div>
								</div>
								<div class="item">
									<div class="list-item">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="page-details.html">
													<img class="lazyOwl" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/list-items/best-offer-05.jpg" alt="Image" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div>	
													</div>
												</a>	
											</div><!-- end image-inner -->
										</div><!-- end list-item-image -->
										<div class="list-item-label">
											<h4 class="list-item-title mb-10"><a href="page-details.html" class="inverse">Mandarin Oriental</a></h4>
											<p class="line-h16px">Orchard, Singapore</p>
											<div class="clear"></div>
											<div class="list-item-save">
												<span class="text-bold">1 hr 23 min remaining</span>
												Save 50%
											</div>
											<div class="list-item-price">
												<span>$300</span><a href="">$600</a>
											</div>
										</div><!-- end list-item-label -->
									</div>
								</div>
								<div class="item">
									<div class="list-item">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="page-details.html">
													<img class="lazyOwl" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/list-items/best-offer-06.jpg" alt="Image" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div>	
													</div>
												</a>	
											</div><!-- end image-inner -->
										</div><!-- end list-item-image -->
										<div class="list-item-label">
											<h4 class="list-item-title mb-10"><a href="page-details.html" class="inverse">Marina Bay Sands</a></h4>
											<p class="line-h16px">Orchard, Singapore</p>
											<div class="clear"></div>
											<div class="list-item-save">
												<span class="text-bold">12 hr 01 min remaining</span>
												Save 40%
											</div>
											<div class="list-item-price">
												<span>$250</span><a href="">$150</a>
											</div>
										</div><!-- end list-item-label -->
									</div>
								</div>
								<div class="item">
									<div class="list-item">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="page-details.html">
													<img class="lazyOwl" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/list-items/best-offer-07.jpg" alt="Image" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div>	
													</div>
												</a>	
											</div><!-- end image-inner -->
										</div><!-- end list-item-image -->
										<div class="list-item-label">
											<h4 class="list-item-title mb-10"><a href="page-details.html" class="inverse">Madinat Jumeirah</a></h4>
											<p class="line-h16px">Dubai, UAE</p>
											<div class="clear"></div>
											<div class="list-item-save">
												<span class="text-bold">2 days 19 hr remaining</span>
												Save 40%
											</div>
											<div class="list-item-price">
												<span>$150</span><a href="">$90</a>
											</div>
										</div><!-- end list-item-label -->
									</div>
								</div>
								<div class="item">
									<div class="list-item">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="page-details.html">
													<img class="lazyOwl" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/list-items/best-offer-08.jpg" alt="Image" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div>	
													</div>
												</a>	
											</div><!-- end image-inner -->
										</div><!-- end list-item-image -->
										<div class="list-item-label">
											<h4 class="list-item-title mb-10"><a href="page-details.html" class="inverse">Silavadee Pool Spa Resort</a></h4>
											<p class="line-h16px">Koh Samui, Thailand</p>
											<div class="clear"></div>
											<div class="list-item-save">
												<span class="text-bold">4 days 21 hr remaining</span>
												Save 40%
											</div>
											<div class="list-item-price">
												<span>$250</span><a href="">$150</a>
											</div>
										</div><!-- end list-item-label -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					
					<div class="col-xs-12 col-sm-12 col-md-12 mt-30">
						<div class="gr-style"></div>
						<h3 class="section-title mv-30">Top Destinations</h3>
					</div>
					
					<div class="produc-item">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="list-item">
								<div class="list-item-image">
									<div class="image-inner">
										<a class="link-image" href="page-details.html">
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
									<h4 class="list-item-title"><a href="page-details.html">Bora Bora, French Polynesia</a></h4>
									<div class="list-item-price">
										<a href=""><i class="fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="list-item">
								<div class="list-item-image">
									<div class="image-inner">
										<a class="link-image" href="page-details.html">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/list-items/top-destination-06.jpg" alt="Image" />
											<div class="image-overlay">
												<div class="overlay-content">
													<div class="overlay-icon"><i class="icon_link"></i></div>
												</div><!--/ .extra-content-->	
											</div><!--/ .image-extra-->
										</a>	
									</div>
								</div><!-- end list-item -->
								<div class="list-item-label">
									<h4 class="list-item-title"><a href="page-details.html">Hong Kong, China</a></h4>
									<div class="list-item-price">
										<a href=""><i class="fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="list-item">
								<div class="list-item-image">
									<div class="image-inner">
										<a class="link-image" href="page-details.html">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/list-items/top-destination-07.jpg" alt="Image" />
											<div class="image-overlay">
												<div class="overlay-content">
													<div class="overlay-icon"><i class="icon_link"></i></div>
												</div><!--/ .extra-content-->	
											</div><!--/ .image-extra-->
										</a>	
									</div>
								</div><!-- end list-item -->
								<div class="list-item-label">
									<h4 class="list-item-title"><a href="page-details.html">Mykonos, Greece</a></h4>
									<div class="list-item-price">
										<a href=""><i class="fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="list-item">
								<div class="list-item-image">
									<div class="image-inner">
										<a class="link-image" href="page-details.html">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/list-items/top-destination-08.jpg" alt="Image" />
											<div class="image-overlay">
												<div class="overlay-content">
													<div class="overlay-icon"><i class="icon_link"></i></div>
												</div><!--/ .extra-content-->	
											</div><!--/ .image-extra-->
										</a>	
									</div>
								</div><!-- end list-item -->
								<div class="list-item-label">
									<h4 class="list-item-title"><a href="page-details.html">San Francisco, USA</a></h4>
									<div class="list-item-price">
										<a href=""><i class="fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="list-item">
								<div class="list-item-image">
									<div class="image-inner">
										<a class="link-image" href="page-details.html">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/list-items/top-destination-01.jpg" alt="Image" />
											<div class="image-overlay">
												<div class="overlay-content">
													<div class="overlay-icon"><i class="icon_link"></i></div>
												</div><!--/ .extra-content-->	
											</div><!--/ .image-extra-->
										</a>	
									</div>
								</div><!-- end list-item -->
								<div class="list-item-label">
									<h4 class="list-item-title"><a href="page-details.html">Dubai, UAE</a></h4>
									<div class="list-item-price">
										<a href=""><i class="fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="list-item">
								<div class="list-item-image">
									<div class="image-inner">
										<a class="link-image" href="page-details.html">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/list-items/top-destination-02.jpg" alt="Image" />
											<div class="image-overlay">
												<div class="overlay-content">
													<div class="overlay-icon"><i class="icon_link"></i></div>
												</div><!--/ .extra-content-->	
											</div><!--/ .image-extra-->
										</a>	
									</div>
								</div><!-- end list-item -->
								<div class="list-item-label">
									<h4 class="list-item-title"><a href="page-details.html">Varenna, Italy</a></h4>
									<div class="list-item-price">
										<a href=""><i class="fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="list-item">
								<div class="list-item-image">
									<div class="image-inner">
										<a class="link-image" href="page-details.html">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/list-items/top-destination-03.jpg" alt="Image" />
											<div class="image-overlay">
												<div class="overlay-content">
													<div class="overlay-icon"><i class="icon_link"></i></div>
												</div><!--/ .extra-content-->	
											</div><!--/ .image-extra-->
										</a>	
									</div>
								</div><!-- end list-item -->
								<div class="list-item-label">
									<h4 class="list-item-title"><a href="page-details.html">Santorini, Greece</a></h4>
									<div class="list-item-price">
										<a href=""><i class="fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="list-item">
								<div class="list-item-image">
									<div class="image-inner">
										<a class="link-image" href="page-details.html">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/list-items/top-destination-04.jpg" alt="Image" />
											<div class="image-overlay">
												<div class="overlay-content">
													<div class="overlay-icon"><i class="icon_link"></i></div>
												</div><!--/ .extra-content-->	
											</div><!--/ .image-extra-->
										</a>	
									</div>
								</div><!-- end list-item -->
								<div class="list-item-label">
									<h4 class="list-item-title"><a href="page-details.html">New York, USa</a></h4>
									<div class="list-item-price">
										<a href=""><i class="fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end content_wrapper -->

<?php get_footer(); ?>
