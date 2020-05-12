<?php
include "ureq.php";
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
                        		<label>To</label>
                              <input type="email" class="form-control" id="to" placeholder="To" name="to" value="<?php echo $too; ?>" required>
                            </div>
                            <div class="form-group col-md-12">
                            	<label>CC</label>
                              <input id="cc" name="cc" placeholder="cc" class="form-control" type="email" value="<?php echo $ccc; ?>" required>
                            </div>
                            <div class="form-group col-md-12">
                            	<label>BCC</label>
                              <input type="email" class="form-control" id="bcc" name="bcc" placeholder="bcc" value="<?php echo $bccc; ?>" required>
                            </div>
                             
                            <div class="form-group col-md-12">
                            	<label>Subject</label>
                              <input type="text" class="form-control"  placeholder="Subject" name="subject" id="subject"  value="<?php echo $subb; ?>" required>
                            </div>
                             
                            <div class="form-group col-md-12">
                            	<label>Body</label>
                             <textarea class="form-control" rows="5" placeholder="Body" name="body" id="body" required>
                             	<?php echo $bodyy; ?>
                             </textarea>
                            </div>
                            <div class="form-group col-md-12">
                            	<label>Status</label>
                            <select class="form-control" name="status">
                            	<option value="<?php echo $statuss; ?>"><?php echo $statuss; ?></option>
                            	<option value="approved">approved</option>
                            	
                            </select>
                            </div>
                          </div>
                                  
                        
                        <div class="form-row">
                        	<div class="col-sm-6">
                            <button type="submit" class="btn btn-success btn-block" name="upd">Send Mail</button>
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