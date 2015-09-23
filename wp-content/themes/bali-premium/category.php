
<?php get_header(); ?>


		<div id="page_title">
			<div class="container clearfix">
				<div class="page-name">List Page - Catégory Meubles et Déco</div>
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
							<?php
	
							query_posts('post_type=prestataire&category_name=deco');
							?>
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
											<h4 class="list-item-title"><a href="page-details.html" class="inverse"><?php the_title();?></a></h4>
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
											<a href="<?php the_permalink();?>" class="btn">Details</a>
										</div>
									</div>
								</div>
							</div>
								<?php endwhile;  ?>
								<?php wp_reset_postdata(); ?>
								<?php endif;  ?>
								<?php wp_reset_query();?>
								
							
							<!---------------->

						</div>
							
						<div class="clear"></div>
						<?php wp_pagenavi(); ?>
						<!--<nav class="paging pull-right">
							<p>Page 01 of 06</p>
							<ul class="pagination">
								<li class="disabled"><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">6</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
						</nav>-->
						
					</div>

					<div class="clear"></div>
					
				</div>
			</div>
		</div><!-- end content_wrapper -->


<?php get_footer(); ?>