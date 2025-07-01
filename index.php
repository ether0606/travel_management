<?php include('includes/header.php'); ?>
	<!--about-us start -->
	<section id="home" class="about-us">
		<div class="container">
			<div class="about-us-content">
				<div class="row">
					<div class="col-sm-12">
						<div class="single-about-us">
							<div class="about-us-txt">
								<h2>
									Explore the Beauty of the Beautiful World 

								</h2>
								<div class="about-btn">
									<button  class="about-view">
										explore now
									</button>
								</div><!--/.about-btn-->
							</div><!--/.about-us-txt-->
						</div><!--/.single-about-us-->
					</div><!--/.col-->
					<div class="col-sm-0">
						<div class="single-about-us">
							
						</div><!--/.single-about-us-->
					</div><!--/.col-->
				</div><!--/.row-->
			</div><!--/.about-us-content-->
		</div><!--/.container-->

	</section><!--/.about-us-->
	<!--about-us end -->

	<!--travel-box start-->
	<section  class="travel-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="single-travel-boxes">
						<div id="desc-tabs" class="desc-tabs">

							<ul class="nav nav-tabs" role="tablist">

								<li role="presentation" class="active">
									<a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">
										<i class="fa fa-building"></i>
										hotels
									</a>
								</li>

								<li role="presentation">
									<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">
										<i class="fa fa-plane"></i>
										flights
									</a>
								</li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="hotels">
									<form method="get" action="hotel_booking.php">
										<div class="tab-para">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-12">
													<div class="single-tab-select-box">

														<h2>destination</h2>

														<div class="travel-select-icon">
															<select class="form-control" name="location_id">
																<option value="default">enter your destination</option><!-- /.option-->
																<?php 
																	$locations = $mysqli->common_select("location", "id, name");
																	foreach ($locations['data'] as $location) : ?>
																		<option value="<?= $location->id ?>"><?= $location->name ?></option>
																<?php endforeach; ?>

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->

													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->
											</div><!--/.row-->

											<div class="row">
												<div class="col-sm-5"></div><!--/.col-->
												<div class="clo-sm-7">
													<div class="about-btn travel-mrt-0 pull-right">
														<button type="submit" class="about-view travel-btn">
															search	
														</button><!--/.travel-btn-->
													</div><!--/.about-btn-->
												</div><!--/.col-->

											</div><!--/.row-->

										</div><!--/.tab-para-->
									</form>
								</div><!--/.tabpannel-->

								<div role="tabpanel" class="tab-pane fade in" id="flights">
									<form method="get" action="flight_booking.php">
										<div class="tab-para">
											
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-12">
													<div class="single-tab-select-box">

														<h2>from</h2>

														<div class="travel-select-icon">
															<select class="form-control " name="from_airport">

																<option value="default">enter your location</option><!-- /.option-->

																<?php 
																	$locations = $mysqli->common_select("airport", "id, name");
																	foreach ($locations['data'] as $location) : ?>
																		<option value="<?= $location->id ?>"><?= $location->name ?></option>
																<?php endforeach; ?>

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->
												<div class="col-lg-4 col-md-4 col-sm-12">
													<div class="single-tab-select-box">

														<h2>to</h2>

														<div class="travel-select-icon">
															<select class="form-control" name="to_airport">

																<option value="default">enter your destination location</option><!-- /.option-->

																<?php 
																	$locations = $mysqli->common_select("airport", "id, name");
																	foreach ($locations['data'] as $location) : ?>
																		<option value="<?= $location->id ?>"><?= $location->name ?></option>
																<?php endforeach; ?>

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->

													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												<div class="col-lg-2 col-md-3 col-sm-4">
													<div class="single-tab-select-box">
														<h2>departure</h2>
														<div class="travel-check-icon">
															<input type="text" name="departure_date" class="form-control" data-toggle="datepicker"
																placeholder="12 -01 - 2017 ">
														</div><!-- /.travel-check-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->
											</div><!--/.row-->

											<div class="row">
												
												
												<div class="clo-sm-5">
													<div class="about-btn pull-right">
														<button  class="about-view travel-btn">
															search	
														</button><!--/.travel-btn-->
													</div><!--/.about-btn-->
												</div><!--/.col-->
												
											</div><!--/.row-->

										</div>
									</form>
								</div><!--/.tabpannel-->

							</div><!--/.tab content-->
						</div><!--/.desc-tabs-->
					</div><!--/.single-travel-box-->
				</div><!--/.col-->
			</div><!--/.row-->
		</div><!--/.container-->

	</section><!--/.travel-box-->
	<!--travel-box end-->

	<!--service start-->
	<section id="service" class="service">
		<div class="container">

			<div class="service-counter text-center">

				<div class="col-md-4 col-sm-4">
					<div class="single-service-box">
						<div class="service-img">
							<img src="assets/images/service/s1.png" alt="service-icon" />
						</div><!--/.service-img-->
						<div class="service-content">
							<h2>
								<a href="#">
								Choose amazing tour packages
								</a>
							</h2>
							<p>Must use our tour Planner for breathtaking tour packages!</p>
						</div><!--/.service-content-->
					</div><!--/.single-service-box-->
				</div><!--/.col-->

				<div class="col-md-4 col-sm-4">
					<div class="single-service-box">
						<div class="service-img">
							<img src="assets/images/service/s2.png" alt="service-icon" />
						</div><!--/.service-img-->
						<div class="service-content">
							<h2>
								<a href="#">
									book top class hotel
								</a>
							</h2>
							<p>This amazing site helps you book the best hotels all around the world!</p>
						</div><!--/.service-content-->
					</div><!--/.single-service-box-->
				</div><!--/.col-->

				<div class="col-md-4 col-sm-4">
					<div class="single-service-box">
						<div class="statistics-img">
							<img src="assets/images/service/s3.png" alt="service-icon" />
						</div><!--/.service-img-->
						<div class="service-content">

							<h2>
								<a href="#">
									online flight booking
								</a>
							</h2>
							<p>Book your flight instantly using TourNest!</p>
						</div><!--/.service-content-->
					</div><!--/.single-service-box-->
				</div><!--/.col-->

			</div><!--/.statistics-counter-->	
		</div><!--/.container-->

	</section><!--/.service-->
	<!--service end-->

	<!--galley start-->
	<section id="gallery" class="gallery">
		<div class="container">
			<div class="gallery-details">
				<div class="gallary-header text-center">
					<h2>
						top destination
					</h2>
					<p>
						Where do you wanna go? How much you wanna explore?  
					</p>
				</div><!--/.gallery-header-->
				<div class="gallery-box">
					<div class="gallery-content">
						<div class="filtr-container">
							<div class="row">


							

								<div class="col-md-6">
									<div class="filtr-item">
										<img src="admin/assets/images/destination/Coxs-Bazar-Sea-Beach.jpg" height= "555" width="312"alt="portfolio image"/>
										<div class="item-title">
											<a href="#">
												Cox's Bazar
											</a>
		
										</div><!-- /.item-title -->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

								<div class="col-md-6">
									<div class="filtr-item">
										<img src="admin/assets/images/destination/sylhet.jpg"height= "555" width="312" alt="portfolio image"/>
										<div class="item-title">
											<a href="#">
												Sylhet
											</a>
											
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

								<div class="col-md-4">
									<div class="filtr-item">
										<img src="admin/assets/images/destination/bandarban.jpg" height= "360" width="652" alt="portfolio image"/>
										<div class="item-title">
											<a href="#">
												Bandarban
											</a>
											
										</div><!-- /.item-title -->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

								<div class="col-md-4">
									<div class="filtr-item">
										<img src="admin/assets/images/destination/potuakhali.jpg"height= "360" width="311" alt="portfolio image"/>
										<div class="item-title">
											<a href="#">
												Patuakhali
												
											</a>
											
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

								<div class="col-md-4">
									<div class="filtr-item">
										<img src="admin/assets/images/destination/Rangamati.jpg"height= "360" width="311" alt="portfolio image"/>
										<div class="item-title">
											<a href="#">
												Rangamati
											</a>
											
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

								<div class="col-md-8">
									<div class="filtr-item">
										<img src="admin/assets/images/destination/sundarban.jpg"height= "750" width="312" alt="portfolio image"/>
										<div class="item-title">
											<a href="#">
												Sundarban
											</a>
											
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

							</div><!-- /.row -->

						</div><!-- /.filtr-container-->
					</div><!-- /.gallery-content -->
				</div><!--/.galley-box-->
			</div><!--/.gallery-details-->
		</div><!--/.container-->

	</section><!--/.gallery-->
	<!--gallery end-->

	<!--packages start-->
	<section id="pack" class="packages">
		<div class="container">
			<div class="gallary-header text-center">
				<h2>
					special packages
				</h2>
				<p>
					Prepare to experience Bangladesh's rich culture and explore the majestic beauties of Cox's Bazar, Sylhet, Bandarban, Sajek Valley, Rangamati etc. Plan your trip now!
				</p>
			</div><!--/.gallery-header-->
			<div class="packages-content">
				<div class="row">
					<?php
						$res=$mysqli->common_query("select tour_packages.*, destination.name as destination from tour_packages join destination on tour_packages.destination_id = destination.id where tour_packages.status = 1 and tour_packages.start_date >= '".date('Y-m-d')."' order by tour_packages.id desc");
						if($res['error']==0){
							foreach($res['data'] as $d){
					?>
					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="<?= $mysqli->base_url ?>admin/assets/images/tour_packages/<?= $d->image_url ?>" alt="package-place">
							<div class="single-package-item-txt">
								<h3><?= $d->destination ?> <span class="pull-right">BDT<?=$d->price?></span></h3>
								<div class="packages-para">
									<p><?= $d->title ?></p>
								</div><!--/.packages-para-->
								<div class="about-btn">
									<a href="tour_package.php?id=<?= $d->id ?>" class="about-view packages-btn">
										Details
									</a>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->
					</div><!--/.col-->
				<?php } } ?>
				</div><!--/.row-->
			</div><!--/.packages-content-->
		</div><!--/.container-->

	</section><!--/.packages-->
	<!--packages end-->

	<!-- testemonial Start -->
	<section   class="testemonial">
		<div class="container">

			<div class="gallary-header text-center">
				<h2>
					clients reviews
				</h2>
				<p>
				</p>

			</div><!--/.gallery-header-->

			<div class="owl-carousel owl-theme" id="testemonial-carousel">

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="admin/assets/images/clientr/kl.jpg" alt="img"/>
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
							Excellent customer service, personalized itineraries, seamless booking processes, and knowledgeable guides 
							</p>
							<h3>
								<a href="#">
									Safia Nur Nazia
								</a>
							</h3>
							<h4>Dhaka, Bangladesh</h4>
						</div><!--/.home1-testm-txt-->	
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="admin/assets/images/clientr/gh.jpg" alt="img"/>
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
							"The travel agent really listened to what we wanted and curated a unique experience that suited our budget and preferences. Felt like a VIP the whole trip!"


							</p>
							<h3>
								<a href="#">
									Nispal Sen
								</a>
							</h3>
							<h4>Chattogram, Bangladesh</h4>
						</div><!--/.home1-testm-txt-->	
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="admin/assets/images/clientr/ij.jpg" alt="img"/>
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
							The destination was beautiful, but I felt like some of the hotel options were below what was promised. Communication was a bit slow too. Not a bad trip, but could be better."

							</p>
							<h3>
								<a href="#">
									Jerin Afroz
								</a>
							</h3>
							<h4>Khulna,Bangladesh </h4>
						</div><!--/.home1-testm-txt-->	
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="admin/assets/images/clientr/ab.jpg" alt="img"/>
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
							"Everything was seamless—from the booking process to the actual vacation. Great recommendations and no surprise fees. I’m already planning my next trip with them." 
							</p>
							<h3>
								<a href="#">
									Sharuz Kabir
								</a>
							</h3>
							<h4>Dhaka, Bangladesh</h4>
						</div><!--/.home1-testm-txt-->	
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="admin/assets/images/clientr/ahad reza.jpg" alt="img"/>
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
							"Flights were delayed (not their fault), but the agency didn’t provide much help. Also, our hotel wasn’t what we expected. I won’t be using them again."


							</p>
							<h3>
								<a href="#">
									Turan Ahmed
								</a>
							</h3>
							<h4>Cox's Bazar, Bangladesh</h4>
						</div><!--/.home1-testm-txt-->	
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

			</div><!--/.testemonial-carousel-->
		</div><!--/.container-->

	</section><!--/.testimonial-->	
	<!-- testemonial End -->


	<!--special-offer start-->
	<section id="spo" class="special-offer">
		<div class="container">
			<div class="special-offer-content">
				<div class="row">
					<div class="col-sm-8">
						<div class="single-special-offer">
							<div class="single-special-offer-txt">
								<h2>Rangamati</h2>
								<div class="packages-review special-offer-review">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span>2544 review</span>
									</p>
								</div><!--/.packages-review-->
								<div class="packages-para special-offer-para">
									<p>
										<span>
											<i class="fa fa-angle-right"></i> 3 Days 2 nights
										</span>
										<span>
											<i class="fa fa-angle-right"></i> 2 person
										</span>
										<span>
											<i class="fa fa-angle-right"></i>  3 star accomodation
										</span>
									</p>
									<p>
										<span>
											<i class="fa fa-angle-right"></i>  transportation
										</span>
										<span>
											<i class="fa fa-angle-right"></i>  food facilities
										</span>  
									</p>
									<p class="offer-para">
										
									</p>
								</div><!--/.packages-para-->
								<div class="offer-btn-group">
									<div class="about-btn">
										<button  class="about-view packages-btn offfer-btn">
											make tour
										</button>
									</div><!--/.about-btn-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											book now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.offer-btn-group-->
							</div><!--/.single-special-offer-txt-->
						</div><!--/.single-special-offer-->
					</div><!--/.col-->
					<div class="col-sm-4">
						<div class="single-special-offer">
							<div class="single-special-offer-bg">
								<img src="admin/assets/images/tour_packages/coxs.jpg" alt="offer-shape">
							</div><!--/.single-special-offer-bg-->
							<div class="single-special-shape-txt">
								<h3>special offer</h3>
								<h4><span>40%</span><br>off</h4>
								<p><span>3000</span><br>reguler 5000</p>
							</div><!--/.single-special-shape-txt-->
						</div><!--/.single-special-offer-->
					</div><!--/.col-->
				</div><!--/.row-->
			</div><!--/.special-offer-content-->
		</div><!--/.container-->

	</section><!--/.special-offer end-->
	<!--special-offer end-->
<?php include_once('includes/footer.php'); ?>
<?php

// the message
	$msg = "Thank you for booking with us. Your booking invoice number is INV-";
	// send email
	mail("idbbatch64@gmail.com","Flight Booking",$msg,'info@wdpfctg.site');

	?>
