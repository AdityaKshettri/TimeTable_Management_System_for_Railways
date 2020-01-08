<?php

session_start();
session_destroy();


		echo '<script language="javascript">';
		echo 'alert("You have been succesfully logged out!");';
		echo 'window.location.href="loginpage.html";';
		echo '</script>';
?>