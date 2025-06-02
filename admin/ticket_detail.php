<?php include_once('include/header.php'); ?>
<?php include_once('include/topbar.php'); ?>

<h1>ticket_detail</h1>
<div class="col-md-12 col-sm-12">
    <div class="x_panel">
        <div class="x_content">
            <a href="ticket_detail_create.php" class="btn btn-primary float-right">Add ticket_detail</a>
            <div class="card-box table-responsive">
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>ticket_id</th>
                            <th>seat_id</th>
                            <th>price </th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $res = $mysqli->common_select('ticket_detail');
                        if (!$res['error']) {
                            foreach ($res['data'] as $i => $d) {
                        ?>
                        <tr>
                            <td><?= ++$i; ?></td>
                            <td><?= $d->ticket_id ?></td>
                            <td><?= $d->seat_id ?></td>
                            <td><?= $d->price  ?></td>
                            <td><?= $d->status ? "Active" : "Inactive" ?></td>
                            <td>
                                <a href="ticket_detail_edit.php?id=<?= $d->id ?>" class="btn btn-primary">Edit</a>
                                <a href="ticket_detail_delete.php?id=<?= $d->id ?>" class="btn btn-danger">Delete</a>
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