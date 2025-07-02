<?php include_once('include/header.php'); ?>
<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->

<?php
$where['id'] = $_GET['id'];
$airlines_res = $mysqli->common_select('airline', '*', $where);
if (!$airlines_res['error'] && count($airlines_res['data']) > 0) {
    $airlines = $airlines_res['data'][0];
} else {
    echo "airline not found !";
    exit;
}
?>

<!-- page content -->
<h1>Edit Airlines</h1>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_content">
                <br />
                <form method="post" action="" enctype="multipart/form-data"  class="form-horizontal form-label-left">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Name <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="name" name="name" required="required" class="form-control" value="<?= htmlspecialchars($airlines->name) ?>">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Address</label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea id="description" name="address" class="form-control"><?= htmlspecialchars($airlines->address) ?></textarea>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="destination">Contact</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="destination" name="contact" class="form-control" value="<?= htmlspecialchars($airlines->contact) ?>">
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
                             <a href="airline.php" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>

                <?php
            
        
                    if ($_POST) {
                     if($_FILES['image_url']['name']) {
                        $image_url = $mysqli->upload_file($_FILES['image_url'], 'airline');
                        $_POST['image_url'] = $image_url['file_name'];
                    }
                
                    $_POST['updated_at'] = date('Y-m-d H:i:s');
                    $_POST['updated_by'] = $_SESSION['user']->id;
                    $_POST['status'] = 1;

                    $res = $mysqli->common_update('airline', $_POST, $where);
                    if (!$res['error']) {
                        echo "<script>location.href='" . $baseurl . "airline.php'</script>";
                    } else {
                        echo "<div class='alert alert-danger'>" . htmlspecialchars($res['error_msg']) . "</div>";
                    }
                }
                ?>

            </div>
        </div>
    </div>
</div>

<?php include_once('include/footer.php'); ?>