<?php include_once('include/header.php'); ?>
<!-- Datatables -->

    <link href="assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->

<!-- page content -->
<h1>Hotels</h1>
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <a href="hotels_create.php" class="btn btn-primary float-right">Add Hotel</a>
                    <div class="card-box table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Name</th>
                                    <th>Location ID</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Rating</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $res = $mysqli->common_select('hotels');
                                if (!$res['error']) {
                                    foreach ($res['data'] as $i => $d) {
                                ?>
                                    <tr>
                                        <td><?= ++$i; ?></td>
                                        <td><?= $d->name ?></td>
                                        <td><?= $d->location_id ?></td>
                                        <td><?= $d->description ?></td>
                                        <td><img src="<?= $base_url ?>admin/assets/images/hotels/<?= $d->image_url ?>" width="50"></td>
                                        <td><?= $d->rating ?></td>
                                        <td><?= $d->status ? "Active" : "Inactive" ?></td>
                                        <td>
                                            <a href="hotels_edit.php?id=<?= $d->id ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="hotels_delete.php?id=<?= $d->id ?>" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('include/footer.php'); ?>
<!-- Datatables -->
<script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/vendors/pdfmake/build/vfs_fonts.js"></script>