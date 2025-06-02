<?php include_once('include/header.php'); ?>
<?php include_once('include/topbar.php'); ?>

<?php
$where['id'] = $_GET['id'];
$user = $mysqli->common_select('user', '*', $where);
if (!$user['error']) {
    $user = $user['data'][0];
}
?>

<h1>Edit User</h1>
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_content">
                <form method="post" action="" class="form-horizontal form-label-left">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="full_name" value="<?= $user->full_name ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?= $user->email ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" value="<?= $user->password ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" name="contact" value="<?= $user->contact ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" value="<?= $user->address ?>" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                </form>

                <?php
                if ($_POST) {
                    $_POST['updated_at'] = date('Y-m-d H:i:s');
                    $_POST['updated_by'] = $_SESSION['user']->id;
                    $res = $mysqli->common_update('user', $_POST, $where);
                    if (!$res['error']) {
                        echo "<script>location.href='user.php'</script>";
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