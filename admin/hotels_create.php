<?php include_once('include/header.php'); ?>
<?php include_once('include/topbar.php'); ?>

<h1>Add Hotel</h1>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_content">
                <br />
                <form method="post" action="" class="form-horizontal form-label-left" enctype="multipart/form-data">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Hotel Name <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="name" name="name" required class="form-control ">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="location_id">Location <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <select id="location_id" name="location_id" required class="form-control">
                                <option value="">Select Location</option>
                                <?php
                                $locations = $mysqli->common_select('locations');
                                if (!$locations['error']) {
                                    foreach ($locations['data'] as $loc) {
                                        echo "<option value='{$loc->id}'>" . htmlspecialchars($loc->name) . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description</label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea id="description" name="description" class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="image_url">Image URL</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="image_url" name="image_url" class="form-control">
                            <!-- If you want file upload, replace with file input and handle upload -->
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="rating">Rating</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" id="rating" name="rating" min="0" max="5" step="0.1" class="form-control">
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>

                <?php
                if ($_POST) {
                    $_POST['created_at'] = date('Y-m-d H:i:s');
                    $_POST['created_by'] = $_SESSION['user']->id;
                    $_POST['status'] = 1;
                    $res = $mysqli->common_insert('hotels', $_POST);
                    if (!$res['error']) {
                        echo "<script>location.href='" . $baseurl . "hotels.php'</script>";
                    } else {
                        echo $res['error_msg'];
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include_once('include/footer.php'); ?>