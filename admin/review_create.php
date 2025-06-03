<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->

     <!-- page content -->
      <h1>Add Review</h1>

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
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_id">User Id <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                      <input type="text" id="user_id" name="user_id" required="required" class="form-control">
                                                </div>
                                          </div>

<div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="tour_id">Tour Id<span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                      <input type="text" id="tour_id" name="tour_id" required="required" class="form-control">
                                                </div>
                                          </div>


  <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="rating">Rating <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                      <input type="text" id="rating" name="rating" required="required" class="form-control">
                                                </div>
                                          </div>                                        


<div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="comment">Comment<span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                      <input type="text" id="comment" name="comment" required="required" class="form-control">
                                                </div>
                                          </div>


  <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="review_date">Review Date<span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                      <input type="text" id="review_date" name="review_date" required="required" class="form-control">
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
                                                $res = $mysqli->common_insert('review', $_POST);
                                                if (!$res['error']) {
                                                      echo "<script>location.href='" . $baseurl . "review.php'</script>";
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