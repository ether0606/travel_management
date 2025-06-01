<?php include_once('include/header.php'); ?>

 <link href="assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


<!-- top navigation -->
<?php include_once('include/topbar.php'); ?>


<!-- /top navigation -->

     <!-- page content -->
      <h1>Hotel_Room</h1>


<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                              <a href="hotel_room_create.php" class="btn btn-primary float-right">Add Hotel_Room</a>
                            <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>#SL</th>
                          <th>Hotel_id</th>
                          <th>Room_type</th>
                          <th>Price_Per_night</th>
                          <th>Total_Room</th>
                          <th>Available_Room</th>
                          <th>Tv</th>
                          <th>AC</th>
                          <th>Fridge</th>
                          <th>Complimentary_Breakfast</th>
                          <th>Guest Number</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $res = $mysqli->common_select('hotel_room');
                        if (!$res['error']) {
                              foreach ($res['data'] as $i => $d) {
                        ?>
                          <tr>
                            <td><?= ++$i;?></td>
                            <td><?= $d->hotel_id ?></td>
                            <td><?= $d->room_type ?></td>
                            <td><?= $d->price_per_night ?></td>

                            <td><?= $d->total_room ?></td>
                            <td><?= $d->available_room ?></td>
                            <td><?= $d->tv ?></td>
                            <td><?= $d->ac ?></td>
                            <td><?= $d->fridge ?></td>
                            <td><?= $d->complimentary_breakfast ?></td>
                            <td><?= $d->guest_number ?></td>

                            <td><?= $d->status?"Active":"Inactive" ?></td>
                            <td>
                              <a href="hotel_room_edit.php?id=<?= $d->id ?>" class="btn btn-primary">Edit</a>
                              <a href="hotel_room_delete.php?id=<?= $d->id ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <?php } } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>

         




         
<?php include_once('include/footer.php');?>

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