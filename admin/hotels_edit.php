<?php include_once('include/header.php'); ?>
<?php include_once('include/topbar.php'); ?>

<?php
$where['id'] = $_GET['id'];
$res = $mysqli->common_select('hotels', '*', $where);
if (!$res['error']) {
    $hotel = $res['data'][0];
} else {
    echo $res['error_msg'];
    exit;
}
?>

<h1>Edit Hotel</h1>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_content">
                <form method="post" class="form-horizontal form-label-left">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Hotel Name <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="name" name="name" required class="form-control" value="<?= htmlspecialchars($hotel->name) ?>">
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
                                        $selected = ($hotel->location_id == $loc->id) ? "selected" : "";
                                        echo "<option value='{$loc->id}' $selected>" . htmlspecialchars($loc->name) . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description</label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea id="description" name="description" class="form-control" rows="3"><?= htmlspecialchars($hotel->description) ?></textarea>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="image_url">Image URL</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="image_url" name="image_url" class="form-control" value="<?= htmlspecialchars($hotel->image_url) ?>">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="rating">Rating</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" id="rating" name="rating" min="0" max="5" step="0.1" class="form-control" value="<?= htmlspecialchars($hotel->rating) ?>">
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