<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->


     <!-- page content -->
<h1>Add Hotel Bookings</h1>
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_content">
        <form method="post" action="" class="form-horizontal form-label-left">
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_id">User ID <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 ">
              <input type="number" id="user_id" name="user_id" required="required" class="form-control">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="hotel_id">Hotel ID <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 ">
              <input type="number" id="hotel_id" name="hotel_id" required="required" class="form-control">
            </div>
          </div>

          <div class="item form-group">
            <label for="check_in_date" class="col-form-label col-md-3 col-sm-3 label-align">Check In Date <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 ">
              <input type="date" id="check_in_date" name="check_in_date" required class="form-control">
            </div>
          </div>

          <div class="item form-group">
            <label for="check_out_date" class="col-form-label col-md-3 col-sm-3 label-align">Check Out Date <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 ">
              <input type="date" id="check_out_date" name="check_out_date" required class="form-control">
            </div>
          </div>

          <div class="item form-group">
            <label for="number_of_room" class="col-form-label col-md-3 col-sm-3 label-align">Number of Rooms <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 ">
              <input type="number" id="number_of_room" name="number_of_room" required class="form-control">
            </div>
          </div>

          <div class="item form-group">
            <label for="total_amount" class="col-form-label col-md-3 col-sm-3 label-align">Total Amount <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 ">
              <input type="number" step="0.01" id="total_amount" name="total_amount" required class="form-control">
            </div>
          </div>

          <div class="item form-group">
            <label for="booking_date" class="col-form-label col-md-3 col-sm-3 label-align">Booking Date <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 ">
              <input type="date" id="booking_date" name="booking_date" required class="form-control" value="<?= date('Y-m-d') ?>">
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
               $_POST['created_at'] = date('Y-m-d H:i:s');
               $_POST['created_by'] = $_SESSION['user']->id;
               $_POST['status'] = 1;
               $res = $mysqli->common_insert('hotel_bookings', $_POST);
               if (!$res['error']) {
                     echo "<script>location.href='" . $baseurl . "hotel_bookings.php'</script>";
               } else {
                     echo $res['error_msg'];
               }
         }
         ?>
      </div>
    </div>
  </div>
</div>

<?php include_once('include/footer.php'); ?>