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
		<!--packages start-->
		<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>places to stay</h2>
					<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.  </p>
				</div><!--/.gallery-header-->
				<div class="packages-content">
					<div class="row">
						<?php
							$res = $mysqli->common_query("SELECT airline.*,schedule.route_id,schedule.id as schedule_id FROM `schedule` JOIN route on route.id=schedule.route_id JOIN airline on airline.id=schedule.airline_id where route.from_airport='".$_GET['from_airport']."' and route.to_airport='".$_GET['to_airport']."' and date(schedule.start_time_date) = '".date('Y-m-d',strtotime($_GET['departure_date']))."' and schedule.status=1;");
							
							if ($res['error'] == 0) {
								foreach($res['data'] as $d){
						?>
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="<?= $baseurl ?>admin/assets/images/hotels/<?= $d->image_url ?>" alt="package-place">
								<div class="single-package-item-txt">
									<h3><?= $d->name ?> </h3>
									<div class="packages-para">
										<p><?= $d->contact ?></p>
									</div><!--/.packages-para-->
									<div class="about-btn">
										<a href="flight_book_now.php?schedule_id=<?= $d->id ?>&airline_id=<?= $d->id ?>&route_id=<?= $d->route_id ?>&departure_date=<?= $_GET['departure_date'] ?>&return_date=<?= $_GET['return_date'] ?>" class="about-view packages-btn">book now</a>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						<?php }}else{?>  
								<h3>No Airline found </h3>
						<?php } ?>  
					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->
<?php include_once('includes/footer.php'); ?>
