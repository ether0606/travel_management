<?php include_once('includes/header.php'); ?>   
<!--about-us start -->
		<section id="home" class="about-us" style="background-image: url('<?= $mysqli->base_url ?>admin/assets/images/background/flight-1200.jpg');">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>Flight Booking Service</h2>
                                    <p style="color:#FFF"></p>
									
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

															<option value="default">enter your destination</option><!-- /.option-->
															<?php
															$destinations=$mysqli->common_select("destination","id,name");

															
															foreach($destinations['data']as $destination) : ?>
															<option value="<?=$destination->id ?>"><?=$destination->name ?></option>
															<?php endforeach; ?>

															
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
													<h2>Members</h2>
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

											
										</div><!--/.row-->

										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="single-tab-select-box">

													<h2>to</h2>

													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">enter your destination</option><!-- /.option-->
															<?php
															$destinations=$mysqli->common_select("destination","id,name");

															
															foreach($destinations['data']as $destination) : ?>
															<option value="<?=$destination->id ?>"><?=$destination->name ?></option>
															<?php endforeach; ?>

															

									

															

														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->

												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->

											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="single-tab-select-box">

													<h2>Airlines</h2>

													<div class="travel-select-icon">
														<select class="form-control ">

															<option value="default">select airlines</option><!-- /.option-->
																
															<?php
															$airlines=$mysqli->common_select("airline","id,name");

															
															foreach($airlines['data']as $airline) : ?>
															<option value="<?=$airline->id ?>"><?=$airline->name ?></option>
															<?php endforeach; ?>

									

															

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

															<?php
															$seats=$mysqli->common_select("seat","id,seat_type");

															
															foreach($seats['data']as $seat) : ?>
															<option value="<?=$seat->id ?>"><?=$seat->seat_type ?></option>
															<?php endforeach; ?>


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
<?php include_once('includes/footer.php'); ?>
