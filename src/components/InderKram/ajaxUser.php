<?php
include "config.php";

$data = json_decode(file_get_contents("php://input"));

$request = $data->request;

// Fetch All records
if($request == 1){
	$userData = mysqli_query($con,"select * from user order by uid desc");

	$response = array();
	while($row = mysqli_fetch_assoc($userData)){
	    $response[] = $row;
	}

	echo json_encode($response);
	exit;
}

// Add record
if($request == 2){
	$fname = $data->uname;
	$lname = $data->ulname;
	$adrs = $data->uadrs;
	$mail = $data->umail;
	$pwd = $data->upwd;


	$userData = mysqli_query($con,"SELECT * FROM users WHERE uname='".$fname."' && ulname='".$lname."' ");
	if(mysqli_num_rows($userData) == 0){
		mysqli_query($con,"INSERT INTO user(uname,ulname,uadrs,umail,pwd) VALUES('".$fname."','".$lname."','".$adrs."','".$mail."','".$pwd."')");
		echo "Add record";
	}else{
		echo "Username already exists.";
	}

	exit;
}

// Update record
if($request == 3){
	$id = $data->idu;
	$fname = $data->uname;
	$lname = $data->ulname;
	$adrs = $data->uadrs;
	$mail = $data->umail;
	$pwd = $data->upwd;

	mysqli_query($con,"UPDATE user SET uname='".$fname."',ulname='".$lname."',email='".$email."' WHERE id=".$id);
		 
	echo "Update record";
	exit;
}

// Delete record
if($request == 4){
	$id = $data->uid;

	mysqli_query($con,"DELETE FROM user WHERE idu=".$id);

	echo "Delete successfully";
	exit;
}
