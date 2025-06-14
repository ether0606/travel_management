<?php include_once('include/header.php'); ?>
<?php include_once('include/topbar.php'); ?>

<h1>Add Hotel</h1>
<form method="post" class="form-horizontal form-label-left">
    <div class="form-group row">
        <label class="col-md-3 col-form-label">Hotel Name</label>
        <div class="col-md-6">
            <input type="text" name="name" required class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-3 col-form-label">Location ID</label>
        <div class="col-md-6">
            <select name="location_id" id="location_id" class="form-control">
                <option value="">Select Location</option>
                <?php 
                $locations = $mysqli->common_select("location", "id, name");
                
                foreach ($locations['data'] as $location) : ?>
                    <option value="<?= $location->id ?>"><?= $location->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-3 col-form-label">Description</label>
        <div class="col-md-6">
            <textarea name="description" class="form-control"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-3 col-form-label">Image URL</label>
        <div class="col-md-6">
            <input type="text" name="image_url" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-3 col-form-label">Rating</label>
        <div class="col-md-6">
            <input type="number" step="0.1" name="rating" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6 offset-md-3">
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