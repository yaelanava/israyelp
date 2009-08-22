<?php
session_start();

if (!session_is_registered('username')) { 
	header("location:./login.php?returnUrl=restaurants.php");
	die(0);				
} 

if (isset($_POST['rest_name']) && ('' != $_POST['rest_name']) && 
	isset($_POST['comment']) && ('' != $_POST['comment']) && 
	isset($_POST['title']) && ('' != $_POST['title']) && 
	isset($_POST['rating']) && ('' != $_POST['rating'])) {
	saveReview();
} else {
	header("location:./tel-aviv/restaurants.php");
	//todo yael
	die(0);				
}

function saveReview(){
	$rest_name = $_POST['rest_name'];
	$comment = $_POST['comment'];
	$rating = $_POST['rating'];
	$title = $_POST['title'];
	$useremail = $_SESSION['email']; 
		
	$mysqli = new mysqli('localhost', 'administrator', '', 'test');
	
	$query = "SELECT * FROM `test`.`users` WHERE email=$useremail";
	$result = $mysqli->query($query);
	
	$user = mysqli_fetch_assoc($result);
	$userID = $user['id'];
	

	
	$query = "INSERT INTO `test`.`critiques` (
				`id` ,
				`user_id` ,
				`restaurant` ,
				`grading` ,
				`title` 
				`comment` 
			)
			VALUES (
				NULL , $userID, $rest_name, $rating,$title, $comment
			);";
			
	$result = $mysqli->query($query);	
	
	if 	($result) {
//		header("Location: ../../writeareview_ssuccess.html");
		echo "הביקורת נשמרה בהצלחה.";
	} else {
		echo "הביקורת לא נשמרה. אנא נסה שוב";
//		header("Location: ../../writeareview_failure.html");
	}
}
?>