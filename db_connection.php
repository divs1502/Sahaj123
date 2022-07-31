<?php
session_start(); 
//error_reporting(0);
// if (isset($_GET['submit'])) {
// 	echo "button clicked";
// 	echo $_GET['name'];
// }

$servername = "localhost";
$username = "root";
$password = "";
$database = "epass";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";



?>