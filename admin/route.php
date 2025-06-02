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

                        <th>To Airport</th>
                        <th>From Airport</th>
                        <th>Trans Area</th>
                         

                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody> 
                        
                      
 <?php
                        $res = $mysqli->common_select('route');
                        if (!$res['error']) {
                              foreach ($res['data'] as $i => $d) {
                        ?>
                          <tr>
                            <td><?= ++$i;?></td>
                            <td><?= $d->route_type ?></td>
                            <td><?= $d->to_airport ?></td>
                            <td><?= $d->from_airport?></td>
                            <td><?= $d->trans_area ?></td>
                            

                            <td><?= $d->status?"Active":"Inactive" ?></td>
                            <td>
                              <a href="route_edit.php?id=<?= $d->id ?>" class="btn btn-primary">Edit</a>
                              <a href="route_delete.php?id=<?= $d->id ?>" class="btn btn-danger">Delete</a>
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