<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post();?>
<?php $categories = get_the_category();
$recupere_nom_categorie = $categories[0]->slug; 
?>

		<div id="page_title" class='post-<?php $recupere_nom_categorie; ?>'>
			<div class="container clearfix">
				<div class="page-name">Detail Page</div>
				<div class="breadcrumb clearfix">
					<?php if ( function_exists('yoast_breadcrumb') ) 
				{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
				</div>
			</div>
		</div><!-- end slider_wrapper -->
		
		<div id="content_wrapper">
			<div class="container">
				<div class="row clearfix pv-50">
					
					<div class="col-xs-12 col-sm-8 col-md-9">
					
						<div class="detail-header clearfix">
							<div class="detail-header-name">
								<h3 class="hotel-name no-mb"><?php the_title();?></h3>
								<span class="hotel-location">
								<i class="fa-map-marker mi text-warning">
								<?php
								$terms = get_field('type-region', $post->ID);
								if( $terms ): ?>
									<?php foreach( $terms as $term ): ?>
									<a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name.". "; ?></a>
									<?php endforeach; ?>
								<?php endif; ?>
								</i></span>
							</div>
							<div class="detail-header-review">
								<span class="rating-static rating-45"></span>
								<span>436 reviews</span>
							</div>
						</div>
						
						<div class='title_prestataire'>
							<div class='image_prestataire'>
							<?php the_post_thumbnail();?>
							</div>
							<div class='desc_prestataire'>
							<?php include(TEMPLATEPATH . "/woocommerce/single-product/tabs/coordonnees.php"); ?>
							</div>
							
						</div>
							

						
						<div class="clear"></div>
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
						 
						 echo GeoMashup::map('height=300&width=100%&zoom=10&add_overview_control=false&add_map_type_control=false&object_id='.$id_post.'&radius=20&units=mi&map_content=global&marker_select_center=true&exclude_object_ids='.$exclu.'&map_cat=villa' ); 
 
	?>					
						
						
						
						<ul class="tabs mt-20">
							<li><a href="#details-tab1">Description</a></li>
							<li><a href="#details-tab2" >Galerie</a></li>
							<li><a href="#details-tab3" class="active">Villas autour</a></li>
							<li><a href="#details-tab4">Avis</a></li>
							<li><a href="#details-tab6">A découvrir</a></li>
						</ul> <!-- tabs-->
						
						<ul id="detail-tab" class="tabs-content xss-mb">
							
							
							<!-- **************** DESCRIPTION ******************************************* -->
							<li id="details-tab1">
								<?php the_content();?>    

								<div class="clear mb-20"></div>
							</li><!-- tab content -->
							
							
							
							
							<!-- **************** GALLERY ************************************************ -->
							<li id="details-tab2" class="gallery">
								<div class="thumbnails columns-4">
								
									<a href="http://localhost/bali-premium/wp-content/uploads/2015/09/villa_bali_kar01d.jpg" class="zoom first" title="" data-rel="prettyPhoto[product-gallery]">
										<img width="180" height="120" src="http://localhost/bali-premium/wp-content/uploads/2015/09/villa_bali_kar01d.jpg" class="attachment-shop_thumbnail" alt="villa_bali_kar01d" title="villa_bali_kar01d" />
									</a>
									
									<a href="http://localhost/bali-premium/wp-content/uploads/2015/09/Villa_Vajra_-_Pool_Above_Dusk_1.jpg" class="zoom" title="" data-rel="prettyPhoto[product-gallery]">
										<img width="180" height="124" src="http://localhost/bali-premium/wp-content/uploads/2015/09/Villa_Vajra_-_Pool_Above_Dusk_1.jpg" class="attachment-shop_thumbnail" alt="Villa_Vajra_-_Pool_Above_Dusk_1" title="Villa_Vajra_-_Pool_Above_Dusk_1" />
									</a>
									
									<a href="http://localhost/bali-premium/wp-content/uploads/2015/09/villa_bali_thelay0401a.jpg" class="zoom" title="" data-rel="prettyPhoto[product-gallery]">
										<img width="180" height="120" src="http://localhost/bali-premium/wp-content/uploads/2015/09/villa_bali_thelay0401a.jpg" class="attachment-shop_thumbnail" alt="villa_bali_thelay0401a" title="villa_bali_thelay0401a" />
									</a>
									
									<a href="http://localhost/bali-premium/wp-content/uploads/2015/09/restaurant_bridges_multi_level.jpg" class="zoom last" title="" data-rel="prettyPhoto[product-gallery]">
										<img width="180" height="120" src="http://localhost/bali-premium/wp-content/uploads/2015/09/restaurant_bridges_multi_level.jpg" class="attachment-shop_thumbnail" alt="restaurant_bridges_multi_level" title="restaurant_bridges_multi_level" />
									</a>
									
									<a href="http://localhost/bali-premium/wp-content/uploads/2015/09/bali_villa_beng0j.jpg" class="zoom first" title="" data-rel="prettyPhoto[product-gallery]">
										<img width="180" height="120" src="http://localhost/bali-premium/wp-content/uploads/2015/09/bali_villa_beng0j.jpg" class="attachment-shop_thumbnail" alt="bali_villa_beng0j" title="bali_villa_beng0j" />
									</a>
									
								</div>
							</li>	
							
							
							<!-- **************** VILLAS AUTOUR ******************************************************************** -->
							<li id="details-tab3" class="active villas">
								<h4>Découvrez les villas autour</h4>
							
							
							<!---------------->
							<div class="row items-container">
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="list-item">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="page-details.html">
													<img src="<?php bloginfo('template_directory'); ?>/images/list-items/item1.jpg" alt="" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div><!--/ .extra-content-->	
													</div><!--/ .image-extra-->
												</a>	
											</div>
										</div><!-- end list-item -->
										<div class="list-item-label">
											<h4 class="list-item-title"><a href="page-details.html" class="inverse">Phulay Bay Resort</a></h4>
											<span class="list-item-location">Phuket, Thailand</span>
											<div class="list-item-price">
												$150 <span>per night</span>
											</div>
											<div class="list-item-meta">
												<span class="rating-static rating-30"></span>
												<span class="list-item-review">272 Reviews</span>
											</div>
											<div class="list-item-details">
												In on announcing if of comparison pianoforte projection. Maids hoped gay yet bed.
											</div>
											<div class="clear"></div>
											<a href="page-details.html" class="btn btn-block">More Details</a>
										</div>
									</div>
								</div>
							
														<!---------------->
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="list-item">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="page-details.html">
													<img src="<?php bloginfo('template_directory'); ?>/images/list-items/item1.jpg" alt="" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div><!--/ .extra-content-->	
													</div><!--/ .image-extra-->
												</a>	
											</div>
										</div><!-- end list-item -->
										<div class="list-item-label">
											<h4 class="list-item-title"><a href="page-details.html" class="inverse">Phulay Bay Resort</a></h4>
											<span class="list-item-location">Phuket, Thailand</span>
											<div class="list-item-price">
												$150 <span>per night</span>
											</div>
											<div class="list-item-meta">
												<span class="rating-static rating-30"></span>
												<span class="list-item-review">272 Reviews</span>
											</div>
											<div class="list-item-details">
												In on announcing if of comparison pianoforte projection. Maids hoped gay yet bed.
											</div>
											<div class="clear"></div>
											<a href="page-details.html" class="btn btn-block">More Details</a>
										</div>
									</div>
								</div>
							
							
														<!---------------->

								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="list-item">
										<div class="list-item-image">
											<div class="image-inner">
												<a class="link-image" href="page-details.html">
													<img src="<?php bloginfo('template_directory'); ?>/images/list-items/item1.jpg" alt="" />
													<div class="image-overlay">
														<div class="overlay-content">
															<div class="overlay-icon"><i class="icon_link"></i></div>
														</div><!--/ .extra-content-->	
													</div><!--/ .image-extra-->
												</a>	
											</div>
										</div><!-- end list-item -->
										<div class="list-item-label">
											<h4 class="list-item-title"><a href="page-details.html" class="inverse">Phulay Bay Resort</a></h4>
											<span class="list-item-location">Phuket, Thailand</span>
											<div class="list-item-price">
												$150 <span>per night</span>
											</div>
											<div class="list-item-meta">
												<span class="rating-static rating-30"></span>
												<span class="list-item-review">272 Reviews</span>
											</div>
											<div class="list-item-details">
												In on announcing if of comparison pianoforte projection. Maids hoped gay yet bed.
											</div>
											<div class="clear"></div>
											<a href="page-details.html" class="btn btn-block">More Details</a>
										</div>
									</div>
								</div>
							</div>
							
						</li>
							
							
							<!-- **************** AVIS ********************************************************************************* -->
							<li id="details-tab4">
								<div class="availability">
									<div class="availability-inner">
										<div class="row mb-20">
											<div class="col-md-6">
												<p class="ave-rate clearfix mt-10"><span>4.5/5</span> Lorem ipsum dolor sit amet, conse ctetur adipiscing elit Aliquam.</p>
												<span class="rating-static rating-40"></span>
											</div>
											<div class="col-md-6">
												<div class="progress-bar stripes">
													<span rel="85" style="background-color: #F07F7F"></span>
													<div class="progress-bar-text">Overall <span>4.5 out of 5</span></div>
												</div>
												<div class="progress-bar stripes mb-10">
													<span rel="90" style="background-color: #69D869"></span>
													<div class="progress-bar-text">Guests recommend <span>90%</span></div>
												</div>
												<div class="clear"></div>
												Ratings based on 5 Verified Reviews
											</div>	
										</div>
									</div>
								</div>
								<div class="clear mb-30"></div>								
								<h4 class="mb-20">Average ratings</h4>
								<div class="row">
									<div class="col-xs-6 col-sm-4 col-md-2">
										Cleanliness <br />
										<span class="rating-static rating-40 no-margin"></span>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-2">
										Room Comfort <br />
										<span class="rating-static rating-40 no-margin"></span>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-2">
										Location <br />
										<span class="rating-static rating-40 no-margin"></span>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-2">
										Serivce & Staff <br />
										<span class="rating-static rating-40 no-margin"></span>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-2">
										Sleep Quality <br />
										<span class="rating-static rating-40 no-margin"></span>
									</div>
									<div class="col-xs-6 col-sm-4 col-md-2">
										Value for Price <br />
										<span class="rating-static rating-40 no-margin"></span>
									</div>
								</div>
								<div class="clear mb-30"></div>	

								<?php comments_template(); ?>

						</li><!-- tab content -->
								
								
								
								
						<!-- **************** A DECOUVRIR **************** -->
							<li id="details-tab5">
								<div id="map-canvas"></div>  
							</li><!-- tab content -->

							<li id="details-tab6">
								<h4>Attracting Places to Visit</h4>
								<p>To shewing another demands to. Marianne property cheerful informed at striking at. Clothes parlors however by cottage on. In views it or meant drift to. Be concern parlors settled or do shyness address. Remainder northward performed out for moonlight. </p>
								<ul class="detail-item">
									<li class="clearfix">
										<img src="images/attracting-places/attracting-places-01.jpg" alt="Attracting Places" />
										<div class="br2 pr-10">
											<h3>Yoyogi Park on a Sunday</h3>
											<span class="text-info text-bold">“Just Great!!!"</span>
											<span class="date">Posted Jun 02, 2013</span>
											<p class="mt-10">Ought these are balls place mrs their times add she. Taken no great widow spoke of it small. Genius use except son esteem merely her limits. Sons park by do make on. It do oh cottage offered cottage in written.</p>
										</div>
										<div class="detail-meta">
											<span class="rating-static user rating-35"></span>
											<span class="detail-review">31 Reviews</span>
											<a class="btn">More</a>
										</div>
									</li>
									<li class="clearfix">
										<img src="images/attracting-places/attracting-places-02.jpg" alt="Attracting Places" />
										<div class="br2 pr-10">
											<h3>Tokyo Tower & Tokyo Skytree</h3>
											<span class="text-info text-bold">“Just Great!!!"</span>
											<span class="date">Posted Jun 02, 2013</span>
											<p class="mt-10">Ought these are balls place mrs their times add she. Taken no great widow spoke of it small. Genius use except son esteem merely her limits. Sons park by do make on. It do oh cottage offered cottage in written.</p>
										</div>
										<div class="detail-meta">
											<span class="rating-static user rating-35"></span>
											<span class="detail-review">31 Reviews</span>
											<a class="btn">More</a>
										</div>
									</li>
									<li class="clearfix">
										<img src="images/attracting-places/attracting-places-03.jpg" alt="Attracting Places" />
										<div class="br2 pr-10">
											<h3>Imperial Palace</h3>
											<span class="text-info text-bold">“Just Great!!!"</span>
											<span class="date">Posted Jun 02, 2013</span>
											<p class="mt-10">Ought these are balls place mrs their times add she. Taken no great widow spoke of it small. Genius use except son esteem merely her limits. Sons park by do make on. It do oh cottage offered cottage in written.</p>
										</div>
										<div class="detail-meta">
											<span class="rating-static user rating-35"></span>
											<span class="detail-review">31 Reviews</span>
											<a class="btn">More</a>
										</div>
									</li>
									<li class="clearfix">
										<img src="images/attracting-places/attracting-places-04.jpg" alt="Attracting Places" />
										<div class="br2 pr-10">
											<h3>Tsukiji Fish Market</h3>
											<span class="text-info text-bold">“Just Great!!!"</span>
											<span class="date">Posted Jun 02, 2013</span>
											<p class="mt-10">Ought these are balls place mrs their times add she. Taken no great widow spoke of it small. Genius use except son esteem merely her limits. Sons park by do make on. It do oh cottage offered cottage in written.</p>
										</div>
										<div class="detail-meta">
											<span class="rating-static user rating-35"></span>
											<span class="detail-review">31 Reviews</span>
											<a class="btn">More</a>
										</div>
									</li>
								</ul>
							</li><!-- tab content -->
						</ul><!-- end tabs -->
						<div class="clear xss-mb"></div>
					</div>
					

							
						<?php get_sidebar('right'); ?>
							

					
				</div>
			</div>
		</div><!-- end content_wrapper -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>