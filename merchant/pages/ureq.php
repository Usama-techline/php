<?php
$uid=$_GET['uid'];
$sql="SELECT * from tb_req where r_id='$uid'";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($run))
{
  
	$fromm  =$row['r_from'];
	$too =$row['r_to'];
	$ccc  =$row['r_cc'];
	$bccc =$row['r_bcc'];
	$subb  =$row['r_sub'];
	$bodyy   =$row['r_body'];
	$statuss   =$row['r_status'];
}
if(isset($_POST['upd']))
{
 $to= $_POST["to"];
 $cc  = $_POST['cc'];
 $bcc = $_POST['bcc'];
 $sub  = $_POST['subject'];
 $body = $_POST['body'];
 $stat   = $_POST['status'];  
 
    
  echo "<script>
  alert('Update Successful');
 
  </script>";


 

}
?>