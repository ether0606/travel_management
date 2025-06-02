<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->

     <!-- page content -->
      <h1>Add ticket_detail </h1>
            <div class="row">
                  <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                              
                              <div class="x_content">
                                    <br />
                                    <form method="post" action="" class="form-horizontal form-label-left">
                                          <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ticket_id">ticket_id <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                      <input type="text" id="ticket_id" name="ticket_id" required="required" class="form-control ">
                                                </div>
                                          </div>
                                          <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="seat_id">seat_id <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                      <input type="text" id="seat_id" name="seat_id" required="required" class="form-control">
                                                </div>
                                          </div>
                                          <div class="item form-group">
                                                <label  class="col-form-label col-md-3 col-sm-3 label-align" for="price" >price</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                      <input id="price" class="form-control" type="text" name="price">
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
                                                $res = $mysqli->common_insert('ticket_detail', $_POST);
                                                if (!$res['error']) {
                                                      echo "<script>location.href='" . $baseurl . "ticket_detail.php'</script>";
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