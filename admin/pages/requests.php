<?php
include "req.php";
?>

      <div class="container-fluid">
      
         <h2><span>Requests</span></h2>
     
  <table class="table table-striped">
    <thead>
      <tr>
        <th>From</th>
        <th>CC</th>
        <th>BCC</th>
        <th>Subect</th>
        <th>Body</th>
        <th>Status</th>
        <th>Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php echo $html; ?>
    </tbody>
  </table>
      </div>
   
