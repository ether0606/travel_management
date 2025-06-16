<?php include_once('includes/header.php'); ?>

<!--about-us start -->
		<section id="home" class="about-us" style="background-image: url('<?= $mysqli->base_url ?>assets/images/pexels-asman-chema-91897-594077.jpg');">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
                                    
									<h2>
									Hotel Bookings
									</h2>
                                    <p style="color:#FFF">Hotel</p>
									<div class="about-btn">
										<a href="#book_form"  class="about-view">Book Now</a>
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


<div class="container mt-5" id="book_form">
    <div class="row" style="margin-top: 100px;">
        <div class="col-lg-4 col-md-4 col-sm-12 mt-5">
            <div class="single-tab-select-box">

                <h2>destination</h2>

                <div class="travel-select-icon">
                    <select class="form-control ">

                        <option value="default">enter your destination country</option><!-- /.option-->

                        <option value="bangladesh">Bangladesh</option><!-- /.option-->

                        <option value="bangladesh">Bangladesh</option><!-- /.option-->
                        <option value="bangladesh">Bangladesh</option><!-- /.option-->

                    </select><!-- /.select-->
                </div><!-- /.travel-select-icon -->

                <div class="travel-select-icon">
                    <select class="form-control ">

                        <option value="default">enter your destination location</option><!-- /.option-->

                        <option value="dhaka">Dhaka</option><!-- /.option-->

                        <option value="chattogram">Chattogram</option><!-- /.option-->
                        <option value="coxbazar">Cox's Bazar</option><!-- /.option-->

                    </select><!-- /.select-->
                        </div><!-- /.travel-select-icon -->

                    </div><!--/.single-tab-select-box-->
                </div><!--/.col-->



    <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="single-tab-select-box">
                <h2>booking date</h2>
                <div class="travel-check-icon">
                    <form action="#">
                        <input type="text" name="booking_date" class="form-control" data-toggle="datepicker" placeholder="12 -01 - 2017 ">
                    </form>
                </div><!-- /.travel-check-icon -->
            </div><!--/.single-tab-select-box-->
    </div>




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

        <div class="col-lg-2 col-md-3 col-sm-1">
            <div class="single-tab-select-box">
                <h2>check out</h2>
                <div class="travel-check-icon">
                    <form action="#">
                        <input type="text" name="check_out" class="form-control" data-toggle="datepicker" placeholder="22 -01 - 2017 ">
                    </form>
                </div><!-- /.travel-check-icon -->
            </div><!--/.single-tab-select-box-->
        </div><!--/.col-->

        <div class="col-lg-2 col-md-1 col-sm-4">
            
                <h2>total amount</h2>
                
               
                    <input type="text" name="total_amount">
                    
                <!-- /.travel-select-icon -->
            <!--/.single-tab-select-box-->
        </div><!--/.col-->

        <div class="col-lg-2 col-md-1 col-sm-4">
            <div class="single-tab-select-box">
                <h2>Number of Room</h2>
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
    </div>


<div class="col-lg-2 col-md-1 col-sm-4">
            
                <h2>user id</h2>
               
                    <input type="text" name="user_id">
                    
                <!-- /.travel-select-icon -->
            <!--/.single-tab-select-box-->
</div>



<div class="col-lg-2 col-md-1 col-sm-4">
            
                <h2>hotel id</h2>
               
                    <input type="text" name="hotel_id">
                    
                <!-- /.travel-select-icon -->
            <!--/.single-tab-select-box-->
        </div><br><br><br><br>




    <div class="row">
         <div class="col-lg-6 p-5"> 
	      
           <form> 
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
     </div>
</div>


<?php include_once('includes/footer.php'); ?>
