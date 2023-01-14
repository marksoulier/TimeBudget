<!doctype html>
<html>
	<?php
$servername = "localhost";
$username = "mark";
$password = "Parr0tdr0ne";
$database = "learn";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
</html>