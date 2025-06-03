<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->


<?php
$where['id']=$_GET['id'];
$schedule = $mysqli->common_select('schedule','*', $where);
if(!$schedule['error']){
$schedule = $schedule['data'][0];
}
?>

     <!-- page content -->
      <h1>Add Schedule</h1>



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
                                                <input type="text" id="" name="" value="<?= $schedule->id ?>" required="required" class="form-control ">
                                          </div>
                                    </div>
                                    <div class="item form-group">
                                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="route_id">Route Id<span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="route_id" name="route_id" value="<?= $schedule->route_id ?>" required="required" class="form-control">
                                          </div>
                                    </div>
 
  <div class="item form-group">
                                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="airline_id">Airline Id<span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="airline_id" name="airline_id" value="<?= $schedule->airline_id ?>" required="required" class="form-control">
                                          </div>
                                    </div>

<div class="item form-group">
                                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="start_time_date">Start Time Date<span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="start_time_date" name="start_time_date" value="<?= $schedule->start_time_date ?>" required="required" class="form-control">
                                          </div>
                                    </div>




<div class="item form-group">
                                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="end_time_date">End Time Date<span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="end_time_date" name="end_time_date" value="<?= $schedule->end_time_date ?>" required="required" class="form-control">
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
                                          $res = $mysqli->common_update('schedule', $_POST,$where);
                                          if (!$res['error']) {
                                                echo "<script>location.href='" . $baseurl . "schedule.php'</script>";
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