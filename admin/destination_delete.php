<?php
include_once('include/connection.php');

$where['id'] = $_GET['id'];

$data['updated_at'] = date('Y-m-d H:i:s');
$data['updated_by'] = $_SESSION['user']->id;
$data['status'] = 0;  // Soft delete by setting status to 0 (Inactive)

$res = $mysqli->common_update('destination', $data, $where);

if (!$res['error']) {
  echo "<script>location.href='destination.php'</script>";
} else {
  echo $res['error_msg'];
}
?>