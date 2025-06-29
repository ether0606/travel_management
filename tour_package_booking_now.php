<?php include_once('includes/header.php'); ?>     
<?php
	$res = $mysqli->common_query("select * from tour_packages where id = '" . $_GET['tour_packages_id']."'");
		
	if ($res['error'] == 0) {
		$hotel_data=$res['data'][0];
	}
?>
<!--about-us start -->
		<section id="home" class="about-us" style="background-image: url('<?= $baseurl ?>admin/assets/images/hotels/<?= $tour_packages_data->image_url ?>');">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2><?= $tour_packages_data->title ?></h2>
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
					<h2></h2>
					<p></p>
				</div><!--/.gallery-header-->
				<div class="packages-content">
									
											<div class="about-btn">
												<button type="button" onclick="show_form(<?= $d->id ?>)" class="about-view packages-btn">book now</button>
											</div><!--/.about-btn-->
										</div><!--/.single-package-item-txt-->
									</div><!--/.single-package-item-->

								</div><!--/.col-->
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
													$user['email']=$_POST['email'];
													$user['contact']=$_POST['contact'];
													$user['created_at'] = date('Y-m-d H:i:s');
													$user['created_by'] = 1;
													$user['status'] = 1;
													$user['password'] = sha1('123456');
													
													$check=$mysqli->common_select('user', '*',['email'=>$user['email']]);
													
													if($check['error']){
														$res = $mysqli->common_insert('user', $user);
														if (!$res['error']) {
															$user_id=$res['data'];
														} else {
															echo $res['error_msg'];
														}
													}else{
														$user_id=$res['data'][0]->id;
													}

												}else{
													$user_id=$_POST['user_id'];
												}
												
												$bookings['user_id']=$user_id;
												$bookings['tour_id']=$_GET['hotel_id'];
												$bookings['start_date']=date('Y-m-d',strtotime($_POST['start_date']));
												$bookings['end_date']=date('Y-m-d',strtotime($_POST['end_date']));
												$bookings['qty']=$_POST['qty'];

												$start_date=date_create($bookings['start_date']);
												$end_date=date_create($bookings['end_date']);
												$diff=date_diff($start_date,$end_date);
												$total_days=$diff->format("%a");

												$bookings['total_amount']=$d->price * $_POST['qty'];
												$bookings['booking_date']=date('Y-m-d H:i:s');
												
												$bookings['status']=1;
												$bookings['booking_status']=1;
												$bookings['created_at'] = date('Y-m-d H:i:s');
												$bookings['created_by'] = $user_id;

												$res = $mysqli->common_insert('tour_package_booking', $bookings);
												if (!$res['error']) {
													echo "<script>location.href='thanks.php?id=".$res['data']."'</script>";
												} else {
													echo $res['error_msg'];
												}
											}
										?>
									</div>
								</div>
							</div><!--/.row-->
						<?php }}else{?>  

						<?php } ?>  
						

						

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
										

<?php include_once('includes/footer.php'); ?>
