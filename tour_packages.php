<?php include_once('includes/header.php'); ?>

<!--about-us start -->
		<section id="home" class="about-us" style="background-image: url('<?= $mysqli->base_url ?>assets/images/10-best-marriotts-in-the-caribbean-1038x503.jpg..webp');">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
                                    
									<h2>
									Discover Your Next Journey
									</h2>
                                    <p style="color:#FFF"></p>
									<div class="about-btn">
										<a href="#book_form"  class="about-view">Explore packages</a>
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
                <h2>Name</h2>
                <div class="travel-check-icon">
                    <form action="#">
                        <input type="text" name="name" class="form-control" placeholder="enter your name">
                    </form>
                </div><!-- /.travel-check-icon -->
            </div><!--/.single-tab-select-box-->
        </div>     

    <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="single-tab-select-box">
                <h2>Email</h2>
                <div class="travel-check-icon">
                    <form action="#">
                        <input type="text" name="email" class="form-control"  placeholder="enter your Email address">
                    </form>
                </div><!-- /.travel-check-icon -->
            </div><!--/.single-tab-select-box-->
        </div>
         <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="single-tab-select-box">
                <h2>password</h2>
                <div class="travel-check-icon">
                    <form action="#">
                        <input type="text" name="email" class="form-control"  placeholder="">
                    </form>
                </div><!-- /.travel-check-icon -->
            </div><!--/.single-tab-select-box-->
        </div>
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
        <div class="col-lg-2 col-md-1 col-sm-4">
            <div class="single-tab-select-box">
                <h2>quantity</h2>
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

    <div class="row">
         <div class="col-lg-6 p-5"> 
	      <form>
            
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
     </div>
</div>


<?php include_once('includes/footer.php'); ?>
