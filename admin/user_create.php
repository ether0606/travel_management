<?php include_once('include/header.php'); ?>
<?php include_once('include/topbar.php'); ?>

<h1>Add User </h1>
    <div class="row">
         <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                              
                <div class="x_content">
                    <br />
                <form method="post" action="" class="form-horizontal form-label-left">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="full_name" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" name="contact" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" required class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>

                <?php
                if ($_POST) {
                    $_POST['created_at'] = date('Y-m-d H:i:s');
                    $_POST['created_by'] = $_SESSION['user']->id;
                    $_POST['status'] = 1;
                    $_POST['password'] = md5($_POST['password']); // hashed password
                    $res = $mysqli->common_insert('user', $_POST);
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