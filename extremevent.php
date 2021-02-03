<?php
include('dbcon.php');
$eventData = array();
$sql = ("SELECT * FROM event;");
$eventResult = $conn->query($sql)
	or die($conn->error);

while ( $row = $eventResult->fetch_assoc()){	
	$eventData[] = $row;
}
echo json_encode($eventData);

?>