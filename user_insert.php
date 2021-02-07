<?php
// Skript um sich mit der Datenbank zu verbinden
include('dbcon.php');

// Variablen gespeichert, die mit der POST-Methode übergeben werden
$fname = $_POST["fname"]; //am besten benutzt ihr die Namen, wie sie 
$nname = $_POST["nname"]; // in den eckigen Klammern stehen für eure 
$pwo = $_POST["password"]; //übergabe
$adr = $_POST["adr"];
$mail = $_POST["mail"];

// das sql insert mit den Attributnamen der Tabelle und den Werten
$sql ="INSERT INTO user(uid, uname, ulname, uadrs,umail, upwd)
VALUES(null,'$nname','$fname','$adr','$mail','$pwo');"; // die durch das Skript
if($conn->query($sql) == true){ //eingefügt werden
	echo "User hinzugefügt!";
} else { "Hat nicht geklappt!" . $conn->error;
}
include('extr_user.php');

?> 