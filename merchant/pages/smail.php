<?php
function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$e=$_SESSION["u_p"];
$sqlchk="Select u_bal from tb_users where u_p='$e'";
$ro=mysqli_query($conn,$sqlchk);
$row=mysqli_fetch_array($ro);
$bal=$row[0];

if(isset($_POST['sendmail']))
{   
    if($bal<=5 )
    {
        echo "Your Balance Is getting low";
    }
    else
    {
	if($bal<=0.0489)
	{
		echo "Sorry! You Have Unsufficient Balance";
	}

	else
	{
 $from = $_SESSION["u_email"];
 $key   = $_POST['key'];
 $to   = $_POST['to'];
 $cc   = $_POST['cc'];
 $bcc  = $_POST['bcc'];
 $sub  = $_POST['subject']; 
 $body = $_POST['body']; 
 $ref  = generateRandomString();
 $par  = $_SESSION["u_p"];
 $data=[
 	'reference' => $ref,
 	'webhook' => 'http://localhost:8888/php/merchant/pages/sendapi.php',
 	'from'=>$from,
 	'to'=>$to,
 	'cc'=>$cc,
 	'bcc'=>$bcc,
 	'sub'=>$sub,
 	'body'=>$body,
 	'par'=>$par
 ];
 

 
 

$url = 'http://localhost:8888/php/merchant/pages/sendapi.php';
$curl = curl_init($url);
$username = $key;

$password = '123';

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
$response = curl_exec($curl);
curl_close($curl);

print_r($response);

 


}


}}
?>