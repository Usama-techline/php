<?php


    sleep(3600); 
    $url='http://localhost:8888/php/usage.php';
    $s = curl_init();
    curl_setopt($s,CURLOPT_URL, $url); 
    curl_exec($s); 
    curl_getinfo($s,CURLINFO_HTTP_CODE); 
    curl_close($s);

include "db.php";
date_default_timezone_set('Asia/Karachi');
$time=$date=date('20:00');
$date=date('d/m/Y', time());
$cu=date('Y-m-d');
$currenttime=date('h:i', time());
 
 $sql="SELECT * from tb_users where u_role='merchant'";
$res=mysqli_query($conn,$sql);
$count=0;
while($row=mysqli_fetch_assoc($res))
{

	$user=$row['u_email'];
	 $sql1="SELECT * from tb_req where r_p='$user' and DATE(time) ='$cu'"; 
	$req=mysqli_query($conn,$sql1);
	        $r = mysqli_num_rows($req);
	        $tot= $r*0.0489;
	mail($user,'Today Total usage','Emails.....'.$r.'<br>Balance Used....'.$tot);
	

}

?>
