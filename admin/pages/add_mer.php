<?php

if(isset($_POST['add_mer']))
{
 $name  = $_POST['name'];
 $email = $_POST['email'];
 $pass  = $_POST['pass'];
 $cpass = $_POST['cpass'];
 $cntct = $_POST['cntct'];
 $add   = $_POST['add']; 
 $bal   = 50;
 $sql1="SELECT * from tb_users where u_email='$email'";
 $em=mysqli_query($conn,$sql1);
 if(mysqli_num_rows($em)>0)
 {
 	echo "<script>alert('This Email Already Exists')</script>";
 	goto e;
 }
 else if($pass!=$cpass)
 {
    echo "<script>alert('Password not Matched')</script>";
    goto e;
 }
 else
 {
   $sql="INSERT INTO tb_users (u_p, u_name, u_email, u_phone, u_add, u_role, u_resp,u_bal, u_pass) VALUES ('$email', '$name', '$email', '$cntct', '$add', 'merchant', 'all','$bal', $pass)";
  mysqli_query($conn,$sql)or die("Mysql error: " . mysqli_error());
  echo "<script>
  alert('Merchant Added Successful');
 
  </script>";


 }

}
e:
?>