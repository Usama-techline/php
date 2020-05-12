<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "db_email";

// Create connection
$conn = new mysqli($servername, $username, $password ,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>