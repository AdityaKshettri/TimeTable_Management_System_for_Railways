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

$sql = "SELECT * FROM courseinfo";

$result = $conn->query($sql);


$conn->close();

?>

<!DOCTYPE html>


<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

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
    background-color: #f1f1c1;
}

</style>
</head>

<body background="sabme.jpg">


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'CourseTimeTable')">CourseTimeTable</button>
  
</div>

<!-- Tab content -->
<div id="CourseTimeTable" class="tabcontent">

<?php

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		
			echo	"<table id=\"t01\">
	
			<tr>
				<th colspan=\"7\">".$row["coursename"]."</th>
			</tr>
			
			<tr>
  
				<td>Date</td>
				<td>0830-0930</td>
				<td>0930-1030</td>
				<td>1045-1145</td>
				<td>1145-1245</td>
				<td>1415-1515</td>
				<td>1530-1630</td>
	
			</tr>
			<tr>
				<td>".$row["date"]."</td>
				<td>".$row["typea1"].$row["typeb1"].$row["typec1"]."</td>
				<td>".$row["typea2"].$row["typeb2"].$row["typec2"]."</td>
				<td>".$row["typea3"].$row["typeb3"].$row["typec3"]."</td>
				<td>".$row["typea4"].$row["typeb4"].$row["typec4"]."</td>
				<td>".$row["typea5"].$row["typeb5"].$row["typec5"]."</td>
				<td>".$row["typea6"].$row["typeb6"].$row["typec6"]."</td>
				
			</tr>
  
			<tr>
				<td colspan=\"7\">".$row["Notice"]."</td>
			</tr>
			</table><br><br>";
	
  
			//echo "facultyname: " . $row["facultyname"]. " - designation " . $row["designation"]. " date" . $row["date"]. "<br>"."<br>";
		
        
    }
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


</body>
</html>