<?php include_once('includes/header.php'); ?>     
<?php
	$res = $mysqli->common_query("select * from airline where id = '" . $_GET['airline_id']."'");
    
		if ($res['error'] == 0) {
				$airline_data=$res['data'][0];
			}
?>
<!--about-us start -->
		<section id="home" class="about-us" style="background-image: url('<?= $baseurl ?>admin/assets/images/hotels/<?= $airline_data->image_url ?>');">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2><?= $airline_data->name ?></h2>
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


        <!--packages start-->
		<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>Available Airlines</h2>
					<p></p>
				</div><!--/.gallery-header-->
				<div class="packages-content">
						<?php
							$res = $mysqli->common_query("select * from seat_fare where status = 1 and schedule_id = '" . $_GET['schedule_id']."' and airline_id = '" . $_GET['airline_id']."'");
								
							if ($res['error'] == 0) {
								foreach($res['data'] as $d){
						?>
							<div class="row">
								<div class="col-sm-6">
									<div class="single-package-item">
										<div class="single-package-item-txt">
											<h3><?= $d->class_name ?> <span class="pull-right">BDT<?= $d->seat_fare ?></span></h3>
                                            <div class="packages-para">
                                                <p>Seat Available: <?= $d->seat_available ?></p>
                                                <p>Seat Fare: <?= $d->seat_fare ?></p>
                                            </div><!--/.packages-para-->
										</div><!--/.packages-para-->
											
                                        <div class="about-btn">
                                            <button type="button" onclick="show_form(<?= $d->id ?>)" class="about-view packages-btn">book now</button>
                                        </div><!--/.about-btn-->
                                    </div><!--/.single-package-item-txt-->
                                </div><!--/.single-package-item-->
								<div class="col-sm-6">
									<div class="booking-form booking-form<?= $d->id ?>">
										<form method="post" action="">
											<input type="hidden" name="user_id" id="">
											<div class="row">
												<div class="col-12">
													<div class="single-tab-select-box">
														<h2>Full Name</h2>
														<div class="travel-text-icon">
															<input type="text" name="full_name" class="form-control" >
														</div><!-- /.travel-check-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->
												<div class="col-12">
													<div class="single-tab-select-box">
														<h2>Email</h2>
														<div class="travel-text-icon travel-envelope-icon">
															<input type="text" name="email" class="form-control" >
														</div><!-- /.travel-check-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->
												<div class="col-12">
													<div class="single-tab-select-box">
														<h2>Phone Number</h2>
														<div class="travel-text-icon travel-envelope-icon">
															<input type="text" name="contact" class="form-control" >
														</div><!-- /.travel-check-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												<div class="col-12">
													<div class="single-tab-select-box">
														<h2>Number of Seat</h2>
														<div class="travel-text-icon">
															<input type="text" name="num_of_seat" class="form-control" >
														</div><!-- /.travel-text-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->
											</div><!--/.row-->

											<div class="row">
												<div class="col-sm-5"></div><!--/.col-->
												<div class="clo-sm-7">
													<div class="about-btn travel-mrt-0 pull-right">
														<button type="submit" name="submit<?= $d->id ?>" class="about-view travel-btn">
															Request to Book	
														</button><!--/.travel-btn-->
													</div><!--/.about-btn-->
												</div><!--/.col-->
											</div><!--/.row-->

										</form>
										<?php
										
											if (isset($_POST["submit{$d->id}"])) {
												/* this is for check if user is available or not*/
												if($_POST['user_id']==""){
													$user['full_name']=$_POST['full_name'];
													$user['email']=strtolower($_POST['email']);
													$user['contact']=$_POST['contact'];
													$user['created_at'] = date('Y-m-d H:i:s');
													$user['created_by'] = 1;
													$user['status'] = 1;
													$user['password'] = sha1('123456');
													
													$check=$mysqli->common_select('user', '*',['email'=>$user['email']]);
													
													if($check['error']){
														$resh = $mysqli->common_insert('user', $user);
														if (!$resh['error']) {
															$user_id=$resh['data'];
														} else {
															echo $resh['error_msg'];
														}
													}else{
														$user_id=$check['data'][0]->id;
													}

												}else{
													$user_id=$_POST['user_id'];
												}
												
												$bookings['user_id']=$user_id;
												$bookings['airline_id']=$_GET['airline_id'];
												$bookings['schedule_id']=$_GET['schedule_id'];
												$bookings['route_id']=$_GET['route_id'];
												$bookings['departure_date']=date('Y-m-d',strtotime($_GET['departure_date']));
												$bookings['num_of_seat']=$_POST['num_of_seat'];
												$bookings['flight_class']=$d->class_name;

												$bookings['total_amount']=$d->seat_fare * $_POST['num_of_seat'];
												$bookings['booking_date']=date('Y-m-d H:i:s');
												$bookings['seat_fare_id']=$d->id;
												$bookings['status']=1;
												$bookings['booking_status']=1;
												$bookings['created_at'] = date('Y-m-d H:i:s');
												$bookings['created_by'] = $user_id;

												$res = $mysqli->common_insert('flight_booking', $bookings);
												if (!$res['error']) {
													// the message
													$msg = "Thank you for booking with us. Your booking invoice number is INV-". str_pad($res['data'],6,0,STR_PAD_LEFT) ;
													// send email
													$mysqli->sendEmail(strtolower($_POST['email']),'Flight Booking',$msg);
													echo "<script>location.href='thanks.php?b=flight&id=".$res['data']."'</script>";
												} else {
													echo $res['error_msg'];
												}
											}
										?>
									</div>
								</div>
							</div><!--/.row-->
						<?php }}else{ } ?>  

				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->


<!--hotel Booking form end-->

<?php include_once('includes/footer.php'); ?>
<script>
	function show_form(id){
		$('.booking-form').hide('slowly');
		$('.booking-form'+id).show('slowly');
	}
	$('.booking-form').hide();
</script>