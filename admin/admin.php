<?php include_once('include/header.php'); ?>
<?php include_once('include/topbar.php'); ?>

<h1>Admin</h1>
<div class="col-md-12 col-sm-12">
    <div class="x_panel">
        <div class="x_content">
            <a href="admin_create.php" class="btn btn-primary float-right">Add Admin</a>
            <div class="card-box table-responsive">
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $res = $mysqli->common_select('admin');
                        if (!$res['error']) {
                            foreach ($res['data'] as $i => $d) {
                        ?>
                        <tr>
                            <td><?= ++$i; ?></td>
                            <td><?= $d->full_name ?></td>
                            <td><?= $d->email ?></td>
                            <td><?= $d->contact ?></td>
                            <td><?= $d->address ?></td>
                            <td><?= $d->status ? "Active" : "Inactive" ?></td>
                            <td>
                                <a href="admin_edit.php?id=<?= $d->id ?>" class="btn btn-primary">Edit</a>
                                <a href="admin_delete.php?id=<?= $d->id ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php } } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include_once('include/footer.php'); ?>