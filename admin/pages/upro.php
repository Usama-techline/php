<?php
$emm=$_SESSION["u_email"];
$sql="SELECT * from tb_users where u_email='$emm'";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run))
{
  $uid  =$row['u_id'];
	$namee  =$row['u_name'];
	$emaill =$row['u_email'];
	$passs  =$row['u_pass'];
	$phonee =$row['u_phone'];
	$addd   =$row['u_add'];
}
if(isset($_POST['upd_mer']))
{
 $name  = $_POST['name'];
 $email = $_POST['email'];
 $pass  = $_POST['pass'];
 $cntct = $_POST['cntct'];
 $add   = $_POST['add'];
$sql1="SELECT * from tb_users where u_email='$email' and u_id!='$uid'";
 $em=mysqli_query($conn,$sql1);
 if(mysqli_num_rows($em)>0)
 {
 	echo "<script>alert('This Email Already Exists')</script>";
 	goto e;
 }
 
 else
 {
  $sql2="UPDATE tb_users set u_name='$name',u_email='$email',u_pass='$pass',u_phone='$cntct',u_add='$add' where u_id='$uid'";
 mysqli_query($conn,$sql2);
 echo "<script>alert('Profile Updated Successfully');window.location='index.php?pid=1'</script>"; 
}
}
e:
?>