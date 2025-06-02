<?php include_once('include/header.php'); ?>
<?php include_once('include/topbar.php'); ?>

<!-- page content -->
<h1>Add Tour Package</h1>
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_content">
        <br />
        <form method="post" action="" class="form-horizontal form-label-left">
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="title" name="title" required="required" class="form-control ">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description</label>
            <div class="col-md-6 col-sm-6 ">
              <textarea id="description" name="description" class="form-control"></textarea>
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="destination">Destination</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="destination" name="destination" class="form-control">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="duration_day">Duration Day</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="number" id="duration_day" name="duration_day" class="form-control">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="price">Price</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="number" step="0.01" id="price" name="price" class="form-control">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="start_date">Start Date</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="date" id="start_date" name="start_date" class="form-control">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="end_date">End Date</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="date" id="end_date" name="end_date" class="form-control">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="available_slot">Available Slot</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="number" id="available_slot" name="available_slot" class="form-control">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="image_url">Image Url</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="image_url" name="image_url" class="form-control">
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
              <button type="submit" class="btn btn-success">Submit</button>
              <a href="tour_packages.php" class="btn btn-secondary">Cancel</a>
            </div>
          </div>
        </form>

        <?php
        if ($_POST) {
          $_POST['created_at'] = date('Y-m-d H:i:s');
          $_POST['created_by'] = $_SESSION['user']->id;
          $_POST['status'] = 1;
          $res = $mysqli->common_insert('tour_packages', $_POST);
          if (!$res['error']) {
            echo "<script>location.href='tour_packages.php'</script>";
          } else {
            echo "<div class='alert alert-danger'>" . $res['error_msg'] . "</div>";
          }
        }
        ?>
      </div>
    </div>
  </div>
</div>

<?php include_once('include/footer.php'); ?>