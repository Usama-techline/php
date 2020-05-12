<?php
include "smail.php";
?>
<div class="container">
	
	<div class="row">
		<div class="col-sm-12"><h2>Send Mail</h2></div>
		<br><br><br>
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
	                    <form method="post" action="">
	                    	
                        <div class="form-row">
                        	<div class="form-group col-md-12">

                              <input type="email" class="form-control" id="to" placeholder="To" name="to" required>
                            </div>
                            <div class="form-group col-md-12">
                              <input id="cc" name="cc" placeholder="cc" class="form-control" type="email">
                            </div>
                            <div class="form-group col-md-12">
                              <input type="email" class="form-control" id="bcc" name="bcc" placeholder="bcc" >
                            </div>
                             
                            <div class="form-group col-md-12">
                              <input type="text" class="form-control"  placeholder="Subject" name="subject" id="subject" required>
                            </div>
                             
                            <div class="form-group col-md-12">
                             <textarea class="form-control" rows="5" placeholder="Body" name="body" id="body" required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                             <input type="text" class="form-control"  placeholder="Enter Your Secret Key" name="key" id="key" required>
                            </div>
                          </div>
                                  
                        
                        <div class="form-row">
                        	<div class="col-sm-6">
                            <button type="submit" class="btn btn-success btn-block" name="sendmail">Send Mail</button>
                        	</div>
                        	<div class="col-sm-6">
                        	 <a href="index.php?pid=4"><button type="button" class="btn btn-primary btn-block" name="view">View Requests</button></a>
                        	</div>
                        </div>
                    </form>
     </div>
     <div class="col-sm-2"></div>
    </div>
	               
</div>