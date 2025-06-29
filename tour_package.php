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


  <form action="" method="post">
        <div class="container mt-5" id="book_form">
            <div class="row" style="margin-top: 100px;">
                <div class="col-lg-4 col-md-4 col-sm-12 mt-5">
                    <input type="hidden" name="user_id" id="">
                    <div class="single-tab-select-box">
                        <h2>Name</h2>
                        <div class="travel-text-icon">
                            <input type="text" name="full_name" class="form-control" placeholder="enter your name">
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
                        <h2>Contact</h2>
                        <div class="travel-text-icon travel-password-icon">
                            <input type="text" name="contact" class="form-control"  placeholder="enter your Email address">
                        </div><!-- /.travel-check-icon -->
                    </div><!--/.single-tab-select-box-->
                </div>
               
                <div class="col-lg-2 col-md-1 col-sm-4">
                    <div class="single-tab-select-box">
                        <h2>quantity</h2>
                        <div class="travel-select-icon">
                            <select name="qty" class="form-control" onchange="total_p(this.value)">
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
                        <div class="total_price">
                            <?= $data->price ?>
                        </div>
                        <input type="hidden" name="total_amount" id="total_price" value="<?= $data->price ?>">
                        <!-- /.travel-select-icon -->
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

    <?php
        if ($_POST) {
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
            /* `user_id`, `tour_id`, `booking_date`, `qty`, `discount`, `total_amount`, `status` */
            $bookings['user_id']=$user_id;
            $bookings['tour_id']=$_GET['id'];
            $bookings['booking_date']=date('Y-m-d');
            $bookings['qty']=$_POST['qty'];
            $bookings['total_amount']=$_POST['total_amount'];
            $bookings['status']=1;
            $bookings['booking_status']=1;
            $bookings['created_at'] = date('Y-m-d H:i:s');
            $bookings['created_by'] = $user_id;

            $res = $mysqli->common_insert('tour_package_booking', $bookings);
            if (!$res['error']) {
                echo "<script>location.href='thanks.php?b=tour&id=".$res['data']."'</script>";
            } else {
                echo $res['error_msg'];
            }
        }
    ?>

<?php include_once('includes/footer.php'); ?>

<script>
    function total_p(qty){
        
        var price = parseInt(<?= $data->price ?>);
        var total = qty * price;
        $('.total_price').text(total);
        $('#total_price').val(total);
    }
</script>
