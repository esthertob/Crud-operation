<?php
$servername = "localhost";
$username = "simple";
$password = "simpleuser";
$database = "crudoperation";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>