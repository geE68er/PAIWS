<?php
$servername = "mysql.webhosting32.1blu.de";
$username = "s298619_3159941";
$password = "Diese(passwort1337";
$dbname = "db298619x3159941";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>