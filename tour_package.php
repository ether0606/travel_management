<?php include_once('includes/header.php'); ?>
<?php
					
    $res=$mysqli->common_query("select tour_packages.*, destination.name as destination from tour_packages join destination on tour_packages.destination_id = destination.id where tour_packages.status = 1 and tour_packages.id = '".$_GET['id']."'");
    
    if($res['error']==0){
        $data=$res['data'][0];
    }
?>
<!--about-us start -->
		<section id="home" class="about-us" style="background-image: url(<?= $mysqli->base_url ?>admin/assets/images/tour_packages/<?= $data->image_url ?>);">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
										<?= $data->title ?>
									</h2>
                                    <p style="color:#FFF"><?= $data->description ?></p>
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

                        <option value="turkey">turkey</option><!-- /.option-->

                        <option value="russia">russia</option><!-- /.option-->
                        <option value="egept">egypt</option><!-- /.option-->

                    </select><!-- /.select-->
                </div><!-- /.travel-select-icon -->

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
                        <input type="text" name="check_out" class="form-control" data-toggle="datepicker" placeholder="22 -01 - 2017 ">
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
    </div>

    <div class="row">
         <div class="col-lg-6 p-5"> 
	      <form>
            <h1>Form</h1>
            <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label for="booking date">Booking Date</label>
                    <input type="text" class="form-control" id="booking date">
                </div>
                
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="quantity" class="form-control" id="quantity">
                
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
     </div>
</div>


<?php include_once('includes/footer.php'); ?>
