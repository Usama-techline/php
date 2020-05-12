<?php
include "uuser.php";
?>
<div class="row">
		<div class="col-sm-12"><h2>Update Secondary User</h2></div>
		<br><br>
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
	                    <form method="post" action="">
	                    	
                        <div class="form-row">
                        	<div class="form-group col-md-12">
							<label ><b>Name:</b></label>
                              <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?php echo $namee; ?>" required>
                            </div>
                            <div class="form-group col-md-12">
                            	<label ><b>Email:</b></label>
                              <input id="email" name="email" placeholder="Email Address" class="form-control" type="text" value="<?php echo $emaill ?>" required>
                            </div>
                            <div class="form-group col-md-12">
                            	<label ><b>Password:</b></label>
                              <input type="text" class="form-control" id="password" name="pass" placeholder="Password" value="<?php echo $passs; ?>" required>
                            </div>
                            <div class="form-group col-md-12">
                            	<label ><b>Phone #:</b></label>
                              <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Phone #" name="cntct" value="<?php echo $phonee;  ?>" required>
                            </div>
                             <div class="form-group col-md-12">
                              <label>User Responsiblity</label>
                             <select class="form-control" name="resp">
                                <option value="<?php echo $respp; ?>"><?php echo $respp; ?></option>
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
                            	<label ><b>Address:</b></label>
                             <textarea class="form-control" rows="5" placeholder="Address" name="add" required>
                             	<?php echo $addd; ?>
                             </textarea>
                            </div>
                          </div>
                                  
                        
                        <div class="form-row">
                        	<div class="col-sm-6">
                            <button type="submit" class="btn btn-success btn-block" name="upd_mer">Update User</button>
                        	</div>
                        	<div class="col-sm-6">
                        	 <a href="index.php?pid=3"><button type="button" class="btn btn-primary btn-block" name="view">View Users</button></a>
                        	</div>
                        </div>
                    </form>
     </div>
     <div class="col-sm-2"></div>
    </div>