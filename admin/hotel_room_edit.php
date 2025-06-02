<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->



<?php
$where['id']=$_GET['id'];
$hotel_room = $mysqli->common_select('hotel_room','*', $where);
if(!$hotel_room['error']){
$hotel_room = $hotel_room['data'][0];
}
?>


     <!-- page content -->
      <h1>Add Hotel Room</h1>


<div class="row">
            <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                        <div class="x_content">
                              <br />
                              



<form method="post" action="" class="form-horizontal form-label-left">
                                          <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Hotel Room Name <span class="required">*</span>
                                                </label>

                                                <div class="col-md-6 col-sm-6 ">
                                                      <input type="text" id="" name="" value="<?=$hotel_room->name ?>"required="required" class="form-control ">
                                                </div>

                                          </div>
                                          <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="hotel_id">Hotel Id<span class="required">*</span>
                                                </label>

                                                <div class="col-md-6 col-sm-6 ">
                                                      <input type="text" id="hotel_id" name="hotel_id" value="<?=$hotel_id->hotel_id ?>"required="required" class="form-control">
                                                </div>

                                          </div>
                                          <div class="item form-group">
                                                <label for="room_type" class="col-form-label col-md-3 col-sm-3 label-align">Room type</label>

                                                <div class="col-md-6 col-sm-6 ">
                                                      <input id="room_type" class="form-control" type="text" name="room_type" value="<?=$room_type->room_type ?>">
                                                </div>
                                          </div>


                                          
                                          
<div class="item form-group">
                                                <label for="price_per_night" class="col-form-label col-md-3 col-sm-3 label-align">Price per Night</label>

                                                <div class="col-md-6 col-sm-6 ">
                                                      <input id="price_per_night" class="form-control" type="text" name="price_per_night">
                                                </div>
                                          </div>

                                          <div class="item form-group">
                                                <label for="total_room" class="col-form-label col-md-3 col-sm-3 label-align">Total Room</label>

                                                <div class="col-md-6 col-sm-6 ">
                                                      <input id="total_room" class="form-control" type="text" name="total_room">
                                                </div>
                                          </div>


<div class="item form-group">
                                                <label for="available_room" class="col-form-label col-md-3 col-sm-3 label-align">Available Room</label>

                                                <div class="col-md-6 col-sm-6 ">
                                                      <input id="available_room" class="form-control" type="text" name="available_room">
                                                </div>
                                          </div>

                                          <div class="item form-group">
                                                <label for="tv" class="col-form-label col-md-3 col-sm-3 label-align">Tv</label>

                                                <div class="col-md-6 col-sm-6 ">
                                                      <input id="tv" class="form-control" type="text" name="tv">
                                                </div>
                                          </div>




                                          <div class="item form-group">
                                                <label for="ac" class="col-form-label col-md-3 col-sm-3 label-align">AC</label>

                                                <div class="col-md-6 col-sm-6 ">
                                                      <input id="ac" class="form-control" type="text" name="ac">
                                                </div>
                                          </div>


                                         <div class="item form-group">
                                                <label for="fridge" class="col-form-label col-md-3 col-sm-3 label-align">Fridge</label>

                                                <div class="col-md-6 col-sm-6 ">
                                                      <input id="ac" class="form-control" type="text" name="fridge">
                                                </div>
                                          </div>
                                          
                                          
<div class="item form-group">
                                                <label for="" class="col-form-label col-md-3 col-sm-3 label-align">Breakfast</label>

                                                <div class="col-md-6 col-sm-6 ">
                                                      <input id="breakfast" class="form-control" type="text" name="complimentary_breakfast">
                                                </div>
                                          </div>

                                        <div class="item form-group">
                                                <label for="" class="col-form-label col-md-3 col-sm-3 label-align">Guest Number</label>

                                                <div class="col-md-6 col-sm-6 ">
                                                      <input id="guest_number" class="form-control" type="text" name="guest_number">
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
                                          $res = $mysqli->common_update('hotel_room', $_POST,$where);
                                          if (!$res['error']) {
                                                echo "<script>location.href='" . $baseurl . "hotel_room.php'</script>";
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