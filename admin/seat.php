<?php include_once('include/header.php'); ?>
<!--datatables-->
<?php
if (isset($_GET['airline_id'])) {
    $where['id'] = $_GET['airline_id'];
    $airline = $mysqli->common_select('airline', '*', $where);
    if (!$airline['error'] && !empty($airline['data'])) {
        $airline = $airline['data'][0];
    } else {
        $airline = null;
    }
} else {
    $airline = null;
} ?>

      <link href="assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

<!--top navigation-->
<?php include_once('include/topbar.php'); ?>
<!-- /top navigation-->

      <!-- page content-->
      <h1>Seat</h1>
           <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">

                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <a href="seat_create.php" class="btn btn-primary float-right">Add Seat</a>
                      <div class="card-box table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Airline</th>
                            <th>Seat Type</th>
                            <th>Seat Number</th>
                            <th>Seat Row</th>
                            <th>Seat Column</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $res = $mysqli->common_select('seat');
                        if (!$res['error']) {
                            foreach ($res['data'] as $i => $d) {
                        ?>
                            <tr>
                                <td><?= ++$i ?></td>
                                <td><?= $airline ?></td> 
                                <td><?= $d->seat_type ?></td>
                                <td><?= $d->seat_number ?></td>
                                <td><?= $d->seat_row ?></td>
                                <td><?= $d->seat_column ?></td>
                                <td><?= $d->status ? 'Active' : 'Inactive' ?></td>
                                <td>
                                    <a href="seat_edit.php?id=<?= $d->id ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="seat_delete.php?id=<?= $d->id ?>" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include_once('include/footer.php'); ?>
