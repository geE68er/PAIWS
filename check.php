<?php
$servername = "mysql.webhosting32.1blu.de";
$username = "s298619_3159941";
$password = "Diese(passwort1337";
$dbname = "db298619x3159941";
$fname = $_POST["fname"];
$nname = $_POST["nname"];
$pwo = $_POST["password"];
$wolf = $_POST["radioB"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql ="INSERT INTO Persons(PersonID, LastName, FirstName, Address, City)
VALUES(null,'$nname','$fname','Staudistraße','$pwo');";
if($conn->query($sql) == true){
	echo "User hinzugefügt!";
} else { "Hat nicht geklappt!" . $conn->error;
}

?> 