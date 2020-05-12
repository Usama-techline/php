<?php
include "sec.php";
?>

      <div class="container-fluid">
      
         <h2><span>Secondary Users</span><span style="float:right"><a href="index.php?pid=10"><button class="btn btn-primary" >Add User</button></a></span></h2>
     
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Phone#</th>
        <th>Address</th>
        <th>Responsibility</th>
        <th>Added By</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php echo $html; ?>
    </tbody>
  </table>
      </div>
   
