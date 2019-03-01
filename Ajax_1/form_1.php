<?php
	$firstName = $_GET['firstName'];
	$surName = $_GET['surName'];
	$age = $_GET['age'];
	$email = $_GET['email'];
	echo "<h2>Response Demo Form</h2><h3> ";
	echo "You submitted the following information<br><ul>";
	echo "<li>Naam: <strong> $firstName $surName</strong></li>";
	echo "<li>Age: <strong> $age</strong></li>";
	echo "<li><strong>Email: $email </strong></li>";
	echo "</li></ul></h3>";
	$today = date("F j, Y, g:i a"); 
	echo "Current server time: $today";
?>