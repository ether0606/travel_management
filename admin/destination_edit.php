<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>

<?php
$where['id'] = $_GET['id'];
$res = $mysqli->common_select('destination', '*', $where);
if (!$res['error']) {
  $destination = $res['data'][0];
} else {
  echo "Destination not found.";
  exit;
}
?>

<!-- page content -->
<h1>Edit Destination</h1>
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_content">
        <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="name" name="name" required class="form-control" value="<?= htmlspecialchars($destination->name) ?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="country">Country <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="country" name="country" required class="form-control" value="<?= htmlspecialchars($destination->country) ?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description</label>
            <div class="col-md-6 col-sm-6 ">
              <textarea id="description" name="description" class="form-control"><?= htmlspecialchars($destination->description) ?></textarea>
            </div>
          </div>

          <div class="item form-group">
            <label for="image_url" class="col-form-label col-md-3 col-sm-3 label-align">Image</label>
            <div class="col-md-6 col-sm-6 ">
              <?php if ($destination->image_url) : ?>
                <img src="<?= htmlspecialchars($destination->image_url) ?>" alt="Current Image" style="max-width: 150px; display:block; margin-bottom:10px;">
              <?php endif; ?>
              <input type="file" id="image_url" name="image_url" accept="image/*" class="form-control">
              <small>Leave blank to keep existing image.</small>
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
          // Handle image upload if a new image is selected
          if (isset($_FILES['image_url']) && $_FILES['image_url']['error'] == UPLOAD_ERR_OK) {
            $uploadDir = 'uploads/destinations/';
            if (!is_dir($uploadDir)) {
              mkdir($uploadDir, 0755, true);
            }
            $filename = time() . '_' . basename($_FILES['image_url']['name']);
            $targetFile = $uploadDir . $filename;
            if (move_uploaded_file($_FILES['image_url']['tmp_name'], $targetFile)) {
              $_POST['image_url'] = $targetFile;
            } else {
              echo "<div class='alert alert-danger'>Failed to upload image.</div>";
            }
          } else {
            // keep existing image if no new upload
            $_POST['image_url'] = $destination->image_url;
          }

          $_POST['updated_at'] = date('Y-m-d H:i:s');
          $_POST['updated_by'] = $_SESSION['user']->id;
          $_POST['status'] = 1;

          $res = $mysqli->common_update('destination', $_POST, $where);
          if (!$res['error']) {
            echo "<script>location.href='destination.php'</script>";
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