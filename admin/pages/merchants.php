<?php
include "mer.php";
?>

      <div class="container-fluid">
      
         <h2><span>Merchants</span><span style="float:right"><a href="index.php?pid=7"><button class="btn btn-primary" >Add Merchant</button></a></span></h2>
     
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Phone#</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php echo $html; ?>
    </tbody>
  </table>
      </div>
   
