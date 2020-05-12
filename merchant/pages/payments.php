<?php
include "pay.php";
?>

      <div class="container-fluid">
      
         <h2><span>Payments</span><span style="float:right"></h2>
     
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Total Requests</th>
        <th>Remaining Balance</th>
        
      </tr>
    </thead>
    <tbody>
    	
    	<td><?php echo mysqli_num_rows($sb); ?></td>
    	<td><?php echo $bal; ?></td>
      
    </tbody>
  </table>
      </div>
   
