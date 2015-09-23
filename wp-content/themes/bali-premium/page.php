<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post();?>
<div id="page_title">
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
								<span class="hotel-location"><i class="fa-map-marker mi text-warning"></i>Gotland, Sweden</span>
							</div>
							<div class="detail-header-price">
								$121<span>avg/night</span>
							</div>
							<div class="detail-header-review">
								<span class="rating-static rating-45"></span>
								<span>436 reviews</span>
							</div>
						</div>
						
						
						<div class="clear"></div>
						
						<ul class="tabs mt-20">
							<li><a href="#details-tab1">Overview</a></li>
							<li><a href="#details-tab2" class="active">Room Rates</a></li>
							<li><a href="#details-tab3">Facilities</a></li>
							<li><a href="#details-tab4">Reviews</a></li>
							<li onclick="loadScript()"><a href="#details-tab5">Map</a></li>
							<li><a href="#details-tab6">Things to do</a></li>
						</ul><!-- tabs -->
						
						<ul id="detail-tab" class="tabs-content xss-mb">
							<li id="details-tab1">
								<?php the_content();?>    

								<ul class="check-in-out">
									<li><i class="fa-clock-o"></i> Check-In Time<span>12 : 00 pm </span></li>
									<li><i class="fa-clock-o"></i> Check-Out Time<span>12 : 00 pm</span></li>
								</ul>

								<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								
								<ul class="address">
									<li><i class="fa-map-marker"></i> No.342 - Ramakul Road, T. Pattaya-Nue, A.Pattaya, Ch. Chonburi, 54421</li>
									<li><i class="fa-phone"></i> (+66) 54 554 3321</li>
									<li><i class="fa-globe"></i> <a href="#">www.website.com</a></li>
								</ul>    
								<div class="clear mb-20"></div>
							</li><!-- tab content -->
							
							<li id="details-tab2" class="active">
								<div class="availability">
									<div class="availability-inner">
										<div class="form-group datepicker-wrapper  mr-10">
											<label for="availability1-check-in">Check-in</label>
											<input type="text" class="form-control date" id="availability1-check-in" placeholder="dd/dm/yy" />
											<i class="fa fa-calendar"></i>
										</div>						
										<div class="form-group datepicker-wrapper mr-20">
											<label for="availability1-check-out">Check-out</label>
											<input type="text" class="form-control date" id="availability1-check-out" placeholder="dd/dm/yy" />
											<i class="fa fa-calendar"></i>
										</div>							
										<div class="add-room-wrapper clearfix mr-20 xss-mb">
											<div class="room1">
												<div class="add-room">
													<div class="two-fourth">
														<span>Room 1</span><br />
														<div class="addroom1 block">
															<a onclick="addroom2()">+ Add room</a>
														</div>							
													</div>
													<div class="one-fourth mr">
														<span>Room Type</span>
														<select class="form-control mySelectBoxClass">
															<option />01
															<option selected="" />02
															<option />03
															<option />04
															<option />05
														</select>
													</div>	
													<div class="one-fourth mr">
														<span>Adult</span>
														<select class="form-control mySelectBoxClass">
															<option />1
															<option selected="" />2
															<option />3
															<option />4
															<option />5
														</select>
													</div>							
													<div class="one-fourth">
														<span>Child</span>
														<select class="form-control mySelectBoxClass">
															<option />0
															<option selected="" />1
															<option />2
															<option />3
															<option />4
															<option />5
														</select>
													</div>
												</div><!-- add-room -->
											</div><!-- end room1 -->	
											<div class="room2 none">
												<div class="clearfix"></div>
												<div class="line1"></div>
												<div class="add-room">
													<div class="two-fourth">
														<span>Room 2</span><br />
														<div class="addroom2 block"><a onclick="addroom3()" class="inline">+ Add room</a> | 
														<a onclick="removeroom2()" class="add-room-close"></a></div>
													</div>
													<div class="one-fourth mr">
														<span>Room Type</span>
														<select class="form-control mySelectBoxClass">
															<option />01
															<option selected="" />02
															<option />03
															<option />04
															<option />05
														</select>
													</div>	
													<div class="one-fourth mr">
														<span>Adult</span>
														<select class="form-control mySelectBoxClass">
															<option />1
															<option selected="" />2
															<option />3
															<option />4
															<option />5
														</select>
													</div>							
													<div class="one-fourth">
														<span>Child</span>
														<select class="form-control mySelectBoxClass">
															<option />0
															<option selected="" />1
															<option />2
															<option />3
															<option />4
															<option />5
														</select>
													</div>
												</div><!-- add-room -->
											</div><!-- end room2 -->		
											<div class="room3 none">
												<div class="clearfix"></div>
												<div class="line1"></div>
												<div class="add-room">
													<div class="two-fourth">
														<span>Room 3</span><br />
														<div class="addroom3 block"><a onclick="addroom3()">+ Add room</a> | 
														<a onclick="removeroom3()" class="add-room-close"></a></div>
													</div>
													<div class="one-fourth mr">
														<span>Room Type</span>
														<select class="form-control mySelectBoxClass">
															<option />01
															<option selected="" />02
															<option />03
															<option />04
															<option />05
														</select>
													</div>	
													<div class="one-fourth mr">
														<span>Adult</span>
														<select class="form-control mySelectBoxClass">
															<option />1
															<option selected="" />2
															<option />3
															<option />4
															<option />5
														</select>
													</div>							
													<div class="one-fourth">
														<span>Child</span>
														<select class="form-control mySelectBoxClass">
															<option />0
															<option selected="" />1
															<option />2
															<option />3
															<option />4
															<option />5
														</select>
													</div>
												</div><!-- add-room -->
											</div><!-- end room3 -->
										</div><!-- end add-room wrapper -->
										<div class="update">
											<button type="button" class="btn btn-info">Update <i class="fa-check"></i></button>
										</div>
										<div class="clear"></div>
									</div>
								</div>
								<div class="clear mb-30"></div>
								<h4>Room Type</h4>
								<ul class="detail-item">
									<li class="clearfix">
										<img src="images/room-types/room-type-01.jpg" alt="room type" />
										<div class="br2">
											<h3>Standard Double room</h3>
											<span>Max Occupancy: 2 adults</span>
											<ul class="hotelpreferences mt-10 mb-20">
												<li class="icohp-internet"></li>
												<li class="icohp-air"></li>
												<li class="icohp-pool"></li>
												<li class="icohp-childcare"></li>
												<li class="icohp-fitness"></li>
												<li class="icohp-breakfast"></li>
												<li class="icohp-parking"></li>
											</ul>
											<div class="clearfix"></div>
											<ul class="checklist2 text-info mt-20">
												<li>FREE Cancellation</li>
												<li>Pay at hotel or pay today </li>
											</ul>
										</div>
										<div class="detail-meta">
											<div class="detail-price">
												$150 <span>avg/night</span>
											</div>
											<span class="text-warning text-bold ">5 left</span>
											<a href="page-details.html" class="btn">Book Now!</a>
										</div>
									</li>
									<li class="clearfix">
										<img src="images/room-types/room-type-02.jpg" alt="room type" />
										<div class="br2">
											<h3>Standard Double room</h3>
											<span>Max Occupancy: 3 adults</span>
											<ul class="hotelpreferences mt-10 mb-20">
												<li class="icohp-internet"></li>
												<li class="icohp-air"></li>
												<li class="icohp-pool"></li>
												<li class="icohp-childcare"></li>
												<li class="icohp-fitness"></li>
												<li class="icohp-breakfast"></li>
												<li class="icohp-parking"></li>
											</ul>
											<div class="clearfix"></div>
											<ul class="checklist2 text-info mt-20">
												<li>FREE Cancellation</li>
												<li>Pay at hotel or pay today </li>
											</ul>
										</div>
										<div class="detail-meta">
											<div class="detail-price">
												$150 <span>avg/night</span>
											</div>
											<span>15 available</span>
											<a href="page-details.html" class="btn">Book Now!</a>
										</div>
									</li>
									<li class="clearfix">
										<img src="images/room-types/room-type-03.jpg" alt="room type" />
										<div class="br2">
										<h3>Standard Double room</h3>
											<span>Max Occupancy: 2 adults</span>
											<ul class="hotelpreferences mt-10 mb-20">
												<li class="icohp-internet"></li>
												<li class="icohp-air"></li>
												<li class="icohp-pool"></li>
												<li class="icohp-childcare"></li>
												<li class="icohp-fitness"></li>
												<li class="icohp-breakfast"></li>
												<li class="icohp-parking"></li>
											</ul>
											<div class="clearfix"></div>
											<ul class="checklist2 text-info mt-20">
												<li>FREE Cancellation</li>
												<li>Pay at hotel or pay today </li>
											</ul>
										</div>
										<div class="detail-meta">
											<div class="detail-price">
												$150 <span>avg/night</span>
											</div>
											<span class="text-danger text-bold">Booked!</span>
											<a href="page-details.html" class="btn">Book Now!</a>
										</div>
									</li>
									<li class="clearfix">
										<img src="images/room-types/room-type-04.jpg" alt="room type" />
										<div class="br2">
											<h3>Standard Double room</h3>
											<span>Max Occupancy: 2 adults</span>
											<ul class="hotelpreferences mt-10 mb-20">
												<li class="icohp-internet"></li>
												<li class="icohp-air"></li>
												<li class="icohp-pool"></li>
												<li class="icohp-childcare"></li>
												<li class="icohp-fitness"></li>
												<li class="icohp-breakfast"></li>
												<li class="icohp-parking"></li>
											</ul>
											<div class="clearfix"></div>
											<ul class="checklist2 text-info mt-20">
												<li>FREE Cancellation</li>
												<li>Pay at hotel or pay today </li>
											</ul>
										</div>
										<div class="detail-meta">
											<div class="detail-price">
												$150 <span>avg/night</span>
											</div>
											<span class="text-warning text-bold ">2 left</span>
											<a href="page-details.html" class="btn">Book Now!</a>
										</div>
									</li>
								</ul>
							</li><!-- tab content -->
							
							<li id="details-tab3">
								<h4>Facilities</h4>
								<ul class="facilities">
									<li class="checked">Wifi</li>
									<li class="checked">TV</li>
									<li>Jacuzzi</li>
									<li>Fitness room</li>
									<li class="checked">Sauna</li>
									<li class="checked">Doctor on Call</li>
									<li>Taxi service </li>
									<li>Safe Deposits </li>
									<li class="checked">Laundry service </li>
									<li>Swimming Pool</li>
									<li>Air conditionin</li>
									<li class="checked">Safe Deposits </li>
									<li class="checked">Private balcony or terrace </li>
									<li>24-hours Front Desk</li>
									<li>Car & ATV rental</li>
								</ul>
								<h4>Activities</h4>
								<p>Lorem ipsum dolor amet, consectetur adipite scinelit vestibulum vel quam sitare amet odio ultricies dapbus acer vitae augue duis nulla nunc, dignissim ullamcorper minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam nisi aliquid commodi consequatur</p>
								<div class="clear"></div>
							</li><!-- tab content -->
							
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

								

						</li><!-- tab content -->
								
								

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