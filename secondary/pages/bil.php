<?php
include "../db.php";
$eml=$_SESSION["u_p"];
$sql="SELECT * from tb_bil where b_par='$eml'";
$res=mysqli_query($conn,$sql);
$html="";
$total=0;
while($row=mysqli_fetch_assoc($res))
{
        $total+=$row['b_price'];

  $html.="
      <tr>
      <td>".$row['b_email']."</td>
      <td>".$row['b_time']."</td>
      <td>".$row['b_price']."</td>
      <td>".$row['b_status']."</td>
      <td>".$total."</td>
      
      
      <td>
           <a href='index.php?pid=17&uid=".$row['b_id']."'><img src='assets/images/del.png' width='20' ></a>
       </td>
      </tr>
  ";

}
mail($eml,'Total Bill today is',$total);
?>