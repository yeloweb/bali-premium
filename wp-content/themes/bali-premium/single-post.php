<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post();?>
<?php $categories = get_the_category();
$recupere_nom_categorie = $categories[0]->slug; 
?>

		<div id="page_title" class='post-<?php $recupere_nom_categorie; ?>'>
		
			<div class="container clearfix">
				<div class="page-name">Blog</div>
				<div class="breadcrumb clearfix">
					<?php if ( function_exists('yoast_breadcrumb') ) 
				{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
				</div>
				
				
			</div>
		</div><!-- end slider_wrapper -->
		
		<div id="content_wrapper">
			<div class="container">
				<div class="row clearfix pv-50">
					
					<!-- Begin Blog Content -->
					
					<div class="col-xs-12 col-sm-8 col-md-9 xs-mb">
						
						<div class="blog-item mb-30">
							<div class="blog-media">
								<div class="list-item-image">
									<div class="image-inner">
										<a class="blog-image" href="<?php the_permalink();?>">
											<?php the_post_thumbnail();?>
										</a>	
									</div>
								</div><!-- end list-item -->
							</div><!-- end blog-media -->
							<div class="blog-details">
								<h3><a href="<?php the_permalink();?>" class="inverse"><?php the_title();?></a></h3>
								<ul class="blog-meta">
									<li>by <a href="<?php the_author_link(); ?> "> <?php the_author(); ?> </a></li>									
									<li>in <?php the_category(", "); ?></li>
									<li><?php comments_popup_link('0 comment', '1 comment', '% comments');?></li>
									<li><a href="#">leave comment</a></li>
								</ul>
								<div class="blog-posted">
								<?php
								$jour = get_the_date('d');
								$mois = get_the_date('F');
								$annee = get_the_date('Y');
								?>
									<span class="date"><?php echo $jour; ?></span>
									<span class="month"><?php echo $mois; ?></span>
									<span class="year"><?php echo $annee; ?></span>
								</div>
								<div class="blog-type"><i class="fa-camera"></i></div>
								<div class="blog-content">  
									<?php the_content();?>
								</div>
								
							</div>
							
							<div class="blog-additional">
								<div class="tag-cloud sm-mb">
									<span><i class="icon-tags"></i>Tags: </span><?php the_category(", "); ?>                                                            
								</div>
								
								<div class="share-it">
									<span>Share This on: </span>
									<div class="social with_color">
										<a href="#" class="bottomtip" title="Twitter"><i class="fa-twitter"></i></a>
										<a href="#" class="bottomtip" title="Facebook"><i class="fa-facebook"></i></a>
										<a href="#" class="bottomtip" title="Dribbble"><i class="fa-dribbble"></i></a>
										<a href="#" class="bottomtip" title="Youtube"><i class="fa-youtube"></i></a>
										<a href="#" class="bottomtip" title="RSS"><i class="fa-rss"></i></a>
									</div><!-- end social -->
								</div>
								<div class="clear"></div>
							</div>
							
							<div class="clear"></div>
							
						</div>

						<h3>About The Author</h3>
						<div class="blog-author mb-30">
							<div class="author-label">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial/testimonial-03.jpg" alt="author image" />
							</div>
							<div class="author-details">
								<div class="social with_color">
									<a href="#" class="bottomtip" title="Twitter"><i class="fa-twitter"></i></a>
									<a href="#" class="bottomtip" title="Facebook"><i class="fa-facebook"></i></a>
									<a href="#" class="bottomtip" title="Dribbble"><i class="fa-dribbble"></i></a>
									<a href="#" class="bottomtip" title="Youtube"><i class="fa-youtube"></i></a>
									<a href="#" class="bottomtip" title="RSS"><i class="fa-rss"></i></a>
								</div><!-- end social -->
								<h4><a href="#" class="inverse"><?php the_author(); ?> </a>
								<p class='author-description'><?php the_author_description(); ?> </p>
							</h4></div>
						</div>
						
						<h3 id="comments"><?php comments_number( '0 comment', '1 comment', '% comments' ); ?></h3>
						<?php comments_template( '/blog-comments.php' ); ?> 

						
						
						
						<div class="clear"></div>
						
					</div><!-- End Blog Content -->
					
					<!-- Begin sidebar -->
					<?php get_sidebar('right-blog'); ?>
					<!-- end sidebar outer  -->
					
					<div class="clear"></div>
					
				</div>
			</div>
		</div><!-- end content_wrapper -->
		
<?php endwhile; endif; ?>

<?php get_footer(); ?>
