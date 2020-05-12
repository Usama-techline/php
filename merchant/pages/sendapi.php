<?php
session_start();
header("Content-Type: application/json");
$username = "";
$password = "";
if ( isset( $_SERVER['PHP_AUTH_USER'] ) ) {
$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];
if($username == "usama" && $password == "123"){
if( $_SERVER['REQUEST_METHOD'] == 'POST'){
request_init();
}
}
else{
	$response=[
'status'=>'Invalid',
'error'=>'Invalid Credentials',
'description'=>'Wrong Credentials Provided Authentication Failed'
];
$response=json_encode($response);
@print_r($response);
}
} elseif ( isset( $_SERVER['HTTP_AUTHORIZATION'] ) ) {
if ( strpos ( strtolower ( $_SERVER['HTTP_AUTHORIZATION'] ) , 'basic' ) === 0 ) {
@list( $username , $password ) = @explode ( ':' , base64_decode ( substr ( $_SERVER['HTTP_AUTHORIZATION'] , 6 ) ) );
}
}

function request_init(){
$json_post_data = @file_get_contents('php://input');
$decoded_data = @json_decode( $json_post_data, true);




$reference = @$decoded_data["reference"];
$to        = @$decoded_data["to"];
$from      = @$decoded_data["from"];
$cc        = @$decoded_data["cc"];
$bcc       = @$decoded_data["bcc"];
$body      = @$decoded_data["body"];
$subject   = @$decoded_data["sub"];
$par       = @$decoded_data["par"];
$wh        =@$decoded_data["webhook"];
$headers   = [
  'MIME-Version: 1.0',
  'Content-type: text/plain; charset=utf-8',
  
  'Cc:' . $cc. '',
  'Bcc:' .$bcc.''
];
if($to=='' and $from =='' and $subject=='')
{
$response=[
'status'=>'Empty Variable',
'error'=>'Variable Empty error',
'description'=>'Empty Variables ..Email Cant be send'
];
@$response=json_encode($response);
@print_r($response);


}
else
{
$headers = implode("\r\n", $headers);
$stat=mail($to,$subject,$body,$headers);

$st='pending';
if($stat===TRUE)
{
$st='processed';

$response=[
'status'=>'processed',
'error'=>'request processed',
'description'=>'status is processed'
];
@$response=json_encode($response);
@print_r($response);
}
else
{
$st='error';
	
$response=[
'status'=>'error',
'error'=>'request error',
'description'=>'status request error'
];
@$response=json_encode($response);
@print_r($response);
}

$servername = "localhost";
$username = "root";
$password = "root";
$db = "db_email";
$conn = new mysqli($servername, $username, $password ,$db);

 $sql = "INSERT INTO tb_req (r_to,r_from,r_cc,r_bcc,r_sub,r_status,r_body,r_p,r_ref,r_web)


VALUES ('$to', '$from', '$cc', '$bcc' , '$subject', '$st','$body' , '$par' , '$reference','$wh')"; 
if ($conn->query($sql) === TRUE) {
	$e=$par;
	$sqlchk="Select u_bal from tb_users where u_email='$e'";
$ro=mysqli_query($conn,$sqlchk);
$row=mysqli_fetch_array($ro);
$bal=@$row[0];
$bal=$bal-0.0489;
 $upd="UPDATE `tb_users` SET u_bal = '$bal' WHERE `tb_users`.`u_email` = '$e'";

mysqli_query($conn,$upd);
	$sql1 = "INSERT INTO tb_bil (b_email,b_price,b_status,b_par)
VALUES ('$from', '0.0489','Paid','$par')";
mysqli_query($conn,$sql1); 

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
@header("Content-Type: application/json");


}
}