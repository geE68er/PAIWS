<?php
include('dbcon.php');

$sql = ("SELECT * FROM user;");
$erg = $conn->query($sql)
	or die($conn->error);
$dataset = $erg->fetch_assoc();	
print_r($dataset);
?>