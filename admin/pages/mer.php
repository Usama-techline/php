<?php
include "../db.php";
$sql="SELECT * from tb_users where u_role='merchant'";
$res=mysqli_query($conn,$sql);
$html="";
while($row=mysqli_fetch_assoc($res))
{
	
	$html.="
			<tr>
			<td>".$row['u_name']."</td>
			<td>".$row['u_email']."</td>
			<td>".$row['u_pass']."</td>
			<td>".$row['u_phone']."</td>
			<td>".$row['u_add']."</td>
			<td><a href='index.php?pid=8&uid=".$row['u_id']."'><img src='assets/images/edit.png' width='20' ><a>
			     <a href='index.php?pid=9&uid=".$row['u_id']."'><img src='assets/images/del.png' width='20' ></a>
		   </td>
			</tr>
	";

}
?>