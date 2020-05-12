<?php
$uid=$_GET['uid'];
$sql="delete from tb_users where u_id='$uid'";
mysqli_query($conn,$sql);
echo "<script>alert('Delete Successfully');window.location='index.php?pid=3'</script>";
?>