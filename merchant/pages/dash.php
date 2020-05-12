<?php

$e=$_SESSION["u_p"];
$eml=$_SESSION["u_email"];
$sqlchk="Select u_bal from tb_users where u_p='$e'";
$ro=mysqli_query($conn,$sqlchk);
$row=mysqli_fetch_array($ro);
$bal=$row[0];
$sql="SELECT * from tb_users where u_email='$eml'"; 
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$count="SELECT * from tb_users where u_role='merchant'";
$mr=mysqli_query($conn,$count);
$count="SELECT * from tb_users where u_role='sub'and u_p='$eml'";
$sb=mysqli_query($conn,$count);
$count="SELECT * from tb_req where r_p='$eml'";
$req=mysqli_query($conn,$count);


 
?>
