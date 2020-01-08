<?php
		session_start();
		if(!isset($_SESSION['name']))
		{
			echo "<script language=\"javascript\">";
			echo "alert(\"You are not authorized to view this page !!<br> Will be redirected.\");";
			echo 'window.location.href="loginpage.html";';
			echo "</script>";	
		}
		
		echo "<script language=\"javascript\">";
		echo "alert(\"Welcome Admin\");";
		
		echo "</script>";


?>

<html>

<head>

<style>

#welcomename
{
	
	margin-left: 25px;
}

#thelinks
{
	padding: 25px;
	border-top: 2px dashed #046ca3;
	border-bottom: 1px dashed #046ca3;
        box-shadow: inset 0 -1px 0 0 #046ca3, inset 0 1px 0 0 #046ca3, 0 1px 0 0 #046ca3, 0 -1px 0 0 #046ca3;
	margin-bottom: 1px;

}

body {
  font-family: Calibri;
  font-size: 20px;
  padding: 10px;
  border: 2px solid black;
  padding: 25px;
  background: url(admin_wallpaper3.jpg);
  background-repeat: no-repeat;
  background-size: auto;
}

a {
  position: relative;
  display: inline-block;
  transition: .3s;
  text-decoration: none;
}

a::after,
a::before {
  position: absolute;
  left: 0;
  content: '';
  width: 100%;
  height: 1px;
  background-color: green;
  opacity: 0;
  transition: .3s;
}

a:hover::before {
  top: 0;
  opacity: 1;
}

a:hover::after {
  bottom: 0;
  opacity: 1;
}

a:hover {
  color: green;
}

</style>
</head>

<body >
<div id="thelinks">
	<a href="combineaddition.php"><strong> Click here to add timetable information !</strong></a><br><br>
	
	<a href="combineremoval.php"><strong> Click here to make changes in the timetable ! </strong></a><br><br>
	
	<a href="addfacultydata.html"><strong> Click here to add or remove facultyinfo information !</strong></a><br><br>
	
	<a href="signuppage.html"><strong> Click here to create a new admin </strong></a><br><br>
	
</div>
<div id="welcomename">
	<?php echo "<p>Welcome ".$_SESSION['name']."!</p>"; ?>
</div>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo "<a href='logout.php'>Logout</a>"; ?>

</body>


</html>