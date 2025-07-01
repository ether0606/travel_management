<?php include_once('include/header.php'); ?>
<!-- Datatables -->
<link href="assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

<?php include_once('include/topbar.php'); ?>
<!-- /top navigation -->

<h1>Hotel Bookings</h1>
<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_content">
      <div class="row">
        <div class="col-sm-12">
          <a href="hotel_bookings_create.php" class="btn btn-primary float-right">Add Hotel Bookings</a>
          <div class="card-box table-responsive">
            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>#SL</th>
                  <th>User ID</th>
                  <th>Hotel ID</th>
                  <th>Check In</th>
                  <th>Check Out</th>
                  <th>Rooms</th>
                  <th>Total Amount</th>
                  <th>Booking Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $status=['','Pending','Approved','Cancel','Complete'];
                $res=$mysqli->common_query("SELECT hotel_bookings.*,user.full_name,user.contact,user.address, hotels.name as hotel_name, hotel_room.room_type,hotel_room.price_per_night FROM `hotel_bookings` 
                                JOIN user on user.id=hotel_bookings.user_id
                                JOIN hotels on hotels.id=hotel_bookings.hotel_id
                                JOIN hotel_room on hotel_room.id=hotel_bookings.room_id where hotel_bookings.status=1");
                if (!$res['error']) {
                  foreach ($res['data'] as $i => $d) {
                ?>
                <tr>
                  <td><?= ++$i;?></td>
                  <td><?= $d->full_name ?> (<?= $d->contact ?>) </td>
                  <td><?= $d->hotel_name ?></td>
                  <td><?= $d->check_in_date ?></td>
                  <td><?= $d->check_out_date ?></td>
                  <td><?= $d->number_of_room ?></td>
                  <td><?= $d->total_amount ?></td>
                  <td><?= $d->booking_date ?></td>
                  <td><?= $status[$d->booking_status] ?></td>
                  <td>
                    <a href="hotel_bookings_edit.php?id=<?= $d->id ?>" class="btn btn-primary">Edit</a>
                    <a href="hotel_bookings_delete.php?id=<?= $d->id ?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php } } ?>
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