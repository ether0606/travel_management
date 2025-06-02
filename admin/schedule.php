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
      <h1>Schedule</h1>


<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                              <a href="schedule_create.php" class="btn btn-primary float-right">Add Schedule</a>
                            <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>#SL</th>
                          <th>Route Id</th>

                        <th>Airline Id</th>
                        <th>Start Time Date</th>
                        <th>End Time Date</th>
                         

                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody> 
                        
   
                      
 <?php
                        $res = $mysqli->common_select('schedule');
                        if (!$res['error']) {
                              foreach ($res['data'] as $i => $d) {
                        ?>
                          <tr>
                            <td><?= ++$i;?></td>
                            <td><?= $d->route_id ?></td>
                            <td><?= $d->airline_id ?></td>
                            <td><?= $d->start_time_date?></td>
                            <td><?= $d->end_time_date ?></td>
                            

                            <td><?= $d->status?"Active":"Inactive" ?></td>
                            <td>
                              <a href="schedule_edit.php?id=<?= $d->id ?>" class="btn btn-primary">Edit</a>
                              <a href="schedule-delete.php?id=<?= $d->id ?>" class="btn btn-danger">Delete</a>
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