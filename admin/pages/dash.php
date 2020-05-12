<?php

$em=$_SESSION["u_email"];

$sql="SELECT * from tb_users where u_email='$em'"; 
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$count="SELECT * from tb_users where u_role='merchant'";
$mr=mysqli_query($conn,$count);
$count="SELECT * from tb_users where u_role='sub'";
$sb=mysqli_query($conn,$count);
$count="SELECT * from tb_req";
$req=mysqli_query($conn,$count);
 
?>