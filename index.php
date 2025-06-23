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
									<a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
										<i class="fa fa-tree"></i>
										tours
									</a>
								</li>

								<li role="presentation">
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

								<div role="tabpanel" class="tab-pane active fade in" id="tours">
									<div class="tab-para">

										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="single-tab-select-box">

													<h2>destination</h2>

													<div class="travel-select-icon">
														<select class="form-control ">

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

											<div class="col-lg-2 col-md-3 col-sm-4">
												<div class="single-tab-select-box">
													<h2>check in</h2>
													<div class="travel-check-icon">
														<form action="#">
															<input type="text" name="check_in" class="form-control" data-toggle="datepicker" placeholder="12 -01 - 2017 ">
														</form>
													</div><!-- /.travel-check-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

											<div class="col-lg-2 col-md-3 col-sm-4">
												<div class="single-tab-select-box">
													<h2>check out</h2>
													<div class="travel-check-icon">
														<form action="#">
															<input type="text" name="check_out" class="form-control"  data-toggle="datepicker" placeholder="22 -01 - 2017 ">
														</form>
													</div><!-- /.travel-check-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

											<div class="col-lg-2 col-md-1 col-sm-4">
												<div class="single-tab-select-box">
													<h2>duration</h2>
													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">5</option><!-- /.option-->

															<option value="10">10</option><!-- /.option-->

															<option value="15">15</option><!-- /.option-->
															<option value="20">20</option><!-- /.option-->

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

											<div class="col-lg-2 col-md-1 col-sm-4">
												<div class="single-tab-select-box">
													<h2>members</h2>
													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">1</option><!-- /.option-->

															<option value="2">2</option><!-- /.option-->

															<option value="4">4</option><!-- /.option-->
															<option value="8">8</option><!-- /.option-->

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

										</div><!--/.row-->

										<div class="row">
											<div class="col-sm-5">
												<div class="travel-budget">
													<div class="row">
														<div class="col-md-3 col-sm-4">
															<h3>budget : </h3>
														</div><!--/.col-->
														<div class="co-md-9 col-sm-8">
															<div class="travel-filter">
																<div class="info_widget">
																	<div class="price_filter">
																		
																		<div id="slider-range"></div><!--/.slider-range-->

																		<div class="price_slider_amount">
																			<input type="text" id="amount" name="price"  placeholder="Add Your Price" />
																		</div><!--/.price_slider_amount-->
																	</div><!--/.price-filter-->
																</div><!--/.info_widget-->
															</div><!--/.travel-filter-->
														</div><!--/.col-->
													</div><!--/.row-->
												</div><!--/.travel-budget-->
											</div><!--/.col-->
											<div class="clo-sm-7">
												<div class="about-btn travel-mrt-0 pull-right">
													<button  class="about-view travel-btn">
														search	
													</button><!--/.travel-btn-->
												</div><!--/.about-btn-->
											</div><!--/.col-->

										</div><!--/.row-->

									</div><!--/.tab-para-->

								</div><!--/.tabpannel-->

								<div role="tabpanel" class="tab-pane fade in" id="hotels">
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
									<div class="tab-para">
										<div class="trip-circle">
											<div class="single-trip-circle">
												<input type="radio" id="radio01" name="radio" />
												<label for="radio01">
													<span class="round-boarder">
														<span class="round-boarder1"></span>
													</span>round trip
												</label>
											</div><!--/.single-trip-circle-->
											<div class="single-trip-circle">
												<input type="radio" id="radio02" name="radio" />
												<label for="radio02">
													<span class="round-boarder">
														<span class="round-boarder1"></span>
													</span>on way
												</label>
											</div><!--/.single-trip-circle-->
										</div><!--/.trip-circle-->
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="single-tab-select-box">

													<h2>from</h2>

													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">enter your location</option><!-- /.option-->

															<option value="turkey">turkey</option><!-- /.option-->

															<option value="russia">russia</option><!-- /.option-->
															<option value="egept">egypt</option><!-- /.option-->

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

											<div class="col-lg-2 col-md-3 col-sm-4">
												<div class="single-tab-select-box">
													<h2>departure</h2>
													<div class="travel-check-icon">
														<form action="#">
															<input type="text" name="departure" class="form-control" data-toggle="datepicker"
															placeholder="12 -01 - 2017 ">
														</form>
													</div><!-- /.travel-check-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

											<div class="col-lg-2 col-md-3 col-sm-4">
												<div class="single-tab-select-box">
													<h2>return</h2>
													<div class="travel-check-icon">
														<form action="#">
															<input type="text" name="return" class="form-control" data-toggle="datepicker" placeholder="22 -01 - 2017 ">
														</form>
													</div><!-- /.travel-check-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

											<div class="col-lg-2 col-md-1 col-sm-4">
												<div class="single-tab-select-box">
													<h2>adults</h2>
													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">5</option><!-- /.option-->

															<option value="10">10</option><!-- /.option-->

															<option value="15">15</option><!-- /.option-->
															<option value="20">20</option><!-- /.option-->

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

											<div class="col-lg-2 col-md-1 col-sm-4">
												<div class="single-tab-select-box">
													<h2>childs</h2>
													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">1</option><!-- /.option-->

															<option value="2">2</option><!-- /.option-->

															<option value="4">4</option><!-- /.option-->
															<option value="8">8</option><!-- /.option-->

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

										</div><!--/.row-->

										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="single-tab-select-box">

													<h2>to</h2>

													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">enter your destination location</option><!-- /.option-->

															<option value="istambul">istambul</option><!-- /.option-->

															<option value="mosko">mosko</option><!-- /.option-->
															<option value="cairo">cairo</option><!-- /.option-->

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->

												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->
											<div class="col-lg-3 col-md-3 col-sm-4">
												<div class="single-tab-select-box">

													<h2>class</h2>
													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">enter class</option><!-- /.option-->

															<option value="A">A</option><!-- /.option-->

															<option value="B">B</option><!-- /.option-->
															<option value="C">C</option><!-- /.option-->

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->
											<div class="clo-sm-5">
												<div class="about-btn pull-right">
													<button  class="about-view travel-btn">
														search	
													</button><!--/.travel-btn-->
												</div><!--/.about-btn-->
											</div><!--/.col-->
											
										</div><!--/.row-->

									</div>

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
												potuakhali
												
											</a>
											
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

								<div class="col-md-4">
									<div class="filtr-item">
										<img src="admin/assets/images/destination/rangamati.jpg"height= "360" width="311" alt="portfolio image"/>
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
							<img src="assets/images/client/testimonial1.jpg" alt="img"/>
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->	
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/client/testimonial2.jpg" alt="img"/>
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->	
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/client/testimonial1.jpg" alt="img"/>
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->	
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/client/testimonial1.jpg" alt="img"/>
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->	
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/client/testimonial2.jpg" alt="img"/>
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->	
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/client/testimonial1.jpg" alt="img"/>
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->	
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/client/testimonial1.jpg" alt="img"/>
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->	
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/client/testimonial2.jpg" alt="img"/>
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->	
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/client/testimonial1.jpg" alt="img"/>
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
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