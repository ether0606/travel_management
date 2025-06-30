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
      <h1>Route</h1>

 <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                              <a href="route_create.php" class="btn btn-primary float-right">Add Route</a>
                            <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>#SL</th>
                          <th>Route type</th>

                        <th>From Airport</th>
                        <th>To Airport</th>
                        <th>Trans Area</th>
                         

                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody> 

                    <tbody>
                       <?php
                     $res = $mysqli->common_query('SELECT route.*, (select name from airport WHERE airport.id=route.from_airport) as from_name, (select name from airport WHERE airport.id=route.to_airport) as to_name, (select name from airport WHERE airport.id=route.trans_area) as trans_name FROM `route` WHERE `status`=1');
                      if (!$res['error']) {
                       foreach ($res['data'] as $i => $d) {
                        ?>

                              <tr>
                                <td><?= ++$i; ?></td>
                                <td><?= $d->route_type ?></td>
                                <td><?= $d->from_name ?></td>
                                <td><?= $d->to_name ?></td>
                                <td><?= $d->trans_name ?></td>
                                <td><?= $d->status ? "Active" : "Inactive" ?></td>
                                <td>
                                  <a href="route_edit.php?id=<?= $d->id ?>" class="btn btn-primary btn-sm">Edit</a>
                                  <a href="route_delete.php?id=<?= $d->id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this destination?');">Delete</a>
                                </td>
                              </tr>
                            <?php
                              }
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                    
<?php include_once('include/footer.php');?>