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
 
  $date = test_input($_POST["date"]);
  $slot1 = test_input($_POST["slot1"]);
  $slot2 = test_input($_POST["slot2"]);
  $slot3 = test_input($_POST["slot3"]);
  $slot4 = test_input($_POST["slot4"]);
  
}

if(empty($date))
   {
	   echo '<script language="javascript">';
	   echo 'alert("date field is empty !");';
	   echo 'window.location.href="combineremoval.php";';
	   echo '</script>';
   }
   
function test_input($data) {
   
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}





/*
$sql1 = "UPDATE timetablechart SET Slot1 = '$slot1' WHERE Date = '$date'";
	
	if ($conn->query($sql1) === TRUE) 
	{
		echo '<script language="javascript">';
		echo 'alert("Slot1 updated !!!");';
		//echo 'window.location.href="combineremoval.php";';
		echo '</script>';	
	}

*/	

if(!empty($slot1) && !empty($slot2) && !empty($slot3) && !empty($slot4))
{
	
	$sql1 = "UPDATE timetablechart SET Slot1 = '$slot1',Slot2 = '$slot2',Slot3 = '$slot3',Slot4 = '$slot4' WHERE Date = '$date'";
	echo "this is awesome:";
		
	if ($conn->query($sql1) === TRUE) 
	{
		
		echo '<script language="javascript">';
		echo 'alert("Slot 1, 2, 3, 4 updated !!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';	
	}

	else 
	{
		echo '<script language="javascript">';
		echo 'alert("Failed to update Slot 1, 2, 3, 4 data!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';
	}

}

else if(empty($slot1) && !empty($slot2) && !empty($slot3) && !empty($slot4))
{
	
	$sql1 = "UPDATE timetablechart SET Slot2 = '$slot2',Slot3 = '$slot3',Slot4 = '$slot4' WHERE Date = '$date'";
	echo "this is awesome:";
		
	if ($conn->query($sql1) === TRUE) 
	{
		
		echo '<script language="javascript">';
		echo 'alert("Slot 2, 3, 4 updated !!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';	
	}

	else 
	{
		echo '<script language="javascript">';
		echo 'alert("Failed to update Slot 2, 3, 4 data!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';
	}

}

else if(!empty($slot1) && empty($slot2) && !empty($slot3) && !empty($slot4))
{
	
	$sql1 = "UPDATE timetablechart SET Slot1 = '$slot1',Slot3 = '$slot3',Slot4 = '$slot4' WHERE Date = '$date'";
	echo "this is awesome:";
		
	if ($conn->query($sql1) === TRUE) 
	{
		
		echo '<script language="javascript">';
		echo 'alert("Slot 1, 3, 4 updated !!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';	
	}

	else 
	{
		echo '<script language="javascript">';
		echo 'alert("Failed to update Slot 1, 3, 4 data!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';
	}

}

else if(!empty($slot1) && !empty($slot2) && empty($slot3) && !empty($slot4))
{
	
	$sql1 = "UPDATE timetablechart SET Slot1 = '$slot1',Slot2 = '$slot2',Slot4 = '$slot4' WHERE Date = '$date'";
	echo "this is awesome:";
		
	if ($conn->query($sql1) === TRUE) 
	{
		
		echo '<script language="javascript">';
		echo 'alert("Slot 1, 2, 4 updated !!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';	
	}

	else 
	{
		echo '<script language="javascript">';
		echo 'alert("Failed to update Slot 1, 2, 4 data!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';
	}

}

else if(!empty($slot1) && !empty($slot2) && !empty($slot3) && empty($slot4))
{
	
	$sql1 = "UPDATE timetablechart SET Slot1 = '$slot1',Slot2 = '$slot2',Slot3 = '$slot3' WHERE Date = '$date'";
	echo "this is awesome:";
		
	if ($conn->query($sql1) === TRUE) 
	{
		
		echo '<script language="javascript">';
		echo 'alert("Slot 1, 2, 3 updated !!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';	
	}

	else 
	{
		echo '<script language="javascript">';
		echo 'alert("Failed to update Slot 1, 2, 3 data!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';
	}

}

else if(empty($slot1) && empty($slot2) && !empty($slot3) && !empty($slot4))
{
	
	$sql1 = "UPDATE timetablechart SET Slot3 = '$slot3',Slot4 = '$slot4' WHERE Date = '$date'";
	echo "this is awesome:";
		
	if ($conn->query($sql1) === TRUE) 
	{
		
		echo '<script language="javascript">';
		echo 'alert("Slot 3, 4 updated !!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';	
	}

	else 
	{
		echo '<script language="javascript">';
		echo 'alert("Failed to update Slot 3, 4 data!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';
	}

}

else if(!empty($slot1) && empty($slot2) && empty($slot3) && !empty($slot4))
{
	
	$sql1 = "UPDATE timetablechart SET Slot1 = '$slot1',Slot4 = '$slot4' WHERE Date = '$date'";
	echo "this is awesome:";
		
	if ($conn->query($sql1) === TRUE) 
	{
		
		echo '<script language="javascript">';
		echo 'alert("Slot 1, 4 updated !!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';	
	}

	else 
	{
		echo '<script language="javascript">';
		echo 'alert("Failed to update Slot 1, 4 data!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';
	}

}

else if(!empty($slot1) && !empty($slot2) && empty($slot3) && empty($slot4))
{
	
	$sql1 = "UPDATE timetablechart SET Slot1 = '$slot1',Slot2 = '$slot2' WHERE Date = '$date'";
	echo "this is awesome:";
		
	if ($conn->query($sql1) === TRUE) 
	{
		
		echo '<script language="javascript">';
		echo 'alert("Slot 1, 2 updated !!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';	
	}

	else 
	{
		echo '<script language="javascript">';
		echo 'alert("Failed to update Slot 1, 2 data!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';
	}

}

else if(empty($slot1) && !empty($slot2) && empty($slot3) && !empty($slot4))
{
	
	$sql1 = "UPDATE timetablechart SET Slot2 = '$slot2',Slot4 = '$slot4' WHERE Date = '$date'";
	echo "this is awesome:";
		
	if ($conn->query($sql1) === TRUE) 
	{
		
		echo '<script language="javascript">';
		echo 'alert("Slot 2, 4 updated !!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';	
	}

	else 
	{
		echo '<script language="javascript">';
		echo 'alert("Failed to update Slot 2, 4 data!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';
	}

}

else if(!empty($slot1) && empty($slot2) && !empty($slot3) && empty($slot4))
{
	
	$sql1 = "UPDATE timetablechart SET Slot1 = '$slot1',Slot3 = '$slot3' WHERE Date = '$date'";
	echo "this is awesome:";
		
	if ($conn->query($sql1) === TRUE) 
	{
		
		echo '<script language="javascript">';
		echo 'alert("Slot 1, 3 updated !!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';	
	}

	else 
	{
		echo '<script language="javascript">';
		echo 'alert("Failed to update Slot 1, 3 data!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';
	}

}

else if(empty($slot1) && !empty($slot2) && !empty($slot3) && empty($slot4))
{
	
	$sql1 = "UPDATE timetablechart SET Slot2 = '$slot2',Slot3 = '$slot3' WHERE Date = '$date'";
	echo "this is awesome:";
		
	if ($conn->query($sql1) === TRUE) 
	{
		
		echo '<script language="javascript">';
		echo 'alert("Slot 2, 3 updated !!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';	
	}

	else 
	{
		echo '<script language="javascript">';
		echo 'alert("Failed to update Slot 2, 3 data!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';
	}

}

else if(!empty($slot1) && empty($slot2) && empty($slot3) && empty($slot4))
{
	
	$sql1 = "UPDATE timetablechart SET Slot1 = '$slot1' WHERE Date = '$date'";
	echo "this is awesome:";
		
	if ($conn->query($sql1) === TRUE) 
	{
		
		echo '<script language="javascript">';
		echo 'alert("Slot 1 updated !!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';	
	}

	else 
	{
		echo '<script language="javascript">';
		echo 'alert("Failed to update Slot 1 data!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';
	}

}

else if(empty($slot1) && !empty($slot2) && empty($slot3) && empty($slot4))
{
	
	$sql1 = "UPDATE timetablechart SET Slot2 = '$slot2' WHERE Date = '$date'";
	echo "this is awesome:";
		
	if ($conn->query($sql1) === TRUE) 
	{
		
		echo '<script language="javascript">';
		echo 'alert("Slot 2 updated !!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';	
	}

	else 
	{
		echo '<script language="javascript">';
		echo 'alert("Failed to update Slot 2 data!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';
	}

}



else if(empty($slot1) && empty($slot2) && !empty($slot3) && empty($slot4))
{
	
	$sql1 = "UPDATE timetablechart SET Slot3 = '$slot3' WHERE Date = '$date'";
	echo "this is awesome:";
		
	if ($conn->query($sql1) === TRUE) 
	{
		
		echo '<script language="javascript">';
		echo 'alert("Slot 3 updated !!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';	
	}

	else 
	{
		echo '<script language="javascript">';
		echo 'alert("Failed to update Slot 3 data!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';
	}

}


else if(empty($slot1) && empty($slot2) && empty($slot3) && !empty($slot4))
{
	
	$sql1 = "UPDATE timetablechart SET Slot4 = '$slot4' WHERE Date = '$date'";
	echo "this is awesome:";
		
	if ($conn->query($sql1) === TRUE) 
	{
		
		echo '<script language="javascript">';
		echo 'alert("Slot 4 updated !!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';	
	}

	else 
	{
		echo '<script language="javascript">';
		echo 'alert("Failed to update Slot 4 data!!");';
		echo 'window.location.href="combineremoval.php";';
		echo '</script>';
	}

}






		//echo '<script language="javascript">';
		//echo 'window.location.href="combineremoval.php";';
		//echo '</script>';
		

$conn->close();
?>