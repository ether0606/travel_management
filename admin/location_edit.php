<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->


<?php
$where['id']=$_GET['id'];
$location = $mysqli->common_select('location','*', $where);
if(!$location['error']){
$location = $location['data'][0];
}
?>

     <!-- page content -->
      <h1>Add Location</h1>


  <div class="row">
            <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                        <div class="x_content">
                              <br />
                              <form method="post" action="" class="form-horizontal form-label-left">
                                    <div class="item form-group">
                                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="">ID<span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="" name="" value="<?= $location->id ?>" required="required" class="form-control ">
                                          </div>
                                    </div>
                                    <div class="item form-group">
                                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name<span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="name" name="name" value="<?= $location->name ?>" required="required" class="form-control">
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
                                          $res = $mysqli->common_update('location', $_POST,$where);
                                          if (!$res['error']) {
                                                echo "<script>location.href='" . $baseurl . "location.php'</script>";
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