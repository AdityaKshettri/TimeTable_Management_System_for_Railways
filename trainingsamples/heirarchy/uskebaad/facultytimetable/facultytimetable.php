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

$sql = "SELECT * FROM facultyinfo";

$result = $conn->query($sql);
$result1 = $conn->query($sql);
$result2 = $conn->query($sql);

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

#tablehead
{
	background-color: #D3D3D3;
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

#thelinkstwo {
	margin-top:20px;
	margin-left: 590px;	
  position: relative;
  display: inline-block;
  transition: .3s;
  text-decoration: none;
}

#thelinkstwo::after,
#thelinkstwo::before {
  position: absolute;
  left: 0;
  content: '';
  width: 100%;
  height: 1px;
  background-color: green;
  opacity: 0;
  transition: .3s;
}

#thelinkstwo:hover::before {
  top: 0;
  opacity: 1;
}

#thelinkstwo:hover::after {
  bottom: 0;
  opacity: 1;
}

#thelinkstwo:hover {
  color: green;
}



</style>
</head>

<body background="admin_wallpaper.jpg">


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'GazettedFaculty')">Gazetted Faculty</button>
  <button class="tablinks" onclick="openCity(event, 'NonGazettedFaculty')">Non Gazetted Faculty</button>
  <button class="tablinks" onclick="openCity(event, 'NonGazettedTelecomFaculty')">Non Gazetted Telecom Faculty</button>
</div>

<!-- Tab content -->
<div id="GazettedFaculty" class="tabcontent">

<?php

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		if($row["facultytype"] == "Gazetted Faculty")
		{
			echo	"<table id=\"t01\">
	
			<tr>
				<th colspan=\"7\" id=\"tablehead\">".$row["facultyname"]."</th>
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
				<td>".$row["subject1"]."</td>
				<td>".$row["subject2"]."</td>
				<td>".$row["subject3"]."</td>
				<td>".$row["subject4"]."</td>
				<td>".$row["subject5"]."</td>
				<td>".$row["subject6"]."</td>
			</tr>
  
			<tr>
				<td colspan=\"7\">".$row["Notice"]."</td>
			</tr>
			</table><br><br>";
	
  
			//echo "facultyname: " . $row["facultyname"]. " - designation " . $row["designation"]. " date" . $row["date"]. "<br>"."<br>";
		}
        
    }
}
 else {
    echo "0 results";
}

?>	
	
		
  
</div>

  

<div id="NonGazettedFaculty" class="tabcontent">

<?php

	if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
		
		if($row["facultytype"] == "Non Gazetted Faculty")
		{
			echo	"<table id=\"t01\">
	
			<tr>
				<th colspan=\"7\" id=\"tablehead\">".$row["facultyname"]."</th>
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
				<td>".$row["subject1"]."</td>
				<td>".$row["subject2"]."</td>
				<td>".$row["subject3"]."</td>
				<td>".$row["subject4"]."</td>
				<td>".$row["subject5"]."</td>
				<td>".$row["subject6"]."</td>
			</tr>
  
			<tr>
				<td colspan=\"7\">".$row["Notice"]."</td>
			</tr>
			</table><br><br>";
	
  
			//echo "facultyname: " . $row["facultyname"]. " - designation " . $row["designation"]. " date" . $row["date"]. "<br>"."<br>";
		}
        
    }
}
 else {
    echo "0 results";
}

?>	
	

</div>



<div id="NonGazettedTelecomFaculty" class="tabcontent">
  
  
<?php

	if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
		
		if($row["facultytype"] == "Non Gazetted Telecom Faculty")
		{
			echo	"<table id=\"t01\">
	
			<tr>
				<th colspan=\"7\" id=\"tablehead\">".$row["facultyname"]."</th>
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
				<td>".$row["subject1"]."</td>
				<td>".$row["subject2"]."</td>
				<td>".$row["subject3"]."</td>
				<td>".$row["subject4"]."</td>
				<td>".$row["subject5"]."</td>
				<td>".$row["subject6"]."</td>
			</tr>
  
			<tr>
				<td colspan=\"7\">".$row["Notice"]."</td>
			</tr>
			</table><br><br>";
	
  
			//echo "facultyname: " . $row["facultyname"]. " - designation " . $row["designation"]. " date" . $row["date"]. "<br>"."<br>";
		}
        
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

<div id="thelinks">
		<div id="thelinkstwo">
		<a href="../../irisethome.html"><strong> Click here to go back</strong></a>
		</div>
		</div>

</body>
</html>