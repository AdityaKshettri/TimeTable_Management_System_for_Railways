<?php
require 'db_conn.php';
session_start();
?>

<html>

<head>
    <title>Railway</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
	<style>
	
	#thelinks
{
	padding: 25px;
	border-top: 2px dashed #046ca3;
	border-bottom: 1px dashed #046ca3;
        box-shadow: inset 0 -1px 0 0 #046ca3, inset 0 1px 0 0 #046ca3, 0 1px 0 0 #046ca3, 0 -1px 0 0 #046ca3;
	margin-bottom: 1px;

}

	#thelinkstwo {
	margin-left: 560px;	
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


<body background="s1.jpg">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">North Eastern Railway</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="home.php">Home</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title"></span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="home.php">Home</a>
        </div>
        <br><br>
                   <div class="page-content"><center>
                
                <center>
        <div class="mdl-card mdl-shadow--16dp" style="width:1280px">
        <div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Courses Available</div>
                        <br>
                        </div>
        <br><br>
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--8dp">

  <thead>
    <tr>
      <th>Course Id</th>
      <th>Course name</th>
      <th>Start Date</th>
      <th>End Date</th>
    </tr>
  </thead>
  <tbody>
        <form action='course.php' method="POST">
            <?php
                $sql = "SELECT * from course";
                $result = mysqli_query($conn,$sql);
	            while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td><b>" . $row['id'] . "</b></td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['start'] . "</td>";
                    echo "<td>" . $row['end'] . "</td>";                              
                    echo "</tr>";
                }
	        ?>
            </tbody>
</table>
<br><br>

                    </form>
                    
        


        </div>
        </center>

            </div>
        </main>
		
		<div id="thelinks">
		<div id="thelinkstwo">
		<a href="../../mainhomepage.html"><strong> Click here to go to home page </strong></a>
		</div>
		</div>
		
    </body>
</html>
