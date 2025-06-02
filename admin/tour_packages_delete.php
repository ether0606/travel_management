<?php
include_once('include/connection.php');

if (!isset($_GET['id'])) {
  echo "Invalid ID";
  exit;
}

$where['id'] = $_GET['id'];
$data['updated_at'] = date('Y-m-d H:i:s');
$data['updated_by'] = $_SESSION['user']->id;
$data['status'] = 0; // soft delete by setting status inactive

$res = $mysqli->common_update('tour_packages', $data, $where);

if (!$res['error']) {
  echo "<script>location.href='tour_packages.php'</script>";
} else {
  echo $res['error_msg'];
}