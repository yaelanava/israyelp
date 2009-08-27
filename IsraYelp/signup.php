<?php

include './utils/functions.php';

if (isset($_POST['username']) && ('' != $_POST['username']) && 
	isset($_POST['email']) && ('' != $_POST['email']) &&
	isset($_POST['password']) && ('' != $_POST['password']) &&
	isset($_POST['confirmed_password']) && ('' != $_POST['confirmed_password'])) {
	createUser();
} else {
	echo "חלק מהשדות היו ריקים. בבקשה נסה שנית";
	die(0);
}

function createUser(){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$password = $_POST['password'];
	$confirmed_password = $_POST['confirmed_password'];
	
	
	
	if ($password !== $confirmed_password) {
		echo "<br/>סיסמאות לא מתאימות";		
	} else {
		$mysqli = getMysqliConnection();						
		$query = "SELECT * FROM `test`.`users` WHERE email='$email'";
		$result = $mysqli->query($query);
		$count = $result->num_rows;
		
		if ($count != 0) {
			echo "משתמש קיים";
			die(0);		
		}
		$today = getdate();
		$month_added=$today['mon'];
		
		if ($month_added=1)
			$month_added='ינואר';
		elseif ($month_added=2)
			$month_added='פברואר';
		elseif ($month_added=3)
			$month_added='מרץ';
		elseif ($month_added=4)
			$month_added='אפריל';
		elseif ($month_added=5)
			$month_added='מאי';
		elseif ($month_added=6)
			$month_added='יוני';
		elseif ($month_added=7)
			$month_added='יולי';
		elseif ($month_added=8)
			$month_added='אוגוסט';
		elseif ($month_added=9)
			$month_added='ספטמבר';
		elseif ($month_added=10)
			$month_added='אוקטובר';
		elseif ($month_added=11)
			$month_added='נובמבר';		
		else $month_added='דצמבר';
		
		$year_added=$today['year'];
		/*$query = "INSERT INTO `test`.`users` (
					`id` ,
					`username` ,
					`email` ,
					`city` ,
					`password` 
					)
				VALUES (
					NULL , '$username', '$username', '$city', PASSWORD( '$password' ) 
				)";*/
		$query="INSERT INTO `test`.`users` (
					`id` ,
					`username` ,
					`email` ,
					`city` ,
					`year_added` ,
					`month_added` ,
					`password`
					)
					VALUES (
					NULL , '$username', '$email', '$city', '$year_added', '$month_added', PASSWORD( '$password' )
					)";
				
				
		$result = $mysqli->query($query);
		if 	($result) {
			header("Location: signup_ssuccess.html");				
		} else {
			header("Location: signup_failure.html");				
		}
	}
}