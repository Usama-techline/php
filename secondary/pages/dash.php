<?php

$em=$_SESSION["u_email"];
$e=$_SESSION["u_p"];
$sqlchk="Select u_bal from tb_users where u_p='$e'";
$ro=mysqli_query($conn,$sqlchk);
$row=mysqli_fetch_array($ro);
$bal=$row[0];
$sql="SELECT * from tb_users where u_email='$em'"; 
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$count="SELECT * from tb_users where u_role='merchant'";
$mr=mysqli_query($conn,$count);
$count="SELECT * from tb_users where u_role='sub'";
$sb=mysqli_query($conn,$count);
 
?>