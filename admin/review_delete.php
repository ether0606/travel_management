 <?php
  include_once('include/connection.php');

  $where['id']=$_GET['id'];

  $data['updated_at']=date('Y-m-d H:i:s');
  $data['updated_by']=$_SESSION['user']->id;
  $data['status']=0;
  $res=$mysqli->common_update('review',$data,$where);
  if(!$res['error']){
    echo "<script>location.href='".$baseurl."review.php'</script>";
  }else{
    echo $res['error_msg'];
  }
?>