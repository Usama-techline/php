<?php
include "sign.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
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
	                    <img src="assets/images/signup.png" style="width: 284px;
   ">
	                </div>
	                <div class="login-title">
	                    <h4>Merchant Signup</h4>
	                </div>
	                <div class="login-form mt-4">
	                    <form method="post" action="">
	                    	
                        <div class="form-row">
                        	<div class="form-group col-md-12">
                              <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                            </div>
                            <div class="form-group col-md-12">
                              <input id="email" name="email" placeholder="Email Address" class="form-control" type="text" required>
                            </div>
                            <div class="form-group col-md-12">
                              <input type="password" class="form-control" id="password" name="pass" placeholder="Password" required>
                            </div>
                             <div class="form-group col-md-12">
                              <input type="password" class="form-control" id="cpass" name="cpass" id="confirm_password" placeholder="Confrm Password" required>
                            </div>
                            <div class="form-group col-md-12">
                              <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Phone #" name="cntct" required>
                            </div>
                            <div class="form-group col-md-12">
                             <textarea class="form-control" rows="5" placeholder="Address" name="add" required></textarea>
                            </div>
                          </div>
                                  
                        
                        <div class="form-row">
                            <button type="submit" class="btn btn-success btn-block" name="signup">Signup</button>
                        </div>
                    </form>
	                </div>
	                <div class="logi-forgot text-right mt-2">
	                    <a href="login.php">Login </a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
</body>
</html>
