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
 
  $date = test_input($_POST["Date"]);
  
  $slot1 = test_input($_POST["Slot1"]);
  $faculty1 = test_input($_POST["faculty1"]);
  $slot2 = test_input($_POST["Slot2"]);
  $faculty2 = test_input($_POST["faculty2"]);
  $slot3 = test_input($_POST["Slot3"]);
  $faculty3 = test_input($_POST["faculty3"]);
  $slot4 = test_input($_POST["Slot4"]);
  $faculty4 = test_input($_POST["faculty4"]);

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


$sql = "INSERT INTO timetablechart(date, Slot1, faculty1, Slot2, faculty2, Slot3, faculty3, Slot4, faculty4) VALUES ('$date', '$slot1', '$faculty1', '$slot2', '$faculty2', '$slot3', '$faculty3', '$slot4', '$faculty4')";


if ($conn->query($sql) === TRUE) {
    
	echo '<script language="javascript">';
	echo 'alert("Data entered successfully!!");';
	echo 'window.location.href="combineaddition.php";';
	echo '</script>';
	
} else {
	
    echo '<script language="javascript">';
	echo 'alert("Failed to enter data!!");';
	echo 'window.location.href="combineaddition.php";';
	echo '</script>';
}
$conn->close();
?>