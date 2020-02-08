<?php

$servername = "localhost";
$username = "qelvil20";
$password = "villanueva";
$dbname = "qelvil20";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->close();
?> 
