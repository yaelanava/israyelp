<?php 
	session_start();
	
	$rest_name = $_SESSION['rest_name'];
	$username = $_SESSION['username'];
	
	$mysqli = new mysqli('localhost', 'administrator', '', 'test');
	$query = "SELECT * FROM `test`.`users` WHERE username='$username'";
	$result = $mysqli->query($query);
	
	
	$user = mysqli_fetch_assoc($result);
	$userID = $user['id'];
	
	
	
	$query = "SELECT * FROM `test`.`favorites` WHERE user_id='$userID' and restaurant='$rest_name'";
	$result = $mysqli->query($query);
	$count = $result->num_rows;
	if ($count == 0)
	{
		$query = "INSERT INTO `test`.`favorites` (user_id ,restaurant)
			VALUES ('$userID' , '$rest_name')";
		$result = $mysqli->query($query);	
		if 	($result) {
			echo "ok";
			} 
		else{
			echo "not ok";
			}
		
	}
	else 
		echo "you've already bookmarked this place";
	
	

	

