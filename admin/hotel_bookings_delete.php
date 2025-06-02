<?php
include_once('include/header.php');

if (isset($_GET['id'])) {
  $where['id'] = $_GET['id'];
  $res = $mysqli->common_delete('hotel_bookings', $where);
  if (!$res['error']) {
    echo "<script>location.href='hotel_bookings.php'</script>";
  } else {
    echo $res['error_msg'];
  }
} else {
  echo "ID is missing";
}
?>
