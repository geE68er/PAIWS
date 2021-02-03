<?php
include('dbcon.php');
$userData = array();
$sql = ("SELECT * FROM user;");
$userResult = $conn->query($sql)
	or die($conn->error);

while ( $row = $userResult->fetch_assoc()){	
	$userData[] = $row;
}
echo json_encode($userData);

?>