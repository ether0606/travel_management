<?php include_once('includes/header.php'); ?>     

<!--about-us start -->
		<section id="home" class="about-us" style="background-image: url('<?= $mysqli->base_url ?>assets/images/pexels-asman-chema-91897-594077.jpg');">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>Hotel Reservation Service</h2>
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
					<h2>places to stay</h2>
					<p>Duis aute irure dolor in  velit esse cillum dolore eu fugiat nulla.  </p>
				</div><!--/.gallery-header-->
				<div class="packages-content">
					<div class="row">
						<?php
							$res = $mysqli->common_query("select * from hotels where hotels.status = 1 and hotels.location_id = '" . $_GET['location_id']."'");
								
							if ($res['error'] == 0) {
								foreach($res['data'] as $d){
						?>
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="<?= $baseurl ?>admin/assets/images/hotels/<?= $d->image_url ?>" alt="package-place">
								<div class="single-package-item-txt">
									<h3><?= $d->name ?> </h3>
									<div class="packages-para">
										<p><?= $d->description ?></p>
									</div><!--/.packages-para-->
									<div class="packages-review">
										<p>
											<?php for($i=0; $i<$d->rating; $i++){ ?>
											<i class="fa fa-star"></i>
											<?php } ?>
										</p>
									</div><!--/.packages-review-->
									<div class="about-btn">
										<a href="hotel_book_now.php?hotel_id=<?= $d->id ?>" class="about-view packages-btn">book now</a>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						<?php }}else{?>  
								<h3>No Hotel found under this location </h3>
						<?php } ?>  
					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->

<?php include_once('includes/footer.php'); ?>
