<?php
session_start();

if (!session_is_registered('username')) { 
	header("location:../../login.php?returnUrl=restaurants.php");
	die(0);				
} 

if (isset($_POST['rest_name']) && ('' != $_POST['rest_name']) && 
	isset($_POST['comment']) && ('' != $_POST['comment']) && 
	isset($_POST['rating']) && ('' != $_POST['rating'])) {
	saveReview();
} else {
	header("location:../restaurants.php");
	//todo
	die(0);				
}

function saveReview(){
	$rest_name = $_POST['rest_name'];
	$comment = $_POST['comment'];
	$rating = $_POST['rating'];
	
	$useremail = $_SESSION['email']; 
		
	$mysqli = new mysqli('localhost', 'administrator', '', 'test');
	
	$query = "SELECT * FROM `test`.`users` WHERE email='$useremail'";
	$result = $mysqli->query($query);
	
	$user = mysqli_fetch_assoc($result);
	$userID = $user['id'];
	
	$query = "INSERT INTO `test`.`critiques` (
				`id` ,
				`user_id` ,
				`restaurant` ,
				`grading` ,
				`review` 
			)
			VALUES (
				NULL , '$userID', '$rest_name', '$rating', '$comment'
			);";
			
	$result = $mysqli->query($query);
	if 	($result) {
		echo ".הביקורת נשמרה בהצלחה";
				header("location:writeareview_success.html");
	} else {
		echo "הביקורת לא נשמרה. אנא נסה שוב";				
	}
}
?>