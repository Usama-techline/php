<?php
include "log.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Loign</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
	<div class="row text-center mb-4">
		<div class="col-md-12">
		    <h4>Email System</h4>
		   
		</div>
	</div>
	<div class="row text-center">
	    <div class="col-md-6 offset-md-3">
	        <div class="card">
	            <div class="card-body">
	                <div class="login-img">
	                    <img src="assets/images/login.png" style="width: 284px;
    ">
	                </div>
	                <div class="login-title">
	                    <h4>Please Enter Your Credentials!</h4>
	                </div>
	                <div class="login-form mt-4">
	                    <form method="post" action="">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <input id="email" name="email" placeholder="Email Address" class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-12">
                              <input type="pass" class="form-control" id="pass" name="pass" placeholder="Password">
                            </div>
                          </div>
                                  
                        
                        <div class="form-row">
                            <button type="submit" class="btn btn-success btn-block" name="login">Login</button>
                        </div>
                    </form>
	                </div>
	                <div class="logi-forgot text-right mt-2">
	                    <a href="signup.php">New Here? </a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>

</body>
</html>
