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

else{
	echo "connected: ";
}	

// sql to create table

 echo "sab perfectly fine hai: ";
 
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $coursename = test_input($_POST["coursename"]);
  
  $date = test_input($_POST["date"]);
  
  $typea1 = test_input($_POST["typea1"]);
  $typeb1 = test_input($_POST["typeb1"]);
  $typec1 = test_input($_POST["typec1"]);
  $typea2 = test_input($_POST["typea2"]);
  $typeb2 = test_input($_POST["typeb2"]);
  $typec2 = test_input($_POST["typec2"]);
  $typea3 = test_input($_POST["typea3"]);
  $typeb3 = test_input($_POST["typeb3"]);
  $typec3 = test_input($_POST["typec3"]);
  $typea4 = test_input($_POST["typea4"]);
  $typeb4 = test_input($_POST["typeb4"]);
  $typec4 = test_input($_POST["typec4"]);
  $typea5 = test_input($_POST["typea5"]);
  $typeb5 = test_input($_POST["typeb5"]);
  $typec5 = test_input($_POST["typec5"]);
  $typea6 = test_input($_POST["typea6"]);
  $typeb6 = test_input($_POST["typeb6"]);
  $typec6 = test_input($_POST["typec6"]);
  $notice = test_input($_POST["notice"]);
  echo "sab perfectly fine hai: ";
}

function test_input($data) {
   if(empty($data))
   {
	   $data = "-";
   }
   
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$sql = "INSERT INTO courseinfo(coursename, date, typea1, typeb1, typec1, typea2, typeb2, typec2, typea3, typeb3, typec3, typea4, typeb4, typec4, typea5, typeb5, typec5, typea6, typeb6, typec6) VALUES ('$coursename', '$date', '$typea1', '$typeb1', '$typec1', '$typea2', '$typeb2', '$typec2', '$typea3', '$typeb3', '$typec3', '$typea4', '$typeb4', '$typec4', '$typea5', '$typeb5', '$typec5', '$typea6', '$typeb6', '$typec6')";


if ($conn->query($sql) === TRUE) {
    
	echo '<script language="javascript">';
	echo 'alert("Data entered successfully!!");';
	echo 'window.location.href="addcoursedata.html";';
	echo '</script>';
	
} else {
	
    echo '<script language="javascript">';
	echo 'alert("Failed to enter data!!");';
	echo 'window.location.href="addcoursedata.html";';
	echo '</script>';
}
$conn->close();
?>