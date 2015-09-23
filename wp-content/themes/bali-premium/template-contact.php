<?php
/*
Template Name: Template contact
*/
?>

<?php get_header(); ?>
		<?php if(have_posts()): while(have_posts()): the_post();?>
		<div id="map-wrapper">
			<div id="map"> </div>
		</div><!-- end slider_wrapper -->
		
		<div id="content_wrapper" class="contact-wrapper">
			<div class="container">
				<div class="row clearfix mv-30">
					<div class="clear mb-20"></div>

					<div class="col-xs-12 col-sm-8 col-md-8 xs-mb">
						<h3 class="col-title mb-20"><?php the_title();?></h3>

						<form method="post" id="contactForm" action="contact.php" />
							<div class="row">
								<div class="col-md-6 mb-20">
									<input type="text" name="senderName" id="senderName" placeholder="Name *" class="requiredField form-control" />
								</div>
								<div class="col-md-6 mb-20">
									<input type="text" name="senderEmail" id="senderEmail" placeholder="Email Address *" class="requiredField email form-control" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 mb-20">
									<input type="text" name="senderWeb" id="senderWeb" placeholder="Website" class="form-control" />
								</div>
								<div class="col-md-6 mb-20">
									<input type="text" name="senderPhone" id="senderPhone" placeholder="Phone Number" class="email form-control" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 mb-20">
									<textarea name="message" id="message" placeholder="Message *" class="requiredField form-control" rows="8"></textarea>
								</div>
								<div class="col-md-12">
									<input type="submit" name="sendMessage" value="Send Email" class="btn btn-primary" />
								</div>
							</div>
							<span></span>
						</form>
						
					</div>
					
					<div class="col-xs-12 col-sm-4 col-md-4">
						<h3 class="col-title mb-20">Contact Details</h3>
						<div class="white-bg padding-20">
							<p>Neglected principle ask rapturous consulted. Object remark lively all did feebly excuse our wooded.</p>
							
							<ul class="contact-details">
								<li><i class="fa-home"></i> <span class="text-bold">Address</span><br /> 795 Ramkhamheng 24 Rd, Huamark, Bangkapi, Bangkok 10250, Thailand</li>
								<li><i class="fa-envelope"></i> <span class="text-bold">Phone Number</span><br /> +66 2 335 3367-8</li>
								<li><i class="fa-file-text"></i> <span class="text-bold">Fax Number</span><br />  +66 2 335 3369</li>
								<li><i class="fa-phone"></i> <span class="text-bold">Email Address</span><br /><a href="mailto:dowebstation@gamil.com"> dowebstation@gamil.com</a></li>
							</ul>
							
						</div>
					</div>
					
					<div class="clear"></div>
							
				</div>
				
				<div class="row clearfix"></div><!-- row -->
			</div>
		</div><!-- end content_wrapper -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>