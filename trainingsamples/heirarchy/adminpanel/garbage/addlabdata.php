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
 
  $coursename = test_input($_POST["labname"]);
  
  $date = test_input($_POST["date"]);
  
  $typea1 = test_input($_POST["typea1"]);
  $typeb1 = test_input($_POST["typeb1"]);
  $typec1 = test_input($_POST["typec1"]);
  $typed1 = test_input($_POST["typed1"]);
  $typea2 = test_input($_POST["typea2"]);
  $typeb2 = test_input($_POST["typeb2"]);
  $typec2 = test_input($_POST["typec2"]);
  $typed2 = test_input($_POST["typed2"]);
  $typea3 = test_input($_POST["typea3"]);
  $typeb3 = test_input($_POST["typeb3"]);
  $typec3 = test_input($_POST["typec3"]);
  $typed3 = test_input($_POST["typed3"]);
  $typea4 = test_input($_POST["typea4"]);
  $typeb4 = test_input($_POST["typeb4"]);
  $typec4 = test_input($_POST["typec4"]);
  $typed4 = test_input($_POST["typed4"]);
  $typea5 = test_input($_POST["typea5"]);
  $typeb5 = test_input($_POST["typeb5"]);
  $typec5 = test_input($_POST["typec5"]);
  $typed5 = test_input($_POST["typed5"]);
  $typea6 = test_input($_POST["typea6"]);
  $typeb6 = test_input($_POST["typeb6"]);
  $typec6 = test_input($_POST["typec6"]);
  $typed6 = test_input($_POST["typed6"]);
  
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


$sql = "INSERT INTO labinfo(labname, date, typea1, typeb1, typec1, typed1, typea2, typeb2, typec2, typed2, typea3, typeb3, typec3, typed3, typea4, typeb4, typec4, typed4, typea5, typeb5, typec5, typed5, typea6, typeb6, typec6, typed6) VALUES ('$coursename', '$date', '$typea1', '$typeb1', '$typec1', '$typed1', '$typea2', '$typeb2', '$typec2', '$typed2', '$typea3', '$typeb3', '$typec3', '$typed3', '$typea4', '$typeb4', '$typec4', '$typed4', '$typea5', '$typeb5', '$typec5', '$typed5', '$typea6', '$typeb6', '$typec6', '$typed6')";


if ($conn->query($sql) === TRUE) {
    
	echo '<script language="javascript">';
	echo 'alert("Data entered successfully!!");';
	echo 'window.location.href="addlabdata.html";';
	echo '</script>';
	
} else {
	
    echo '<script language="javascript">';
	echo 'alert("Failed to enter data!!");';
	echo 'window.location.href="addlabdata.html";';
	echo '</script>';
}
$conn->close();
?>