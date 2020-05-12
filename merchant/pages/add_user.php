<?php
include "auser.php";
?>
<div class="container">
	
	<div class="row">
		<div class="col-sm-12"><h2>Add Secondary User</h2></div>
		<br><br><br>
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
	                    <form method="post" action="">
	                    	
                        <div class="form-row">
                        	<div class="form-group col-md-12">

                              <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                            </div>
                            <div class="form-group col-md-12">
                              <input id="email" name="email" placeholder="Email Address" class="form-control" type="email" required>
                            </div>
                            <div class="form-group col-md-12">
                              <input type="password" class="form-control" id="password" name="pass" placeholder="Password" required>
                            </div>
                             
                            <div class="form-group col-md-12">
                              <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Phone #" name="cntct" required>
                            </div>
                             <div class="form-group col-md-12">
                             <select class="form-control" name="resp">
                                <option value="All">Select User Responsibility</option>
                               <option  value="All"></option>
                                <option value="All">All</option>
                                <option value="Bill">Bill</option>
                                <option value="Requests">Requests</option>
                                <option value="Payments">Payments</option>
                                <option value="Bill & Payments">Bill & Payments</option>
                                <option value="Bill & Requests">Bill & Requests</option>
                                <option value="Request & Payments">Request & Payments</option>
                                
                             </select>
                            </div>
                            <div class="form-group col-md-12">
                             <textarea class="form-control" rows="5" placeholder="Address" name="add" required></textarea>
                            </div>
                          </div>
                                  
                        
                        <div class="form-row">
                        	<div class="col-sm-6">
                            <button type="submit" class="btn btn-success btn-block" name="add_mer">Add User</button>
                        	</div>
                        	<div class="col-sm-6">
                        	 <a href="index.php?pid=3"><button type="button" class="btn btn-primary btn-block" name="view">View User</button></a>
                        	</div>
                        </div>
                    </form>
     </div>
     <div class="col-sm-2"></div>
    </div>
	               
</div>