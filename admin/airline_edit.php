<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->
<?php
$where['id']=$_GET['id'];
$airline = $mysqli->common_select('airline','*', $where);
if(!$airline['error']){
$airline = $airline['data'][0];
}
?>
     <!-- page content -->
      <h1>Add Airline </h1>
      <div class="row">
            <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                        <div class="x_content">
                              <br />
                              <form method="post" action="" class="form-horizontal form-label-left">
                                    <div class="item form-group">
                                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Airline Name <span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="name" name="name" value="<?= $airline->name ?>" required="required" class="form-control ">
                                          </div>
                                    </div>
                                    <div class="item form-group">
                                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="contact">Contact <span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="contact" name="contact" value="<?= $airline->contact ?>" required="required" class="form-control">
                                          </div>
                                    </div>
                                    <div class="item form-group">
                                          <label for="address" class="col-form-label col-md-3 col-sm-3 label-align">Address</label>
                                          <div class="col-md-6 col-sm-6 ">
                                                <input id="address" class="form-control" value="<?= $airline->address ?>" type="text" name="address">
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
                                          $res = $mysqli->common_update('airline', $_POST,$where);
                                          if (!$res['error']) {
                                                echo "<script>location.href='" . $baseurl . "airline.php'</script>";
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