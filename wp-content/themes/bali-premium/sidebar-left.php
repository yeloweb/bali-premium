					<div class="col-xs-12 col-sm-4 col-md-3">
						<div class="sidebar">
						
						<?php dynamic_sidebar('left')?>
						
						
							<div class="counting-result">
								<span class="counthotel">453</span> results found. Starting at 
								<div class="counting-price">$<span class="countprice"></span></div>
							</div>
							<div class="clear" style="height: 5px;"></div>
							<div class="search-filter">
								<ul class="search-tabs">
									<li><a href="#search-f-hotels" class="active">Hotels</a></li>
									<li>Packages: </li>
									<li><a href="#search-f-flights">Flights</a></li>
									<li><a href="#search-f-mix-1">Flight+Hotel+Car</a></li>
									<li><a href="#search-f-vacations">Vacations</a></li>
									<li><a href="#search-f-mix-2">Flight+Hotel</a></li>
									<li><a href="#search-f-cars">Cars</a></li>
									<li><a href="#search-f-mix-3">Flight+Car</a></li>
									<li><a href="#search-f-cruises">Cruises</a></li>
									<li><a href="#search-f-mix-4">Hotel+Car</a></li>
								</ul><!-- tabs -->

								<ul class="search-tabs-content">
									<li id="search-f-hotels" class="active">
										<form role="form" class="row" />
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<label for="hotelLocation">Where do you want to go?</label>
													<input type="text" class="form-control" id="hotelLocation" placeholder="Thailand" />
												</div>
											</div>
											<div class="clear"></div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="hotel-check-in">Check-in</label>
													<input type="text" class="form-control date" id="hotel-check-in" placeholder="dd/dm/yy" />
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="hotel-check-out">Check-out</label>
													<input type="text" class="form-control date" id="hotel-check-out" placeholder="dd/dm/yy" />
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="clear"></div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="room1">
													<div class="add-room">
														<div class="two-fourth">
															<span>Room 1</span><br />
															<div class="addroom1 block">
																<a onclick="addroom2()">+ Add room</a>
															</div>							
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
											</div>
											<div class="clear mb-20"></div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<button type="submit" class="btn btn-primary">Search</button>
											</div>
										</form>
									</li><!-- end hotel tab content -->
									<li id="search-f-flights">
										<form role="form" class="row" />
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="flightFrom">From</label>
													<input type="email" class="form-control" id="flightFrom" placeholder="Bangkok" />
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="flightTo">To</label>
													<input type="email" class="form-control" id="flightTo" placeholder="New York" />
												</div>
											</div>
											<div class="clear"></div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="flightDepart">Departure</label>
													<input type="text" class="form-control date" id="flightDepart" placeholder="dd/dm/yy" />
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="flightReturn">Retrun</label>
													<input type="text" class="form-control date" id="flightReturn" placeholder="dd/dm/yy" />
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="clear"></div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="flightAdult">Adult</label>
													<select class="form-control mySelectBoxClass" id="flightAdult">
														<option />0
														<option selected="" />1
														<option />2
														<option />3
														<option />4
														<option />5
													</select>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="flightChild">Child</label>
													<select class="form-control mySelectBoxClass" id="flightChild">
														<option />0
														<option selected="" />1
														<option />2
														<option />3
														<option />4
														<option />5
													</select>
												</div>
											</div>
											<div class="clear mb-10"></div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<button type="submit" class="btn btn-primary">Search</button>
											</div>
										</form>
									</li><!-- end flight tab content -->
									<li id="search-f-mix-1">
										<form role="form" class="row" />
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="mix1From">From</label>
													<input type="email" class="form-control" id="mix1From" placeholder="City" />
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="mix1To">To</label>
													<input type="email" class="form-control" id="mix1To" placeholder="City" />
												</div>
											</div>
											<div class="clear"></div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="mix1-check-in">Departure</label>
													<input type="text" class="form-control date" id="mix1-check-in" placeholder="dd/dm/yy" />
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="mix1-check-out">Return</label>
													<input type="text" class="form-control date" id="mix1-check-out" placeholder="dd/dm/yy" />
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="clear"></div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="room1">
													<div class="add-room">
														<div class="two-fourth">
															<span>Room 1</span><br />
															<div class="addroom1 block">
																<a onclick="addroom2()">+ Add room</a>
															</div>							
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
											</div>
											<div class="clear mb-10"></div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="note-ps">
													** An economy car will be added to your search. (You may change your car options later.)
												</div>
												<div class="clear mb-20"></div>
												<button type="submit" class="btn btn-primary">Search</button>
											</div>
										</form>
									</li><!-- end mix1 tab content -->
									<li id="search-f-vacations">
										<form role="form" class="row" />
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="cavationFrom">From</label>
													<input type="email" class="form-control" id="cavationFrom" placeholder="City" />
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="vacationTo">To</label>
													<input type="email" class="form-control" id="vacationTo" placeholder="City" />
												</div>
											</div>
											<div class="clear"></div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="vacation-check-in">Check-in</label>
													<input type="text" class="form-control date" id="vacation-check-in" placeholder="dd/dm/yy" />
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="vacation-check-out">Check-out</label>
													<input type="text" class="form-control date" id="vacation-check-out" placeholder="dd/dm/yy" />
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="clear"></div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="room1">
													<div class="add-room">
														<div class="two-fourth">
															<span>Room 1</span><br />
															<div class="addroom1 block">
																<a onclick="addroom2()">+ Add room</a>
															</div>							
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
											</div>
											<div class="clear mb-20"></div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<button type="submit" class="btn btn-primary">Search</button>
											</div>
										</form>
									</li><!-- end vacations tab content -->
									<li id="search-f-mix-2">
										<form role="form" class="row" />
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="mix2From">From</label>
													<input type="email" class="form-control" id="mix2From" placeholder="City" />
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="mix2To">To</label>
													<input type="email" class="form-control" id="mix2To" placeholder="City" />
												</div>
											</div>
											<div class="clear"></div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="mix2-check-in">Departure</label>
													<input type="text" class="form-control date" id="mix2-check-in" placeholder="dd/dm/yy" />
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="mix2-check-out">Return</label>
													<input type="text" class="form-control date" id="mix2-check-out" placeholder="dd/dm/yy" />
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="clear"></div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="room1">
													<div class="add-room">
														<div class="two-fourth">
															<span>Room 1</span><br />
															<div class="addroom1 block">
																<a onclick="addroom2()">+ Add room</a>
															</div>							
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
											</div>
											<div class="clear mb-20"></div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<button type="submit" class="btn btn-primary">Search</button>
											</div>
										</form>
									</li><!-- end mix2 tab content -->
									<li id="search-f-cars">
										<form role="form" class="row" />
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="carFrom">From</label>
													<input type="email" class="form-control" id="carFrom" placeholder="Address" />
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="carTo">To</label>
													<input type="email" class="form-control" id="carTo" placeholder="Address" />
												</div>
											</div>
											<div class="clear"></div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="car-pick-up">Pick-up</label>
													<input type="text" class="form-control date" id="car-pick-up" placeholder="dd/dm/yy" />
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="pickUpTime">Hour</label>
													<select class="form-control mySelectBoxClass" id="pickUpTime">
														<option />12:00 AM
														<option />12:30 AM
														<option />01:00 AM
														<option />01:30 AM
														<option />02:00 AM
														<option />02:30 AM
														<option />03:00 AM
														<option />03:30 AM
														<option />04:00 AM
														<option />04:30 AM
														<option />05:00 AM
														<option />05:30 AM
														<option />06:00 AM
														<option />06:30 AM
														<option />07:00 AM
														<option />07:30 AM
														<option />08:00 AM
														<option />08:30 AM
														<option />09:00 AM
														<option />09:30 AM
														<option />10:00 AM
														<option selected="" />10:30 AM
														<option />11:00 AM
														<option />11:30 AM
														<option />12:00 PM
														<option />12:30 PM								  
														<option />01:00 PM
														<option />01:30 PM
														<option />02:00 PM
														<option />02:30 PM
														<option />03:00 PM
														<option />03:30 PM
														<option />04:00 PM
														<option />04:30 PM
														<option />05:00 PM
														<option />05:30 PM
														<option />06:00 PM
														<option />06:30 PM
														<option />07:00 PM
														<option />07:30 PM
														<option />08:00 PM
														<option />08:30 PM
														<option />09:00 PM
														<option />09:30 PM
														<option />10:00 PM
														<option />10:30 PM
														<option />11:00 PM
														<option />11:30 PM		
													</select>
												</div>
											</div>
											<div class="clear"></div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="car-drop-off">Check-out</label>
													<input type="text" class="form-control date" id="car-drop-off" placeholder="dd/dm/yy" />
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="dropOffTime">Hour</label>
													<select class="form-control mySelectBoxClass" id="dropOffTime">
														<option />12:00 AM
														<option />12:30 AM
														<option />01:00 AM
														<option />01:30 AM
														<option />02:00 AM
														<option />02:30 AM
														<option />03:00 AM
														<option />03:30 AM
														<option />04:00 AM
														<option />04:30 AM
														<option />05:00 AM
														<option />05:30 AM
														<option />06:00 AM
														<option />06:30 AM
														<option />07:00 AM
														<option />07:30 AM
														<option />08:00 AM
														<option />08:30 AM
														<option />09:00 AM
														<option />09:30 AM
														<option />10:00 AM
														<option selected="" />10:30 AM
														<option />11:00 AM
														<option />11:30 AM
														<option />12:00 PM
														<option />12:30 PM								  
														<option />01:00 PM
														<option />01:30 PM
														<option />02:00 PM
														<option />02:30 PM
														<option />03:00 PM
														<option />03:30 PM
														<option />04:00 PM
														<option />04:30 PM
														<option />05:00 PM
														<option />05:30 PM
														<option />06:00 PM
														<option />06:30 PM
														<option />07:00 PM
														<option />07:30 PM
														<option />08:00 PM
														<option />08:30 PM
														<option />09:00 PM
														<option />09:30 PM
														<option />10:00 PM
														<option />10:30 PM
														<option />11:00 PM
														<option />11:30 PM	
													</select>
												</div>
											</div>
											<div class="clear mb-10"></div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<button type="submit" class="btn btn-primary">Search</button>
											</div>
										</form>
									</li><!-- end car tab content -->
									<li id="search-f-mix-3">
										<form role="form" class="row" />
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="mix3From">From</label>
													<input type="email" class="form-control" id="mix3From" placeholder="City" />
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="mix3To">To</label>
													<input type="email" class="form-control" id="mix3To" placeholder="City" />
												</div>
											</div>
											<div class="clear"></div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="mix3-check-in">Departure</label>
													<input type="text" class="form-control date" id="mix3-check-in" placeholder="dd/dm/yy" />
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="mix3-check-out">Return</label>
													<input type="text" class="form-control date" id="mix3-check-out" placeholder="dd/dm/yy" />
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="clear mb-10"></div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="note-ps">
													** An economy car will be added to your search. (You may change your car options later.)
												</div>
												<div class="clear mb-20"></div>
												<button type="submit" class="btn btn-primary">Search</button>
											</div>
										</form>
									</li><!-- end mix3 tab content -->
									<li id="search-f-cruises">
										<form role="form" class="row" />
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<label for="cruisesDestinatiom">Destination</label>
													<select class="form-control mySelectBoxClass" id="cruisesDestinatiom">
														<option selected="" />Show all
														<optgroup label="Most Popular">
															<option />Caribbean
															<option />Bahamas
															<option />Mexico
															<option />Alaska
															<option />Europe
															<option />Bermuda
															<option />Hawaii
														</optgroup>
														<optgroup label="Other Destinations">
															<option />Africa
															<option />Arctic/Antartctic
															<option />Asia
															<option />Oceania
															<option />Central America
															<option />Cruise to Nowhere
															<option />Galapagos
															<option />Greenland/Iceland
															<option />Middle East
															<option />Pacific Coastal
															<option />Panama Canal
															<option />South Africa
															<option />South Pacific
															<option />Tahiti
															<option />Transatlantic
															<option />World Cruises
														</optgroup>
													</select>
												</div>
											</div>
											<div class="clear"></div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<label for="cruisesWhen">When</label>
													<select class="form-control mySelectBoxClass" id="cruisesWhen">
														<option selected="" />Show all
														<option />October 2013
														<option />November 2013
														<option />December 2013
														<option />January 2014
														<option />February 2014
														<option />March 2014
														<option />April 2014
														<option />May 2014
														<option />June 2014
														<option />July 2014
														<option />August 2014
														<option />September 2014
														<option />October 2014
														<option />November 2014
														<option />December 2014
													</select>
												</div>
											</div>
											<div class="clear mb-20"></div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<button type="submit" class="btn btn-primary">Search</button>
											</div>
										</form>
									</li><!-- end cruises tab content -->
									<li id="search-f-mix-4">
										<form role="form" class="row" />
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="mix4Destination">Destination</label>
													<input type="email" class="form-control" id="mix4Destination" placeholder="Thailand" />
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="mix4From">From</label>
													<input type="email" class="form-control" id="mix4From" placeholder="Italy" />
												</div>
											</div>
											<div class="clear"></div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="mix4-check-in">Departure</label>
													<input type="text" class="form-control date" id="mix4-check-in" placeholder="dd/dm/yy" />
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group datepicker-wrapper">
													<label for="mix4-check-out">Return</label>
													<input type="text" class="form-control date" id="mix4-check-out" placeholder="dd/dm/yy" />
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="clear"></div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="room1">
													<div class="add-room">
														<div class="two-fourth">
															<span>Room 1</span><br />
															<div class="addroom1 block">
																<a onclick="addroom2()">+ Add room</a>
															</div>							
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
											</div>
											<div class="clear mb-10"></div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="note-ps">
													** An economy car will be added to your search. (You may change your car options later.)
												</div>
												<div class="clear mb-20"></div>
												<button type="submit" class="btn btn-primary">Search</button>
											</div>
										</form>
									</li><!-- end mix4 tab content -->
								</ul><!-- end search tab -->
							</div>

							<div class="clear" style="height: 5px;"></div>
							<div class="another-toggle">
								<h5 class="active">Price Range</h5>
								<div class="another-toggle-inner">
									<div class="price-range">
										<!-- div to become a slider -->
										<div class="noUiSlider"></div>
										<input type="text" id="start-val" />
										<input type="text" id="end-val" />
									</div>
								</div><!-- /another-toggle-inner -->
							</div><!-- /another-toggle -->
							
							<div class="another-toggle">
								<h5 class="active">Accommodation Type</h5>
								<div class="another-toggle-inner">
									<div class="clear mb-10"></div>
									<form action="#" method="post" />
										<fieldset>
											<div class="styled-checkbox">
												<label>
													<input type="checkbox" name="accommodationType" id="accommodationType1" value="option1" checked="" />
													All
													<span class="counting">(1231)</span>
												</label>
											</div>
											<div class="styled-checkbox">
												<label>
													<input type="checkbox" name="accommodationType" id="accommodationType2" value="option2" />
													Hotels
													<span class="counting">(436)</span>
												</label>
											</div>
											<div class="styled-checkbox">
												<label>
													<input type="checkbox" name="accommodationType" id="accommodationType3" value="option3" />
													Resorts<span class="counting">(128)</span>
												</label>
											</div>
											<div class="styled-checkbox">
												<label>
													<input type="checkbox" name="accommodationType" id="accommodationType4" value="option4" />
													Guest Houses<span class="counting">(21)</span>
												</label>
											</div>
											<div class="styled-checkbox">
												<label>
													<input type="checkbox" name="accommodationType" id="accommodationType5" value="option5" />
													Condominium<span class="counting">(76)</span>
												</label>
											</div>
										</fieldset>
									</form>
								</div><!-- /another-toggle-inner -->
							</div><!-- /another-toggle -->
							
							<div class="another-toggle">
								<h5 class="active">Amenities</h5>
								<div class="another-toggle-inner">
									<div class="clear mb-10"></div>
									<form action="#" method="post" />
										<fieldset>
											<div class="styled-checkbox">
												<label>
													<input type="checkbox" name="amenities" id="amenities1" value="option1" />
													Internet
													<span class="counting">(436)</span>
												</label>
											</div>
											<div class="styled-checkbox">
												<label>
													<input type="checkbox" name="amenities" id="amenities2" value="option2" />
													Swimming Pool
													<span class="counting">(231)</span>
												</label>
											</div>
											<div class="styled-checkbox">
												<label>
													<input type="checkbox" name="amenities" id="amenities3" value="option3" />
													High-Definition TV<span class="counting">(543)</span>
												</label>
											</div>
											<div class="styled-checkbox">
												<label>
													<input type="checkbox" name="amenities" id="amenities4" value="option4" />
													Room Service<span class="counting">(221)</span>
												</label>
											</div>
											<div class="styled-checkbox">
												<label>
													<input type="checkbox" name="amenities" id="amenities5" value="option5" />
													Hot Water<span class="counting">(341)</span>
												</label>
											</div>
											<div class="styled-checkbox">
												<label>
													<input type="checkbox" name="amenities" id="amenities6" value="option6" />
													Limousine<span class="counting">(75)</span>
												</label>
											</div>
										</fieldset>
									</form>
								</div><!-- /another-toggle-inner -->
							</div><!-- /another-toggle -->
							
							<div class="another-toggle">
								<h5 class="active">Start Rating</h5>
								<div class="another-toggle-inner">
									<div class="clear mb-10"></div>
									<form action="#" method="post" />
										<fieldset>
											<div class="styled-checkbox">
												<label for="rating-1">
													<input type="checkbox" id="rating-1" /><span class="rating-static rating-10"></span>
													<span class="counting">1 Star</span>
												</label>
											</div>
											<div class="styled-checkbox">
												<label for="rating-2">
													<input type="checkbox" id="rating-2" /><span class="rating-static rating-20"></span>
													<span class="counting">2 Stars</span>
												</label>
											</div>
											<div class="styled-checkbox">
												<label for="rating-3">
													<input type="checkbox" id="rating-3" /><span class="rating-static rating-30"></span>
													<span class="counting">3 Stars</span>
												</label>
											</div>
											<div class="styled-checkbox">
												<label for="rating-4">
													<input type="checkbox" id="rating-4" /><span class="rating-static rating-40"></span>
													<span class="counting">4 Stars</span>
												</label>
											</div>
											<div class="styled-checkbox">
												<label for="rating-5">
													<input type="checkbox" id="rating-5" /><span class="rating-static rating-50"></span>
													<span class="counting">5 Stars</span>
												</label>
											</div>
										</fieldset>
									</form>
								</div><!-- /another-toggle-inner -->
							</div><!-- /another-toggle -->
							
							<div class="another-toggle">
								<h5>Another Toggle</h5>
								<div class="another-toggle-inner">
									<div class="clear mb-10"></div>
									<p>He share of first to worse. Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness.</p>
								</div><!-- /another-toggle-inner -->
							</div><!-- /another-toggle -->
						</div>
					</div>



