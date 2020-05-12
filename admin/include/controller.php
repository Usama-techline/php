<?php
 $chk =@ $_REQUEST["pid"];
 switch ($chk) {
 	case '1':
 		
 	include "pages/dashboard.php";
 		break;

 	case '2':

 	include "pages/merchants.php";
 	break;

 	case '3':

 	include "pages/secondary.php";
 	break;

 	case '4':

 	include "pages/requests.php";
 	break;

 	case '5':

 	include "pages/billing.php";
 	break;

 	case '6':

 	include "pages/payments.php";
 	break;
 	case '7':

 	include "pages/add_merchants.php";
 	break;
 	case '8':

 	include "pages/upd_merchants.php";
 	break;
 	case '9':

 	include "pages/del_merchants.php";
 	break;
 	case '10':

 	include "pages/add_user.php";
 	break;
 	case '11':

 	include "pages/upd_user.php";
 	break;
 	case '12':

 	include "pages/del_user.php";
 	break;
 	case '13':

 	include "pages/upd_profile.php";
 	break;
 	case '14':

 	include "pages/del_req.php";
 	break;
 	case '15':

 	include "pages/del_bil.php";
 	break;
 	
 	default:
 		
 	include "pages/dashboard.php";
 		break;
 }
?>