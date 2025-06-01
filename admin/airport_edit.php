<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->
<?php
$where['id'] = $_GET['id'];
$airport = $mysqli->common_select('airport', '*', $where);
if (!$airport['error']) {
  $airport = $airport['data'][0];
}
?>
<!-- page content -->
<h1>Edit Airport</h1>
<div class="row">
  <div class="col-md-12">
    <div class="x_panel">
      <div class="x_content">
        <form method="post" class="form-horizontal form-label-left">
          <div class="item form-group">
            <label class="col-form-label col-md-3 label-align">Airport Name</label>
            <div class="col-md-6">
              <input type="text" name="name" value="<?= $airport->name ?>" required class="form-control">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 label-align">Contact</label>
            <div class="col-md-6">
              <input type="text" name="contact" value="<?= $airport->contact ?>" required class="form-control">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 label-align">Address</label>
            <div class="col-md-6">
              <input type="text" name="address" value="<?= $airport->address ?>" class="form-control">
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
            $_POST['updated_at'] = date('Y-m-d H:i:s');
            $_POST['updated_by'] = $_SESSION['user']->id;
            $_POST['status'] = 1;
            $res = $mysqli->common_update('airport', $_POST, $where);
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