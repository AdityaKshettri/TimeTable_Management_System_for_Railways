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



if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $coursename = test_input($_POST["coursename"]);
  
}

function test_input($data) {
   if(empty($data))
   {
	   echo '<script language="javascript">';
	   echo 'alert("course name field is empty !");';
	   echo 'window.location.href="addcoursedata.html";';
	   echo '</script>';
   }
   
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$sql = "DELETE FROM courseinfo
WHERE coursename = '$coursename'";



if ($conn->query($sql) === TRUE) {
    
	echo '<script language="javascript">';
	echo 'alert("Info removed !!!");';
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