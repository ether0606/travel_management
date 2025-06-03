<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->
<?php
if (!isset($_GET['id'])) {
    echo "ID is missing";
    exit;
}

$where['id'] = $_GET['id'];
$res = $mysqli->common_select('hotel_booking_detail', '*', $where);

if ($res['error'] || count($res['data']) == 0) {
    echo "Record not found";
    exit;
}

$detail = $res['data'][0];
?>

<h1>Edit Hotel Booking Detail</h1>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_content">
                <form method="post" class="form-horizontal form-label-left" novalidate>
                    <div class="item form-group">
                        <label for="hotel_booking_id" class="col-form-label col-md-3 col-sm-3 label-align">Hotel Booking ID</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" id="hotel_booking_id" name="hotel_booking_id" required="required" class="form-control" value="<?= htmlspecialchars($detail->hotel_booking_id) ?>" />
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="room_id" class="col-form-label col-md-3 col-sm-3 label-align">Room ID</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" id="room_id" name="room_id" required="required" class="form-control" value="<?= htmlspecialchars($detail->room_id) ?>" />
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="fare" class="col-form-label col-md-3 col-sm-3 label-align">Fare</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" step="0.01" id="fare" name="fare" required="required" class="form-control" value="<?= htmlspecialchars($detail->fare) ?>" />
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="status" class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
                        <div class="col-md-6 col-sm-6 ">
                            <select id="status" name="status" class="form-control" required>
                                <option value="1" <?= $detail->status == 1 ? 'selected' : '' ?>>Active</option>
                                <option value="0" <?= $detail->status == 0 ? 'selected' : '' ?>>Inactive</option>
                            </select>
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
                    $_POST['updated_at'] = date('Y-m-d H:i:s');
                    $_POST['updated_by'] = $_SESSION['user']->id;

                    $res = $mysqli->common_update('hotel_booking_detail', $_POST, $where);
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