<?php
 
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "school";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->) {
   die("Connection failed: " . $conn->connect_error);
}
 
$name = 'Landon';
$age = '9';
$gradeLevel = '17';
 
$sql = "INSERT INTO students (name, age, gradeLevel)
VALUES ('$name','$age', '$gradeLevel')";
 
if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
}
else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>

