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
 
  $facultyname = test_input($_POST["facultyname"]);
  $designation = test_input($_POST["designation"]);
  $date = test_input($_POST["date"]);
  $subject1 = test_input($_POST["subject1"]);
  $subject2 = test_input($_POST["subject2"]);
  $subject3 = test_input($_POST["subject3"]);
  $subject4 = test_input($_POST["subject4"]);
  $subject5 = test_input($_POST["subject5"]);
  $subject6 = test_input($_POST["subject6"]);
  $facultytype = test_input($_POST["facultytype"]);
  $notice = test_input($_POST["notice"]);
 
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


$sql = "INSERT INTO facultyinfo(facultyname,designation, date, subject1, subject2, subject3, subject4, subject5, subject6, facultytype, Notice)
VALUES ('$facultyname', '$designation', '$date', '$subject1', '$subject2', '$subject3', '$subject4', '$subject5', '$subject6', '$facultytype', '$notice')";



if ($conn->query($sql) === TRUE) {
    
	echo '<script language="javascript">';
	echo 'alert("Data entered successfully!!");';
	echo 'window.location.href="addfacultydata.html";';
	echo '</script>';
	
} else {
	
    echo '<script language="javascript">';
	echo 'alert("Failed to enter data!!");';
	echo 'window.location.href="addfacultydata.html";';
	echo '</script>';
}




$conn->close();
?>