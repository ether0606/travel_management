<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<h1>Add Airport</h1>
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_content">
        <form method="post" action="" class="form-horizontal form-label-left">
          <div class="item form-group">
            <label class="col-form-label col-md-3 label-align" for="name">Airport Name <span class="required">*</span></label>
            <div class="col-md-6">
              <input type="text" name="name" required class="form-control">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 label-align" for="contact">Contact <span class="required">*</span></label>
            <div class="col-md-6">
              <input type="text" name="contact" required class="form-control">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 label-align">Address</label>
            <div class="col-md-6">
              <input type="text" name="address" class="form-control">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 offset-md-3">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
        <?php
          if ($_POST) {
            $_POST['created_at'] = date('Y-m-d H:i:s');
            $_POST['created_by'] = $_SESSION['user']->id;
            $_POST['status'] = 1;
            $res = $mysqli->common_insert('airport', $_POST);
            if (!$res['error']) {
              echo "<script>location.href='airport.php'</script>";
            } else {
              echo $res['error_msg'];
            }
          }
        ?>
      </div>
    </div>
  </div>
</div>
<?php include_once('include/footer.php'); ?>