<?php include_once('include/header.php'); ?>
<?php include_once('include/topbar.php'); ?>

<?php
$where['id'] = $_GET['id'];
$admin = $mysqli->common_select('admin', '*', $where);
if (!$admin['error']) {
    $admin = $admin['data'][0];
}
?>

<h1>Edit Admin</h1>
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_content">
                <form method="post" action="" class="form-horizontal form-label-left">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="full_name" value="<?= $admin->full_name ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?= $admin->email ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" name="contact" value="<?= $admin->contact ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" value="<?= $admin->address ?>" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                </form>

                <?php
                if ($_POST) {
                    $_POST['updated_at'] = date('Y-m-d H:i:s');
                    $_POST['updated_by'] = $_SESSION['user']->id;
                    $res = $mysqli->common_update('admin', $_POST, $where);
                    if (!$res['error']) {
                        echo "<script>location.href='admin.php'</script>";
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