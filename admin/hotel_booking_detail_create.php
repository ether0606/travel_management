<?php include_once('include/header.php'); ?>
<?php include_once('include/topbar.php'); ?>

<h1>Add Hotel Booking Detail</h1>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_content">
                <form method="post" action="" class="form-horizontal form-label-left" novalidate>
                    <div class="item form-group">
                        <label for="hotel_booking_id" class="col-form-label col-md-3 col-sm-3 label-align">Hotel Booking ID <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" id="hotel_booking_id" name="hotel_booking_id" required="required" class="form-control" />
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="room_id" class="col-form-label col-md-3 col-sm-3 label-align">Room ID <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" id="room_id" name="room_id" required="required" class="form-control" />
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="fare" class="col-form-label col-md-3 col-sm-3 label-align">Fare <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" step="0.01" id="fare" name="fare" required="required" class="form-control" />
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

                    $res = $mysqli->common_insert('hotel_booking_detail', $_POST);
                    if (!$res['error']) {
                        echo "<script>location.href='hotel_booking_detail.php'</script>";
                    } else {
                        echo "<div class='alert alert-danger'>" . htmlspecialchars($res['error_msg']) . "</div>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include_once('include/footer.php'); ?>