<?php include_once('includes/header.php'); ?>     

		<section id="home" class="about-us" >
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2 class="text-center">Thanks You for booking. we will contact ASP to confirm your booking</h2>
									<div class="about-btn">
										<?php if($_GET['b']=='tour'){ ?>
											<a href="tour_package_invoice.php?id=<?= $_GET['id']?>"  class="about-view">Print Invoice</a>
										<?php }else if($_GET['b']=='hotel'){ ?>
											<a href="hotel_booking_invoice.php?id=<?= $_GET['id']?>"  class="about-view">Print Invoice</a>
										<?php }else{ ?>
											<a href="flight_booking_invoice.php?id=<?= $_GET['id']?>"  class="about-view">Print Invoice</a>	
										<?php } ?>
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

<?php include_once('includes/footer.php'); ?>
