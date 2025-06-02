<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->
 
<?php
$where['id'] = $_GET['id'];
$res = $mysqli->common_select('hotel_bookings', '*', $where);
if (!$res['error']) {
  $booking = $res['data'][0];
} else {
  echo $res['error_msg'];
  exit;
}
?>
 <!-- page content -->
<h1>Edit Hotel Bookings</h1>
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_content">
        <form method="post" class="form-horizontal form-label-left">
          <div class="item form-group">
            <label for="user_id" class="col-form-label col-md-3 col-sm-3 label-align">User ID</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="number" name="user_id" required class="form-control" value="<?= $booking->user_id ?>">
            </div>
          </div>

          <div class="item form-group">
            <label for="hotel_id" class="col-form-label col-md-3 col-sm-3 label-align">Hotel ID</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="number" name="hotel_id" required class="form-control" value="<?= $booking->hotel_id ?>">
            </div>
          </div>

          <div class="item form-group">
            <label for="check_in_date" class="col-form-label col-md-3 col-sm-3 label-align">Check In Date</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="date" name="check_in_date" required class="form-control" value="<?= $booking->check_in_date ?>">
            </div>
          </div>

          <div class="item form-group">
            <label for="check_out_date" class="col-form-label col-md-3 col-sm-3 label-align">Check Out Date</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="date" name="check_out_date" required class="form-control" value="<?= $booking->check_out_date ?>">
            </div>
          </div>

          <div class="item form-group">
            <label for="number_of_room" class="col-form-label col-md-3 col-sm-3 label-align">Number of Rooms</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="number" name="number_of_room" required class="form-control" value="<?= $booking->number_of_room ?>">
            </div>
          </div>

          <div class="item form-group">
            <label for="total_amount" class="col-form-label col-md-3 col-sm-3 label-align">Total Amount</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="number" step="0.01" name="total_amount" required class="form-control" value="<?= $booking->total_amount ?>">
            </div>
          </div>

          <div class="item form-group">
            <label for="booking_date" class="col-form-label col-md-3 col-sm-3 label-align">Booking Date</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="date" name="booking_date" required class="form-control" value="<?= $booking->booking_date ?>">
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </div>
        </form>

        <?php
        if ($_POST) {
          $res = $mysqli->common_update('hotel_bookings', $_POST, $where);
          if (!$res['error']) {
            echo "<script>location.href='hotel_bookings.php'</script>";
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