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
						<div class="col-sm-6">
							<div class="single-about-us " style="padding-top: 20px;color:#FFF">
								<table class="table table-bordered">
                                    <tr>
                                        <td>Journey Start</td>
                                        <td><?= $data->start_date ?></td>
                                    </tr>
                                    <tr>
                                        <td>Journey finish</td>
                                        <td><?= $data->end_date ?></td>
                                    </tr>
                                    <tr>
                                        <td>Duration Day</td>
                                        <td><?= $data->duration_day ?></td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td><?= $data->price ?></td>
                                    </tr>

                                </table>
							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section><!--/.about-us-->
		<!--about-us end -->

<div class="container mt-6" id="book_form">
    <div class="row" style="margin-top: 100px;">
        
         <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="single-tab-select-box">
                <h2>name</h2>
                <div class="travel-check-icon">
                    <form action="#"> 
                        <input type="text" name="name" id ="name" class="form-control"  placeholder="enter your name">
                    </form>
                </div><!-- /.travel-check-icon -->
            </div><!--/.single-tab-select-box-->
        </div><!--/.col-->


         <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="single-tab-select-box">
                <h2>Email</h2>
                <div class="travel-check-icon">
                    <form action="#">
                        <input type="email" name="email" id="email" class="form-control" data-toggle="" placeholder="enter your email">
                    </form>
                </div><!-- /.travel-check-icon -->
            </div><!--/.single-tab-select-box-->
        </div><!--/.col-->

         <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="single-tab-select-box">
                <h2>Passowrd</h2>
                <div class="travel-check-icon">
                    <form action="#">
                        <input type="password" name="password" id="password" class="form-control"  placeholder="XXXXXXXX">
                    </form>
                </div><!-- /.travel-check-icon -->
            </div><!--/.single-tab-select-box-->
        </div><!--/.col-->

        <div class="col-lg-2 col-md-3 col-sm-4">
            <div class="single-tab-select-box">
                <h2>booking_date</h2>
                <div class="travel-check-icon">
                    <form action="#">
                        <input type="text" name="booking_date" id="booking date" class="form-control" data-toggle="datepicker" placeholder="00 -00 - 0000 ">
                    </form>
                </div><!-- /.travel-check-icon -->
            </div><!--/.single-tab-select-box-->
        </div><!--/.col-->

        <div class="col-lg-2 col-md-1 col-sm-4">
            <div class="single-tab-select-box">
                <h2>Quantity</h2>
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
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    

    


<?php include_once('includes/footer.php'); ?>







    <form action="" method="post">
        <div class="container mt-5" id="book_form">
            <div class="row" style="margin-top: 100px;">
                <div class="col-lg-4 col-md-4 col-sm-12 mt-5">
                    <div class="single-tab-select-box">
                        <h2>Name</h2>
                        <div class="travel-text-icon">
                            <input type="text" name="name" class="form-control" placeholder="enter your name">
                        </div><!-- /.travel-text-icon -->
                    </div><!--/.single-tab-text-box-->
                </div>     

                <div class="col-lg-4 col-md-3 col-sm-4">
                    <div class="single-tab-select-box">
                        <h2>Email</h2>
                        <div class="travel-text-icon travel-envelope-icon">
                            <input type="text" name="email" class="form-control"  placeholder="enter your Email address">
                        </div><!-- /.travel-check-icon -->
                    </div><!--/.single-tab-select-box-->
                </div>
                <div class="col-lg-4 col-md-3 col-sm-4">
                    <div class="single-tab-select-box">
                        <h2>Password</h2>
                        <div class="travel-text-icon travel-password-icon">
                            <input type="text" name="password" class="form-control"  placeholder="enter your Email address">
                        </div><!-- /.travel-check-icon -->
                    </div><!--/.single-tab-select-box-->
                </div>
               
                <div class="col-lg-2 col-md-1 col-sm-4">
                    <div class="single-tab-select-box">
                        <h2>quantity</h2>
                        <div class="travel-select-icon">
                            <select class="form-control" onchange="total_price(this.value)">
                                <option value="1">1</option><!-- /.option-->
                                <option value="2">2</option><!-- /.option-->
                                <option value="4">4</option><!-- /.option-->
                                <option value="8">8</option><!-- /.option-->
                            </select><!-- /.select-->
                        </div><!-- /.travel-select-icon -->
                    </div><!--/.single-tab-select-box-->
                </div><!--/.col-->
                <div class="col-lg-2 col-md-1 col-sm-4">
                    <div class="single-tab-select-box">
                        <h2>Total</h2>
                        <div class="total-price">
                            <?= $data->price ?>
                        </div><!-- /.travel-select-icon -->
                    </div><!--/.single-tab-select-box-->
                </div><!--/.col-->
            </div>

            <div class="row">
                <div class="col-lg-6 p-5"> 
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>

<?php include_once('includes/footer.php'); ?>

<script>
    function total_price(qty){
        var price = <?= $data->price ?>;
        var total = qty * price;
        document.getElementsByClassName('total-price')[0].innerHTML = total
    }
</script>
 master
