<?php include_once('include/header.php'); ?>
<?php include_once('include/topbar.php'); ?>

<?php
$where['id'] = $_GET['id'];
$hotel = $mysqli->common_select('hotels', '*', $where);
if (!$hotel['error']) {
    $hotel = $hotel['data'][0];
}
?>

<h1>Edit Hotel</h1>
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_content">
                <form method="post" class="form-horizontal form-label-left">
                    <div class="form-group row">
                        <label class="col-md-3">Hotel Name</label>
                        <div class="col-md-6"><input type="text" name="name" value="<?= $hotel->name ?>" class="form-control"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Location ID</label>
                        <div class="col-md-6">
                            <select name="location_id" id="location_id" class="form-control">
                                <option value="">Select Location</option>
                                <?php 
                                $locations = $mysqli->common_select("location", "id, name");
                                
                                foreach ($locations['data'] as $location) : ?>
                                    <option value="<?= $location->id ?>" <?= $location->id==$hotel->location_id?"selected":"" ?>><?= $location->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group  row">
                        <label class="col-md-3">Description</label>
                        <div class="col-md-6"><textarea name="description" class="form-control"><?= $hotel->description ?></textarea></div>
                    </div>
                    <div class="form-group  row  ">
                        <label class="col-md-3">Image URL</label>
                        <div class="col-md-6"><input type="text" name="image_url" value="<?= $hotel->image_url ?>" class="form-control"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Rating</label>
                        <div class="col-md-6"><input type="number" name="rating" step="0.1" value="<?= $hotel->rating ?>" class="form-control"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>

                <?php
                if ($_POST) {
                    $_POST['updated_at'] = date('Y-m-d H:i:s');
                    $_POST['updated_by'] = $_SESSION['user']->id;
                    $_POST['status'] = 1;
                    $res = $mysqli->common_update('hotels', $_POST, $where);
                    if (!$res['error']) {
                        echo "<script>location.href='hotels.php'</script>";
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
