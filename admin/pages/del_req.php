<?php
$uid=$_GET['uid'];
$sql="delete from tb_req where r_id='$uid'";
mysqli_query($conn,$sql);
echo "<script>alert('Delete Successfully');window.location='index.php?pid=4'</script>";
?>