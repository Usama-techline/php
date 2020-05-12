<?php
$uid=$_GET['uid'];
$sql="delete from tb_bil where b_id='$uid'";
mysqli_query($conn,$sql);
echo "<script>alert('Delete Successfully');window.location='index.php?pid=5'</script>";
?>