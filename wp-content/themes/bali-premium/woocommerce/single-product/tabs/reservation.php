<?php
/**
 * Reservation tab
 *
 * @author        WooThemes
 * @package       WooCommerce/Templates
 * @version       2.0.0
 */
?>
								
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
								<?php include(TEMPLATEPATH . "/woocommerce/single-product/tabs/coordonnees.php"); ?>
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