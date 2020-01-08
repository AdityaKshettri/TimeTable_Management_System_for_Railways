<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "timetable";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

else
{
   echo "this is amazing: ";
}

 $name = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $name = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



$sql = "INSERT INTO admininfo(username,password)
VALUES ('$name', '$password')";



if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	echo '<script language="javascript">';
	echo 'alert("New Admin created successfully!!");';
	echo 'window.location.href="signuppage.html";';
	echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();

header("Location: signuppage.html");

?>