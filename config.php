<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


//$con = mysqli_connect("localhost", "root", "", "todo") or die("connection fail");