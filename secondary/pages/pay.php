<?php
include "../db.php";
$eml=$_SESSION["u_p"];
$sql="SELECT * from tb_bil where b_par='$eml'";
$res=mysqli_query($conn,$sql);
$html="";
$sqlchk="Select u_bal from tb_users where u_email='$eml'";
$ro=mysqli_query($conn,$sqlchk);
$row=mysqli_fetch_array($ro);
$bal=$row[0];
$count="SELECT * from tb_req where r_p='$eml'";
$sb=mysqli_query($conn,$count);

?>