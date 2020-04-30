<?php

// Database Connection start
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peergroup";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Checking Connection for errors
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>