<?php
include "../db.php";
$eml=$_SESSION["u_p"];
$sql="SELECT * from tb_req";
$res=mysqli_query($conn,$sql);
$html="";
$count="SELECT * from tb_users";
$req=mysqli_query($conn,$count);

?>