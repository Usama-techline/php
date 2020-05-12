<?php
include "db.php";
if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$pass  = $_POST['pass'];

	$sql="SELECT * from tb_users where u_email='$email'"; 
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res) > 0)
	{
		while($row=mysqli_fetch_assoc($res))
		{
			if($pass==$row['u_pass'])
			{
					session_start();
					$_SESSION["loggedin"]=true;
					$_SESSION["u_name"]  =$row['u_name'];
					$_SESSION["u_phone"] =$row['u_phone'];
					$_SESSION["u_role"]  =$row['u_role'];
					$_SESSION["u_resp"]  =$row['u_resp'];
					$_SESSION["u_email"] =$row['u_email'];
					$_SESSION["u_p"]     =$row['u_p'];
					if($row['u_role']=='admin')
					{
						header("location:admin/index.php");
					}
					else if($row['u_role']=='merchant')
					{
						header("location:merchant/index.php");
					}
					else if($row['u_role']=='sub')
					{
						header("location:secondary/index.php");
					}
					

			}
			else
			{
				echo "The Password You Entered is incorrect";
			}
		}
	}
	else
	{
		echo "No match found for This Email";
	}

}
?>