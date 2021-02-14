<?php
// Skrit um sich mit der Datenbank zu verbinden
include('dbcon.php');

// Variablen gespeichert, die mit der POST-Methode übergeben werden
$luid = $_POST["luid"]; //am besten benutzt ihr die Namen, wie sie 
$leid = $_POST["leid"]; // in den eckigen Klammern stehen für eure 


// das sql insert mit den Attributnamen der Tabelle und den Werten
$sql ="INSERT INTO user(uid, like)
VALUES(null,'$luid','$leid');"; // die durch das Skript
if($conn->query($sql) == true){ //eingefügt werden
}


?>