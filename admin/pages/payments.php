<?php
include "pay.php";

?>

      <div class="container-fluid">
      
         <h2><span>Payments</span><span style="float:right"></h2>
     
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Total Requests</th>
        <th>Total Users</th>
        
      </tr>
    </thead>
    <tbody>
      
      <td><?php echo mysqli_num_rows($res); ?></td>
      <td><?php echo mysqli_num_rows($req); ?></td>
      
    </tbody>
  </table>
      </div>
   
