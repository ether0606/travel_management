<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->

       <!-- page content -->
         <h1>Add Seat</h1>
            <div class="row">
                  <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">

                              <div class="x_content">
                                    </br>
                                    <form method="post" action="" class="form-horizontal form-label-left">
                                    <div class="form-group row">
                                    <label class="col-md-3">Seat</label>
                                    <div class="col-md-6">
                                    <select name="airline_id" class="form-control" required>
                                    <option value="">Select airline</option>
                                    <?php
                                    $airlines = $mysqli->common_select('airline');
                                     if (!$airlines['error']) {
                                    foreach ($airlines['data'] as $a) {
                                        echo "<option value='$a->id'>$a->name</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Seat Type</label>
                        <div class="col-md-6">
                            <input type="text" name="seat_type" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Seat Number</label>
                        <div class="col-md-6">
                            <input type="number" name="seat_number" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Row</label>
                        <div class="col-md-6">
                            <input type="number" name="seat_row" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Column</label>
                        <div class="col-md-6">
                            <input type="number" name="seat_column" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>

                <?php
                if ($_POST) {
                    $_POST['status'] = 1;
                    $_POST['created_at'] = date('Y-m-d H:i:s');
                    $_POST['created_by'] = $_SESSION['user']->id;
                    $res = $mysqli->common_insert('seat', $_POST);
                    if (!$res['error']) {
                        echo "<script>location.href='seat.php'</script>";
                    } else {
                        echo $res['error_msg'];
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>