<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->
 
<!-- page content -->
<h1>Add Destination</h1>
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_content">
        <br />
        <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="name" name="name" required class="form-control">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="country">Country <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="country" name="country" required class="form-control">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description</label>
            <div class="col-md-6 col-sm-6 ">
              <textarea id="description" name="description" class="form-control"></textarea>
            </div>
          </div>

          <div class="item form-group">
            <label for="image_url" class="col-form-label col-md-3 col-sm-3 label-align">Image</label>
            <div class="col-md-6 col-sm-6 ">
              <input type="file" id="image_url" name="image_url" accept="image/*" class="form-control">
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
          // Handle image upload
          $imagePath = null;
          if (isset($_FILES['image_url']) && $_FILES['image_url']['error'] == UPLOAD_ERR_OK) {
            $uploadDir = 'uploads/destinations/';
            if (!is_dir($uploadDir)) {
              mkdir($uploadDir, 0755, true);
            }
            $filename = time() . '_' . basename($_FILES['image_url']['name']);
            $targetFile = $uploadDir . $filename;
            if (move_uploaded_file($_FILES['image_url']['tmp_name'], $targetFile)) {
              $imagePath = $targetFile;
            } else {
              echo "<div class='alert alert-danger'>Failed to upload image.</div>";
            }
          }

          $_POST['image_url'] = $imagePath;
          $_POST['created_at'] = date('Y-m-d H:i:s');
          $_POST['created_by'] = $_SESSION['user']->id;
          $_POST['status'] = 1;

          $res = $mysqli->common_insert('destination', $_POST);
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