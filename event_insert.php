<?php
include(dbcon.php);
$eName = $_POST["ename"];
$euId = null // $_POST["uID"]; verknuepfung zur user tabelle, erstellender user automatsich einfügen!?
$eDesc = $_POST["des"];
$eLoc = $_POST["loc"];
$erating = $_POST["rating"];
$ecreationtime = $_POST["ecretime"];
$edate = $_POST["edate"]
$eduration = $_POST["dura"];
$membCap = $_POST["memberC"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql ="INSERT INTO event(eventID, eventname, eventuid, eventloc, eventabt, eventrtng, eventtme, eventdte, eventdrtn, eventtmbr, eventcp)
VALUES(null,'$eName','$euId','$eLoc', '$eDesc', '$erating','$ecreationtime', '$edate', '$eduration', null, '$membCap');";
if($conn->query($sql) == true){
	echo "Event hinzugefügt!";
} else { "Hat nicht geklappt!" . $conn->error;
}

?>