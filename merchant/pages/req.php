<?php
include "../db.php";
$eml=$_SESSION["u_email"];
$sql="SELECT * from tb_req where r_p='$eml'";
$res=mysqli_query($conn,$sql);
$html="";
while($row=mysqli_fetch_assoc($res))
{
  

  $html.="
      <tr>
      <td>".$row['r_from']."</td>
      <td>".$row['r_to']."</td>
      <td>".$row['r_cc']."</td>
      <td>".$row['r_bcc']."</td>
      <td>".$row['r_sub']."</td>
      <td>".$row['r_body']."</td>
      <td>".$row['r_status']."</td>
      <td>".$row['time']."</td>
      
      
      <td>
           <a href='index.php?pid=15&uid=".$row['r_id']."'><img src='assets/images/del.png' width='20' ></a>
       </td>
      </tr>
  ";

}
?>