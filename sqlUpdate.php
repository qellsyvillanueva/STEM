<?php


$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "school";

// Create connection to the database and server
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//arrange names alphabetically
$sql = "UPDATE students SET gradeLevel = '100' WHERE name = 'BIG BRAIN' ";
$result = $conn->query($sql);


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

