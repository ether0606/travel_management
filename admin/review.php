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
      <h1>Review</h1>

<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                              <a href="review_create.php" class="btn btn-primary float-right">Add Review</a>
                            <div class="card-box table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>#SL</th>
                          <th>User Id</th>

                        <th>Tour Id</th>
                        <th>Rating</th>
                        <th>Comment</th>
                         <th>Review Date</th>

                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody> 
                        
                      


<?php
                        $res = $mysqli->common_select('review');
                        if (!$res['error']) {
                              foreach ($res['data'] as $i => $d) {
                        ?>
                          <tr>
                            <td><?= ++$i;?></td>
                            <td><?= $d->user_id ?></td>
                            <td><?= $d->tour_id ?></td>
                            <td><?= $d->rating?></td>
                            <td><?= $d->comment ?></td>
                            <td><?= $d->review_date ?></td>

                            <td><?= $d->status?"Active":"Inactive" ?></td>
                            <td>
                              <a href="review_edit.php?id=<?= $d->id ?>" class="btn btn-primary">Edit</a>
                              <a href="review_delete.php?id=<?= $d->id ?>" class="btn btn-danger">Delete</a>
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