<?php
include "../db.php";
$eml=$_SESSION["u_p"];
$sql="SELECT b_par from tb_bil group by b_par";
$res=mysqli_query($conn,$sql);
$html="";
$total=0;
$sq1="SELECT * from tb_bil where b_par='$eml'";
$res1=mysqli_query($conn,$sq1);

while($row=mysqli_fetch_assoc($res))
{
  $p=$row['b_par'];
  $sqlchk="Select u_bal from tb_users where u_p='$p'";
$ro=mysqli_query($conn,$sqlchk);
$row2=mysqli_fetch_array($ro);
$bal=$row2[0];
  
  $sq1="SELECT * from tb_bil where b_par='$p'";
$res1=mysqli_query($conn,$sq1);
while($row1=mysqli_fetch_assoc($res1))
{
        $total+=$row1['b_price'];
}

  $html.="
      <tr>
        <td>".$row['b_par']."</td>
        <td>".$total."</td>
        <td>".$bal."</td>
      </tr>
  ";

}
?>