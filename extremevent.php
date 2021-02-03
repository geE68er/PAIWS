<?php
include('dbcon.php');
$eventData = array();
$sql = ("SELECT * FROM event;");
$userResult = $conn->query($sql)
	or die($conn->error);

while ( $row = $userResult->fetch_assoc()){	
	$eventData[] = $row;
}
echo json_encode($eventData);

?>