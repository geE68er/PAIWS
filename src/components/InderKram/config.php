<?php

$host = "mysql.webhosting32.1blu.de"    /* Host name */
$user = "s298619_3159941";         /* User */
$password = "Diese(passwort1337";         /* Password */
$dbname = "db298619x3159941";   /* Database name */

// Create connection
$con = mysqli_connect($host, $user, $password,$dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

