
<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->
<?php
$where['id'] = $_GET['id'];

if (!$where['id']) {
  echo "Invalid ID";
  exit;
}

$res = $mysqli->common_select('tour_packages', '*', $where);
if ($res['error'] || !count($res['data'])) {
  echo "Tour Package not found";
  exit;
}
$tour_package = $res['data'][0];
?>

<!-- page content -->
<h1>Edit Tour Package</h1>
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_content">
        <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="title" name="title" required="required" class="form-control" value="<?= htmlspecialchars($tour_package->title) ?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description</label>
            <div class="col-md-6 col-sm-6 ">
              <textarea id="description" name="description" class="form-control"><?= $tour_package->description ?></textarea>
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="destination_id">Destination <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 ">
              <select id="destination_id" name="destination_id" required="required" class="form-control">
                <option value="">Select Destination</option>
                <?php
                  $destinations = $mysqli->common_select('destination');
                  foreach ($destinations['data'] as $destination) {
                ?>
                  <option value='<?= $destination->id ?>' <?= $destination->id==$tour_package->destination_id ?"selected":"" ?> ><?= $destination->name ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="duration_day">Duration Day</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="number" id="duration_day" name="duration_day" class="form-control" value="<?= htmlspecialchars($tour_package->duration_day) ?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="price">Price</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="number" step="0.01" id="price" name="price" class="form-control" value="<?= htmlspecialchars($tour_package->price) ?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="start_date">Start Date</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="datetime-local" id="start_date" name="start_date" class="form-control" value="<?= htmlspecialchars($tour_package->start_date) ?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="end_date">End Date</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="datetime-local" id="end_date" name="end_date" class="form-control" value="<?= $tour_package->end_date ?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="available_slot">Available Slot</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="number" id="available_slot" name="available_slot" class="form-control" value="<?= htmlspecialchars($tour_package->available_slot) ?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="image_url">Image URL</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="file" id="image_url" name="image_url" class="form-control">
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
          if($_FILES['image_url']['name']) {
            $image_url = $mysqli->upload_file($_FILES['image_url'], 'tour_packages');
            $_POST['image_url'] = $image_url['file_name'];
          }
          
          $_POST['updated_at'] = date('Y-m-d H:i:s');
          $_POST['updated_by'] = $_SESSION['user']->id;
          $_POST['status'] = 1;
          $res = $mysqli->common_update('tour_packages', $_POST, $where);
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