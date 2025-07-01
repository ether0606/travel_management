<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->

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
                                                      <input type="text" id="name" name="name" required="required" class="form-control ">
                                                </div>
                                          </div>
                                          <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="contact">Contact <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                      <input type="text" id="contact" name="contact" required="required" class="form-control">
                                                </div>
                                          </div>
                                          <div class="item form-group">
                                                <label for="address" class="col-form-label col-md-3 col-sm-3 label-align">Address</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                      <input id="address" class="form-control" type="text" name="address">
                                                </div>
                                          </div>
                                          <div class="form-group row">
                                                <label class="col-md-3 col-form-label">Image URL</label>
                                                <div class="col-md-6 col-sm-6 " >
                                                      <input type="file" name="image_url" class="form-control">
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
                                                if($_FILES['image_url']['name']) {
                                                      $image_url = $mysqli->upload_file($_FILES['image_url'], 'airline');
                                                      $_POST['image_url'] = $image_url['file_name'];
                                                }
                                                $_POST['created_at'] = date('Y-m-d H:i:s');
                                                $_POST['created_by'] = $_SESSION['user']->id;
                                                $_POST['status'] = 1;
                                                $res = $mysqli->common_insert('airline', $_POST);
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