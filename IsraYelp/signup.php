<?php
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
		$mysqli = new mysqli('localhost', 'administrator', '', 'test');
		
		/* check connection */
		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}
		
		$query = "SELECT * FROM `test`.`users` WHERE email='$email'";
		$result = $mysqli->query($query);
		$count = $result->num_rows;
		
		if ($count != 0) {
			echo "משתמש קיים";
			die(0);		
		}
		
		$query = "INSERT INTO `test`.`users` (
					`id` ,
					`username` ,
					`email` ,
					`city` ,
					`password` 
					)
				VALUES (
					NULL , '$username', '$email', '$city', PASSWORD( '$password' ) 
				)";
				
				
		$result = $mysqli->query($query);
		if 	($result) {
			header("Location: signup_ssuccess.html");				
		} else {
			header("Location: signup_failure.html");				
		}
	}
}