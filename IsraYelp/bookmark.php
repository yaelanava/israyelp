<?php 
	session_start();
	//$rest_name = $_POST['rest_name'];
	$rest_name = 'lukas';
	$username = $_SESSION['username'];
	
	$mysqli = new mysqli('localhost', 'administrator', '', 'test');
	$query = "SELECT * FROM `test`.`users` WHERE username='$username'";
	$result = $mysqli->query($query);
	
	
	$user = mysqli_fetch_assoc($result);
	$userID = $user['id'];
	
	$query = "INSERT INTO `test`.`favorites` (user_id ,restaurant)
		VALUES ('$userID' , '$rest_name')";
		
			
	$result = $mysqli->query($query);	
	
	if 	($result) {
		echo "ok";
	} else {
		echo "not ok";
	}
