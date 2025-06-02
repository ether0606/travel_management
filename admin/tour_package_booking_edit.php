<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->
<?php
$where['id']=$_GET['id'];
$tour_package_booking = $mysqli->common_select('tour_package_booking','*', $where);
if(!$tour_package_booking['error']){
$tour_package_booking = $tour_package_booking['data'][0];
}
?>
     <!-- page content -->
      <h1>Add tour_package_booking </h1>
      <div class="row">
            <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                        <div class="x_content">
                              <br />
                              <form method="post" action="" class="form-horizontal form-label-left">
                                    <div class="item form-group">
                                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_id">user_id <span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="user_id" name="user_id" value="<?= $tour_package_booking->user_id ?>" required="required" class="form-control ">
                                          </div>
                                    </div>
                                    <div class="item form-group">
                                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="tour_id">tour_id <span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="tour_id" name="tour_id" value="<?= $tour_package_booking->tour_id ?>" required="required" class="form-control">
                                          </div>
                                    </div>
                                    <div class="item form-group">
                                          <label for="booking_date" class="col-form-label col-md-3 col-sm-3 label-align">booking_date</label>
                                          <div class="col-md-6 col-sm-6 ">
                                                <input id="booking_date" class="form-control" value="<?= $tour_package_booking->booking_date ?>" type="text" name="booking_date">
                                          </div>
                                    </div>
                                     <div class="item form-group">
                                          <label for="qty" class="col-form-label col-md-3 col-sm-3 label-align">qty</label>
                                          <div class="col-md-6 col-sm-6 ">
                                                <input id="qty" class="form-control" value="<?= $tour_package_booking->address ?>" type="text" name="qty">
                                          </div>
                                    </div>
                                     <div class="item form-group">
                                          <label for="discount" class="col-form-label col-md-3 col-sm-3 label-align">discount</label>
                                          <div class="col-md-6 col-sm-6 ">
                                                <input id="discount" class="form-control" value="<?= $tour_package_booking->address ?>" type="text" name="discount">
                                          </div>
                                    </div>
                                     <div class="item form-group">
                                          <label for="total_amount" class="col-form-label col-md-3 col-sm-3 label-align">total_amount</label>
                                          <div class="col-md-6 col-sm-6 ">
                                                <input id="total_amount" class="form-control" value="<?= $tour_package_booking->total_amount ?>" type="text" name="total_amount">
                                          </div>
                                    </div>
                                    
                                    
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                          <div class="col-md-6 col-sm-6 offset-md-3">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                          </div>
                                    </div>
                              </form>
                              <?php

                                    if ($_POST) {
                                          $_POST['updated_at'] = date('Y-m-d H:i:s');
                                          $_POST['updated_by'] = $_SESSION['user']->id;
                                          $_POST['status'] = 1;
                                          $res = $mysqli->common_update('tour_package_booking', $_POST,$where);
                                          if (!$res['error']) {
                                                echo "<script>location.href='" . $baseurl . "tour_package_booking.php'</script>";
                                          } else {
                                                echo $res['error_msg'];
                                          }
                                    }
                                    ?>
                        </div>
                  </div>
            </div>
      </div>
      
<?php include_once('include/footer.php');?>