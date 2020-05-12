<?php 
include "../db.php";
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
  echo "
<script>
window.location='../login.php';
</script>
  ";
  exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Secondary User</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/simple-sidebar.css" rel="stylesheet">
 <!-- Bootstrap core JavaScript -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">User Panel </div>
      <div class="list-group list-group-flush">
        <a href="index.php?pid=1" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="index.php?pid=4" class="list-group-item list-group-item-action bg-light" id="req">Requests</a>
        <a href="index.php?pid=5" class="list-group-item list-group-item-action bg-light" id="bil">Billing Info</a>
        <a href="index.php?pid=6" class="list-group-item list-group-item-action bg-light" id="pay">Payments</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-info" id="menu-toggle">Full Screen</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION["u_email"]; ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php?pid=13">Update Profile</a>
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <?php
      $resp=$_SESSION["u_resp"];
if($resp=='Bill')
{
  echo '<script>
$(document).ready(function(){
  $("#req").hide();
  $("#pay").hide();
    $("#bil").show();
});
  </script>';

}
else if($resp=='Requests')
{
echo '<script>
$(document).ready(function(){
  $("#req").show();
  $("#pay").hide();
    $("#bil").hide();
});
  </script>';
}
else if($resp=='Payments')
{
echo '<script>
$(document).ready(function(){
  $("#req").hide();
  $("#pay").show();
    $("#bil").hide();
});
  </script>';
}
else if($resp=='Bill & Payments')
{
echo '<script>
$(document).ready(function(){
  $("#req").hide();
  $("#pay").show();
    $("#bil").show();
});
  </script>';
}
else if($resp=='Bill & Requests')
{
echo '<script>
$(document).ready(function(){
  $("#req").show();
  $("#pay").hide();
    $("#bil").show();
});
  </script>';
}
else if($resp=='Request & Payments')
{
echo '<script>
$(document).ready(function(){
  $("#req").show();
  $("#pay").show();
    $("#bil").hide();
});
  </script>';
}
else if($resp=='All')
{
echo '<script>
$(document).ready(function(){
  $("#req").show();
  $("#pay").show();
    $("#bil").show();
});
  </script>';
}

      ?>