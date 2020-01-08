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

$date1 = date('Y/m/d');
$date2 = date('Y/m/d');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
  $date1 = test_input($_POST["date1"]);
  $date2 = test_input($_POST["date2"]);
  
  
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


$sql = "SELECT * FROM timetablechart WHERE Date BETWEEN '$date1' AND '$date2'";

$result = $conn->query($sql);


$conn->close();

?>

<!DOCTYPE html>


<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


body {
  background: #D1D0D8;/* match border color */
  text-align: center;
}


#theform{
    border: 1px solid black;
    outline-style: solid;
    outline-color: red;
	padding:25px;
}

#heading{
  font: 64px 'Arial Narrow', sans-serif;
  color: #fefefe;
  text-transform: uppercase;
  letter-spacing: -4px;
  background-color: #f21554;
  border: 2px solid red;
  border-radius: 5px;
}

* {
    box-sizing: border-box;
}

#tablehead
{
	background-color: #D3D3D3;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

input[type=date], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
	border-style: solid;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
	
}

#thelinks
{
	padding-top: 5px;
	border-top: 2px dashed #046ca3;
	border-bottom: 1px dashed #046ca3;
        box-shadow: inset 0 -1px 0 0 #046ca3, inset 0 1px 0 0 #046ca3, 0 1px 0 0 #046ca3, 0 -1px 0 0 #046ca3;
	margin-bottom: 1px;

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


/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

.containerTab {
    padding: 80px;
	margin: 80px;
    color: black;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

.column {
    
    width: 98.5%;
    padding: 10px;
    text-align: center;
    font-size: 25px;
    cursor: pointer;
    color: black;
	
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
}
table#t01 {
    width: 100%;    
    background-color: #9ceffc;
}

</style>
</head>

<body background="sabme.jpg">


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'list')"><strong>The Timetable</strong></button>
  
</div>

<!-- Tab content -->
<div id="list" class="tabcontent">

<?php

	if ($result->num_rows > 0) {
		
	echo	"<table id=\"t01\"><tr>
			 <th colspan=\"7\" id=\"tablehead\">Monthly TimeTable</th>
			</tr>";
			
	echo    "<tr>
  
				<td><strong>Date</strong></td>
				<td><strong>09:45-11:15</strong></td>
				<td><strong>11:30-13:30</strong></td>
				<td><strong>14:00-15:15</strong></td>
				<td><strong>15:30-17:00</strong></td>
			</tr>";		
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		
			echo	"
	
			<tr>
				<td>".$row["Date"]."</td>
				<td>".$row["Slot1"]."</td>
				<td>".$row["Slot2"]."</td>
				<td>".$row["Slot3"]."</td>
				<td>".$row["Slot4"]."</td>
				
			</tr>
  
			
			";
    }
	
	echo "</table><br>";
}
 else {
    echo "0 results";
}

?>	
	
		
  
</div>

  

<script>

function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}


function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

<div class="container">
  <form action="combineremoval.php" method="post">
    
	<strong>Show Slot details:</strong>
    
	<div class="row">
      <div class="col-25">
        <label for="lname">From Date: </label>
      </div>
      <div class="col-75">
        <input type="date" id="date" name="date1" placeholder="Designation..">
      </div>
    </div><br>

	<div class="row">
      <div class="col-25">
        <label for="lname">To Date: </label>
      </div>
      <div class="col-75">
        <input type="date" id="date" name="date2" placeholder="Designation..">
      </div>
    </div><br>
	
	
	<div class="row">
      <input type="submit" value="Show Data">
    </div><br><br>
    
    
  </form>
  
</div><br><br>



<div class="container">
  <form action="combineremovaltwo.php" method="post">
    
    <strong>Remove Row:</strong>
	<div class="row">
      <div class="col-25">
        <label for="lname">Enter Date to remove Data from:</label>
      </div>
      <div class="col-75">
        <input type="date" id="date" name="Date" placeholder="Designation..">
      </div>
    </div><br>        
	
    <div class="row">
      <input type="submit" value="Remove Data">
    </div><br><br>
    
  </form>
  
</div><br><br>


<div class="container">
  <form action="combineremovalthree.php" method="post">
    
    <strong>Alter Data:</strong>
	<div class="row">
      <div class="col-25">
        <label for="lname">Date: </label>
      </div>
      <div class="col-75">
        <input type="date" id="date" name="date" placeholder="Designation..">
      </div>
    </div><br>        
	
	<div class="row">
      <div class="col-25">
        <label for="lname">Make changes in the slot: </label>
      </div>
      <div class="col-75">
	  
       09:45-11:15<input type="text" id="lname" name="slot1" placeholder="Enter new info...">
				  
				  
	   11:30-13:00<input type="text" id="lname" name="slot2" placeholder="Enter new info...">
				 
	
	   14:00-15:15<input type="text" id="lname" name="slot3" placeholder="Enter new info...">
				
				  
	   15:30-17:00<input type="text" id="lname" name="slot4" placeholder="Enter new info...">
				
				  
      </div>
    </div><br><br>
		
    <div class="row">
      <input type="submit" value="Add Data">
    </div><br><br>
    
  </form>
  
</div><br><br>



<div id="thelinks">
	<a href="afterlogin.php"><strong> Click here to go back </strong></a><br><br>
</div>


</body>
</html>