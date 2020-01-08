<?php

if(!isset($_POST['set']))
{
	header("location: loginpage.html");
}


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



$sql = "SELECT * FROM admininfo WHERE username='$name'"; 

$result = $conn->query($sql);



if ($result->num_rows > 0) 
{
	$row = $result->fetch_assoc();
	
	if($row["password"] === $password)
	{
		session_start();
		$_SESSION['name'] = $name;
		header("Location: afterlogin.php");
	}
	
	else
	{
		
		echo '<script language="javascript">';
		echo 'alert("The password you entered is incorrect!\n Access Denied !!");';
		echo 'window.location.href="loginpage.html";';
		echo '</script>';
		
		
	}
    
}

else
{
	echo '<script language="javascript">';
	echo 'alert("The username you entered is not registered!\n Access Denied !!");';
	echo 'window.location.href="loginpage.html";';
	echo '</script>';
	
	//header("Location: loginpage.html");	
}


?>