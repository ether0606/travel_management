<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->

     <!-- page content -->
      <h1>Add Route</h1>



<div class="row">
                  <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                              
                              <div class="x_content">
                                    <br />
                                    <form method="post" action="" class="form-horizontal form-label-left">
                                          <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="">ID <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                      <input type="text" id="" name="" required="required" class="form-control ">
                                                </div>
                                          </div>
                                          <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="route_type">Route type <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                      <input type="text" id="route_type" name="route_type" required="required" class="form-control">
                                                </div>
                                          </div>
                                           <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="from_airport">From Airport <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                <select id="from_airport" name="from_airport" required="required" class="form-control">
                                                <option value="">Select airport</option>
                                                <?php 
                                                      $airports = $mysqli->common_select("airport", "id, name");
                                                      foreach ($airports['data'] as $airport) : ?>
                                                            <option value="<?= $airport->id ?>"><?= $airport->name ?></option>
                                                <?php endforeach; ?>

                                          </select>
                                    </div>
                                    </div>

                                         
                                          
                                                
                                          <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="to_airport">To Airport <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                <select id="to_airport" name="to_airport" required="required" class="form-control">
                                                <option value="">Select airport</option>
                                                <?php 
                                                      $airports = $mysqli->common_select("airport", "id, name");
                                                      foreach ($airports['data'] as $airport) : ?>
                                                            <option value="<?= $airport->id ?>"><?= $airport->name ?></option>
                                                <?php endforeach; ?>

                                          </select>
                                    </div>
                                    </div>
                              
                                         
                                    <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="trans_area">Trans_area <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                <select id="trans_area" name="trans_area" required="required" class="form-control">
                                                <option value="">Select airport</option>
                                                <?php 
                                                      $airports = $mysqli->common_select("airport", "id, name");
                                                      foreach ($airports['data'] as $airport) : ?>
                                                            <option value="<?= $airport->id ?>"><?= $airport->name ?></option>
                                                <?php endforeach; ?>

                                          </select>
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
                                                $res = $mysqli->common_insert('route', $_POST);
                                                if (!$res['error']) {
                                                      echo "<script>location.href='" . $baseurl . "route.php'</script>";
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