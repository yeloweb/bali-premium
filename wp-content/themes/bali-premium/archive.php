
<?php get_header(); ?>


		<div id="page_title">
			<div class="container clearfix">
				<div class="page-name">List Page - Archive generale</div>
				<div class="breadcrumb clearfix">
					<?php if ( function_exists('yoast_breadcrumb') ) 
				{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
				</div>
			</div>
		</div><!-- end slider_wrapper -->
		
		<div id="content_wrapper">
			<div class="container">
				<div class="row clearfix pv-30 mt-20">
					<?php get_sidebar('left'); ?>
					<div class="col-xs-12 col-sm-8 col-md-9">
					<?php get_sidebar('search'); ?>
						
						<div class="clear mb-30"></div>					
						<div class="row items-container list-style">
						<!---------------->
						<?php wp_reset_postdata(); ?>	
						<?php query_posts('post_type=post'); ?>
						<?php if(have_posts()): while(have_posts()): the_post();?>
						
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="list-item">
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
									<div class="list-item-label">
										<div class="left">
											<h4 class="list-item-title"><a href="<?php the_permalink();?>" class="inverse"><?php the_title();?></a></h4>
											<span class="list-item-location">Phuket, Thailand</span>
											<div class="list-item-details">
												<div class="clear mt-10"></div>
												<?php the_excerpt();?>
												<ul class="hotelpreferences">
													<li class="icohp-internet toptip" title="Internet"></li>
													<li class="icohp-air toptip" title="Air"></li>
													<li class="icohp-pool toptip" title="Swimming Pool"></li>
													<li class="icohp-childcare toptip" title="Childcare"></li>
													<li class="icohp-fitness toptip" title="Fitness"></li>
													<li class="icohp-breakfast toptip" title="Breakfast"></li>
													<li class="icohp-parking toptip" title="Parking"></li>
													<li class="icohp-pets toptip" title="Pets"></li>
												</ul>
												<div class="clear mb-10"></div>
											</div>
										</div>
										<div class="right">
											<div class="list-item-meta">
												<span class="rating-static rating-30"></span>
												<span class="list-item-review">272 Reviews</span>
											</div>
											<div class="list-item-price">
												$150 <span>per night</span>
											</div>
											<a href="page-details.html" class="btn">Details</a>
										</div>
									</div>
								</div>
							</div>
							<?php endwhile; endif; ?>
							
							<!---------------->
							
							
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="list-item">
									<div class="list-item-image">
										<div class="image-inner">
											<a class="link-image" href="page-details.html">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images//list-items/item2.jpg" alt="" />
												<div class="image-overlay">
													<div class="overlay-content">
														<div class="overlay-icon"><i class="icon_link"></i></div>
													</div><!--/ .extra-content-->	
												</div><!--/ .image-extra-->
											</a>	
										</div>
									</div><!-- end list-item -->
									<div class="list-item-label">
										<div class="left">
											<h4 class="list-item-title"><a href="page-details.html" class="inverse">Macalister Mansion</a></h4>
											<span class="list-item-location">Penang, Malaysia</span>
											<div class="list-item-details">
												<div class="clear mt-10"></div>
												Arrived compass prepare an on as. Reasonable particular on my it in from sympathize. Size now easy eat hand how. Unwilling he departure that to elsewhere.
												<ul class="hotelpreferences">
													<li class="icohp-internet toptip" title="Internet"></li>
													<li class="icohp-air toptip" title="Air"></li>
													<li class="icohp-pool toptip" title="Swimming Pool"></li>
													<li class="icohp-childcare toptip" title="Childcare"></li>
													<li class="icohp-fitness toptip" title="Fitness"></li>
													<li class="icohp-breakfast toptip" title="Breakfast"></li>
													<li class="icohp-parking toptip" title="Parking"></li>
													<li class="icohp-pets toptip" title="Pets"></li>
												</ul>
												<div class="clear mb-10"></div>
											</div>
										</div>
										<div class="right">
											<div class="list-item-meta">
												<span class="rating-static rating-30"></span>
												<span class="list-item-review">522 Reviews</span>
											</div>
											<div class="list-item-price">
												$250 <span>per night</span>
											</div>
											<a href="page-details.html" class="btn">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="list-item">
									<div class="list-item-image">
										<div class="image-inner">
											<a class="link-image" href="page-details.html">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images//list-items/item3.jpg" alt="" />
												<div class="image-overlay">
													<div class="overlay-content">
														<div class="overlay-icon"><i class="icon_link"></i></div>
													</div><!--/ .extra-content-->	
												</div><!--/ .image-extra-->
											</a>	
										</div>
									</div><!-- end list-item -->
									<div class="list-item-label">
										<div class="left">
											<h4 class="list-item-title"><a href="page-details.html" class="inverse">Conrad Resort & Spa</a></h4>
											<span class="list-item-location">Bali, Indonesia</span>
											<div class="list-item-details">
												<div class="clear mt-10"></div>
												Arrived compass prepare an on as. Reasonable particular on my it in from sympathize. Size now easy eat hand how. Unwilling he departure that to elsewhere.
												<ul class="hotelpreferences">
													<li class="icohp-internet toptip" title="Internet"></li>
													<li class="icohp-air toptip" title="Air"></li>
													<li class="icohp-pool toptip" title="Swimming Pool"></li>
													<li class="icohp-childcare toptip" title="Childcare"></li>
													<li class="icohp-fitness toptip" title="Fitness"></li>
													<li class="icohp-breakfast toptip" title="Breakfast"></li>
													<li class="icohp-parking toptip" title="Parking"></li>
													<li class="icohp-pets toptip" title="Pets"></li>
												</ul>
												<div class="clear mb-10"></div>
											</div>
										</div>
										<div class="right">
											<div class="list-item-meta">
												<span class="rating-static rating-30"></span>
												<span class="list-item-review">272 Reviews</span>
											</div>
											<div class="list-item-price">
												$650 <span>per night</span>
											</div>
											<a href="page-details.html" class="btn">Details</a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="list-item">
									<div class="list-item-image">
										<div class="image-inner">
											<a class="link-image" href="page-details.html">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images//list-items/item4.jpg" alt="" />
												<div class="image-overlay">
													<div class="overlay-content">
														<div class="overlay-icon"><i class="icon_link"></i></div>
													</div><!--/ .extra-content-->	
												</div><!--/ .image-extra-->
											</a>	
										</div>
									</div><!-- end list-item -->
									<div class="list-item-label">
										<div class="left">
											<h4 class="list-item-title"><a href="page-details.html" class="inverse">Banyan Tree</a></h4>
											<span class="list-item-location">Bintan, Indonesia</span>
											<div class="list-item-details">
												<div class="clear mt-10"></div>
												Arrived compass prepare an on as. Reasonable particular on my it in from sympathize. Size now easy eat hand how. Unwilling he departure that to elsewhere.
												<ul class="hotelpreferences">
													<li class="icohp-internet toptip" title="Internet"></li>
													<li class="icohp-air toptip" title="Air"></li>
													<li class="icohp-pool toptip" title="Swimming Pool"></li>
													<li class="icohp-childcare toptip" title="Childcare"></li>
													<li class="icohp-fitness toptip" title="Fitness"></li>
													<li class="icohp-breakfast toptip" title="Breakfast"></li>
													<li class="icohp-parking toptip" title="Parking"></li>
													<li class="icohp-pets toptip" title="Pets"></li>
												</ul>
												<div class="clear mb-10"></div>
											</div>
										</div>
										<div class="right">
											<div class="list-item-meta">
												<span class="rating-static rating-30"></span>
												<span class="list-item-review">1272 Reviews</span>
											</div>
											<div class="list-item-price">
												$250 <span>per night</span>
											</div>
											<a href="page-details.html" class="btn">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="list-item">
									<div class="list-item-image">
										<div class="image-inner">
											<a class="link-image" href="page-details.html">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images//list-items/item5.jpg" alt="" />
												<div class="image-overlay">
													<div class="overlay-content">
														<div class="overlay-icon"><i class="icon_link"></i></div>
													</div><!--/ .extra-content-->	
												</div><!--/ .image-extra-->
											</a>	
										</div>
									</div><!-- end list-item -->
									<div class="list-item-label">
										<div class="left">
											<h4 class="list-item-title"><a href="page-details.html" class="inverse">Luxury Kanuhura Hotel</a></h4>
											<span class="list-item-location">Mali, Maldives</span>
											<div class="list-item-details">
												<div class="clear mt-10"></div>
												Arrived compass prepare an on as. Reasonable particular on my it in from sympathize. Size now easy eat hand how. Unwilling he departure that to elsewhere.
												<ul class="hotelpreferences">
													<li class="icohp-internet toptip" title="Internet"></li>
													<li class="icohp-air toptip" title="Air"></li>
													<li class="icohp-pool toptip" title="Swimming Pool"></li>
													<li class="icohp-childcare toptip" title="Childcare"></li>
													<li class="icohp-fitness toptip" title="Fitness"></li>
													<li class="icohp-breakfast toptip" title="Breakfast"></li>
													<li class="icohp-parking toptip" title="Parking"></li>
													<li class="icohp-pets toptip" title="Pets"></li>
												</ul>
												<div class="clear mb-10"></div>
											</div>
										</div>
										<div class="right">
											<div class="list-item-meta">
												<span class="rating-static rating-30"></span>
												<span class="list-item-review">872 Reviews</span>
											</div>
											<div class="list-item-price">
												$1250 <span>per night</span>
											</div>
											<a href="page-details.html" class="btn">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="list-item">
									<div class="list-item-image">
										<div class="image-inner">
											<a class="link-image" href="page-details.html">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images//list-items/item6.jpg" alt="" />
												<div class="image-overlay">
													<div class="overlay-content">
														<div class="overlay-icon"><i class="icon_link"></i></div>
													</div><!--/ .extra-content-->	
												</div><!--/ .image-extra-->
											</a>	
										</div>
									</div><!-- end list-item -->
									<div class="list-item-label">
										<div class="left">
											<h4 class="list-item-title"><a href="page-details.html" class="inverse">The Shoreham Hotel</a></h4>
											<span class="list-item-location">New York, USA</span>
											<div class="list-item-details">
												<div class="clear mt-10"></div>
												Arrived compass prepare an on as. Reasonable particular on my it in from sympathize. Size now easy eat hand how. Unwilling he departure that to elsewhere.
												<ul class="hotelpreferences">
													<li class="icohp-internet toptip" title="Internet"></li>
													<li class="icohp-air toptip" title="Air"></li>
													<li class="icohp-pool toptip" title="Swimming Pool"></li>
													<li class="icohp-childcare toptip" title="Childcare"></li>
													<li class="icohp-fitness toptip" title="Fitness"></li>
													<li class="icohp-breakfast toptip" title="Breakfast"></li>
													<li class="icohp-parking toptip" title="Parking"></li>
													<li class="icohp-pets toptip" title="Pets"></li>
												</ul>
												<div class="clear mb-10"></div>
											</div>
										</div>
										<div class="right">
											<div class="list-item-meta">
												<span class="rating-static rating-30"></span>
												<span class="list-item-review">548 Reviews</span>
											</div>
											<div class="list-item-price">
												$510 <span>per night</span>
											</div>
											<a href="page-details.html" class="btn">Details</a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="list-item">
									<div class="list-item-image">
										<div class="image-inner">
											<a class="link-image" href="page-details.html">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images//list-items/item7.jpg" alt="" />
												<div class="image-overlay">
													<div class="overlay-content">
														<div class="overlay-icon"><i class="icon_link"></i></div>
													</div><!--/ .extra-content-->	
												</div><!--/ .image-extra-->
											</a>	
										</div>
									</div><!-- end list-item -->
									<div class="list-item-label">
										<div class="left">
											<h4 class="list-item-title"><a href="page-details.html" class="inverse">Emirates Palace</a></h4>
											<span class="list-item-location">Dubai, UAE</span>
											<div class="list-item-details">
												<div class="clear mt-10"></div>
												Arrived compass prepare an on as. Reasonable particular on my it in from sympathize. Size now easy eat hand how. Unwilling he departure that to elsewhere.
												<ul class="hotelpreferences">
													<li class="icohp-internet toptip" title="Internet"></li>
													<li class="icohp-air toptip" title="Air"></li>
													<li class="icohp-pool toptip" title="Swimming Pool"></li>
													<li class="icohp-childcare toptip" title="Childcare"></li>
													<li class="icohp-fitness toptip" title="Fitness"></li>
													<li class="icohp-breakfast toptip" title="Breakfast"></li>
													<li class="icohp-parking toptip" title="Parking"></li>
													<li class="icohp-pets toptip" title="Pets"></li>
												</ul>
												<div class="clear mb-10"></div>
											</div>
										</div>
										<div class="right">
											<div class="list-item-meta">
												<span class="rating-static rating-30"></span>
												<span class="list-item-review">4272 Reviews</span>
											</div>
											<div class="list-item-price">
												$3000 <span>per night</span>
											</div>
											<a href="page-details.html" class="btn">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="list-item">
									<div class="list-item-image">
										<div class="image-inner">
											<a class="link-image" href="page-details.html">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images//list-items/item8.jpg" alt="" />
												<div class="image-overlay">
													<div class="overlay-content">
														<div class="overlay-icon"><i class="icon_link"></i></div>
													</div><!--/ .extra-content-->	
												</div><!--/ .image-extra-->
											</a>	
										</div>
									</div><!-- end list-item -->
									<div class="list-item-label">
										<div class="left">
											<h4 class="list-item-title"><a href="page-details.html" class="inverse">Undersea Hotel Hilton</a></h4>
											<span class="list-item-location">The Island, Maldives</span>
											<div class="list-item-details">
												<div class="clear mt-10"></div>
												Arrived compass prepare an on as. Reasonable particular on my it in from sympathize. Size now easy eat hand how. Unwilling he departure that to elsewhere.
												<ul class="hotelpreferences">
													<li class="icohp-internet toptip" title="Internet"></li>
													<li class="icohp-air toptip" title="Air"></li>
													<li class="icohp-pool toptip" title="Swimming Pool"></li>
													<li class="icohp-childcare toptip" title="Childcare"></li>
													<li class="icohp-fitness toptip" title="Fitness"></li>
													<li class="icohp-breakfast toptip" title="Breakfast"></li>
													<li class="icohp-parking toptip" title="Parking"></li>
													<li class="icohp-pets toptip" title="Pets"></li>
												</ul>
												<div class="clear mb-10"></div>
											</div>
										</div>
										<div class="right">
											<div class="list-item-meta">
												<span class="rating-static rating-30"></span>
												<span class="list-item-review">3266 Reviews</span>
											</div>
											<div class="list-item-price">
												$4050 <span>per night</span>
											</div>
											<a href="page-details.html" class="btn">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="list-item">
									<div class="list-item-image">
										<div class="image-inner">
											<a class="link-image" href="page-details.html">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images//list-items/item9.jpg" alt="" />
												<div class="image-overlay">
													<div class="overlay-content">
														<div class="overlay-icon"><i class="icon_link"></i></div>
													</div><!--/ .extra-content-->	
												</div><!--/ .image-extra-->
											</a>	
										</div>
									</div><!-- end list-item -->
									<div class="list-item-label">
										<div class="left">
											<h4 class="list-item-title"><a href="page-details.html" class="inverse">Hotel Muse</a></h4>
											<span class="list-item-location">Bangkok, Thailand</span>
											<div class="list-item-details">
												<div class="clear mt-10"></div>
												Arrived compass prepare an on as. Reasonable particular on my it in from sympathize. Size now easy eat hand how. Unwilling he departure that to elsewhere.
												<ul class="hotelpreferences">
													<li class="icohp-internet toptip" title="Internet"></li>
													<li class="icohp-air toptip" title="Air"></li>
													<li class="icohp-pool toptip" title="Swimming Pool"></li>
													<li class="icohp-childcare toptip" title="Childcare"></li>
													<li class="icohp-fitness toptip" title="Fitness"></li>
													<li class="icohp-breakfast toptip" title="Breakfast"></li>
													<li class="icohp-parking toptip" title="Parking"></li>
													<li class="icohp-pets toptip" title="Pets"></li>
												</ul>
												<div class="clear mb-10"></div>
											</div>
										</div>
										<div class="right">
											<div class="list-item-meta">
												<span class="rating-static rating-30"></span>
												<span class="list-item-review">272 Reviews</span>
											</div>
											<div class="list-item-price">
												$150 <span>per night</span>
											</div>
											<a href="page-details.html" class="btn">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="list-item">
									<div class="list-item-image">
										<div class="image-inner">
											<a class="link-image" href="page-details.html">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images//list-items/item10.jpg" alt="" />
												<div class="image-overlay">
													<div class="overlay-content">
														<div class="overlay-icon"><i class="icon_link"></i></div>
													</div><!--/ .extra-content-->	
												</div><!--/ .image-extra-->
											</a>	
										</div>
									</div><!-- end list-item -->
									<div class="list-item-label">
										<div class="left">
											<h4 class="list-item-title"><a href="page-details.html" class="inverse">Taj Exotica Resort</a></h4>
											<span class="list-item-location">Mali, Maldives</span>
											<div class="list-item-details">
												<div class="clear mt-10"></div>
												Arrived compass prepare an on as. Reasonable particular on my it in from sympathize. Size now easy eat hand how. Unwilling he departure that to elsewhere.
												<ul class="hotelpreferences">
													<li class="icohp-internet toptip" title="Internet"></li>
													<li class="icohp-air toptip" title="Air"></li>
													<li class="icohp-pool toptip" title="Swimming Pool"></li>
													<li class="icohp-childcare toptip" title="Childcare"></li>
													<li class="icohp-fitness toptip" title="Fitness"></li>
													<li class="icohp-breakfast toptip" title="Breakfast"></li>
													<li class="icohp-parking toptip" title="Parking"></li>
													<li class="icohp-pets toptip" title="Pets"></li>
												</ul>
												<div class="clear mb-10"></div>
											</div>
										</div>
										<div class="right">
											<div class="list-item-meta">
												<span class="rating-static rating-30"></span>
												<span class="list-item-review">43 Reviews</span>
											</div>
											<div class="list-item-price">
												$750 <span>per night</span>
											</div>
											<a href="page-details.html" class="btn">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="list-item">
									<div class="list-item-image">
										<div class="image-inner">
											<a class="link-image" href="page-details.html">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images//list-items/item11.jpg" alt="" />
												<div class="image-overlay">
													<div class="overlay-content">
														<div class="overlay-icon"><i class="icon_link"></i></div>
													</div><!--/ .extra-content-->	
												</div><!--/ .image-extra-->
											</a>	
										</div>
									</div><!-- end list-item -->
									<div class="list-item-label">
										<div class="left">
											<h4 class="list-item-title"><a href="page-details.html" class="inverse">East Hotel</a></h4>
											<span class="list-item-location">Hong Kong, China</span>
											<div class="list-item-details">
												<div class="clear mt-10"></div>
												Arrived compass prepare an on as. Reasonable particular on my it in from sympathize. Size now easy eat hand how. Unwilling he departure that to elsewhere.
												<ul class="hotelpreferences">
													<li class="icohp-internet toptip" title="Internet"></li>
													<li class="icohp-air toptip" title="Air"></li>
													<li class="icohp-pool toptip" title="Swimming Pool"></li>
													<li class="icohp-childcare toptip" title="Childcare"></li>
													<li class="icohp-fitness toptip" title="Fitness"></li>
													<li class="icohp-breakfast toptip" title="Breakfast"></li>
													<li class="icohp-parking toptip" title="Parking"></li>
													<li class="icohp-pets toptip" title="Pets"></li>
												</ul>
												<div class="clear mb-10"></div>
											</div>
										</div>
										<div class="right">
											<div class="list-item-meta">
												<span class="rating-static rating-30"></span>
												<span class="list-item-review">5438 Reviews</span>
											</div>
											<div class="list-item-price">
												$300 <span>per night</span>
											</div>
											<a href="page-details.html" class="btn">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="list-item">
									<div class="list-item-image">
										<div class="image-inner">
											<a class="link-image" href="page-details.html">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images//list-items/item12.jpg" alt="" />
												<div class="image-overlay">
													<div class="overlay-content">
														<div class="overlay-icon"><i class="icon_link"></i></div>
													</div><!--/ .extra-content-->	
												</div><!--/ .image-extra-->
											</a>	
										</div>
									</div><!-- end list-item -->
									<div class="list-item-label">
										<div class="left">
											<h4 class="list-item-title"><a href="page-details.html" class="inverse">Kyoto Kokusai Hotel</a></h4>
											<span class="list-item-location">Tokyo, Japan</span>
											<div class="list-item-details">
												<div class="clear mt-10"></div>
												Arrived compass prepare an on as. Reasonable particular on my it in from sympathize. Size now easy eat hand how. Unwilling he departure that to elsewhere.
												<ul class="hotelpreferences">
													<li class="icohp-internet toptip" title="Internet"></li>
													<li class="icohp-air toptip" title="Air"></li>
													<li class="icohp-pool toptip" title="Swimming Pool"></li>
													<li class="icohp-childcare toptip" title="Childcare"></li>
													<li class="icohp-fitness toptip" title="Fitness"></li>
													<li class="icohp-breakfast toptip" title="Breakfast"></li>
													<li class="icohp-parking toptip" title="Parking"></li>
													<li class="icohp-pets toptip" title="Pets"></li>
												</ul>
												<div class="clear mb-10"></div>
											</div>
										</div>
										<div class="right">
											<div class="list-item-meta">
												<span class="rating-static rating-30"></span>
												<span class="list-item-review">754 Reviews</span>
											</div>
											<div class="list-item-price">
												$400 <span>per night</span>
											</div>
											<a href="page-details.html" class="btn">Details</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="clear"></div>
						
						<?php wp_pagenavi(); ?>
						
					</div>

					<div class="clear"></div>
					
				</div>
			</div>
		</div><!-- end content_wrapper -->

<?php get_footer(); ?>