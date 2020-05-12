<?php
include "dash.php";
?>

      <div class="container-fluid">
      	<br><br>
      <div class="row placeholders">
            
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="assets/images/req.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail" style="border-radius: 150px;" >
              <h4 style="margin-left: 50px;">Requests</h4>
              <span class="text-muted" style="margin-left: 100px;">12</span>
            </div>
            
          </div>
<br><br>
          <div class="row">
          	<div class="col-sm-12"><h2>Profile</h2></div>
          		<div class="col-sm-12">
          			<table class="table table-hover">
          				<tr>
          					<th>Name</th>
          					<td><?php echo $row['u_name']; ?></td>
          				</tr>	
          				<tr>
          					<th>Email</th>
          					<td><?php echo $row['u_email']; ?></td>
          				</tr>	
          				<tr>
          					<th>Password</th>
          					<td><?php echo $row['u_pass']; ?></td>
          				</tr>	
          				<tr>
          					<th>Address</th>
          					<td><?php echo $row['u_add']; ?></td>
          				</tr>	
          				<tr>
          					<th>Responsibility</th>
          					<td><?php echo $row['u_resp']; ?></td>
          				</tr>	
                  <tr>
                    <th>Head Merchant</th>
                    <td><?php echo $row['u_p']; ?></td>
                  </tr> 
                   <tr>
                    <th>Balance</th>
                    <td><?php echo $bal; ?></td>
                  </tr> 
          			</table>
          		</div>
          </div>
      </div>
   
