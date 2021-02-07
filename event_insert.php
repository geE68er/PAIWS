<?php
include('dbcon.php');
// Variablen um die Werte zwischen zu speichern, die vom
$eName = $_POST["ename"]; //Frontend übergeben werden
$euId = 9 ;// $_POST["uID"]; verknuepfung zur user tabelle, erstellender user automatsich einfügen!?
$eDesc = $_POST["des"];
$eLoc = $_POST["loc"];
$erating = null;//$_POST["rating"];
$ecreationtime = null;//$_POST["ecretime"];
$edate = null;//$_POST["edate"]
$eduration = null;//$_POST["dura"];
$membCap = null;//$_POST["memberC"];

// das sql insert bleibt noch zu prüfen, wie wir das mit user id als Fremdschlüssel machen
//$sql ="INSERT INTO event(eventid, eventname, eventuid, eventloc, eventrtng, eventtme, eventdte, eventdrtn, eventmbr, eventcp)
//VALUES(null, '$eName','$euId','$eLoc', '$eDesc', '$erating','$ecreationtime', '$edate', '$eduration', null, '$membCap');";

$sql1 ="INSERT INTO event(eventname, eventuid, eventloc, eventrtng, eventtme, eventdte, eventdrtn, eventmbr, eventcp)
VALUES('$eName',null,null,null, null ,null, null , null, null);";
if($conn->query($sql1) == true){
}