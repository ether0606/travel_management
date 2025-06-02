<?php
include_once('include/header.php');

if (!isset($_GET['id'])) {
    echo "ID is missing";
    exit;
}

$where['id'] = $_GET['id'];
$data['status'] = 0; // soft delete
$data['updated_at'] = date('Y-m-d H:i:s');
$data['updated_by'] = $_SESSION['user']->id;

$res = $mysqli->common_update('hotel_booking_detail', $data, $where);

if (!$res['error']) {
    echo "<script>location.href='hotel_booking_detail.php'</script>";
} else {
    echo $res['error_msg'];
}
?>
