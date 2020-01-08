<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "timetable");//dbmsproject here is the name of the database being referred to 
   if(! $conn )
   {
     die('Could not connect: ' . mysqli_error());
   }
   mysqli_select_db($conn, 'timetable') or die(mysqli_error());
?>