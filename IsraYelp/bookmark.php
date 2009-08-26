<?php 
session_start();
	
include './utils/functions.php';
	
$rest_name = $_SESSION['rest_name'];
$username = $_SESSION['username'];

$mysqli = getMysqliConnection();	
$query = "SELECT * FROM `test`.`users` WHERE username='$username'";
$result = $mysqli->query($query);

$user = mysqli_fetch_assoc($result);
$userID = $user['id'];		

$query = "SELECT * FROM `test`.`favorites` WHERE user_id='$userID' and restaurant='$rest_name'";
$result = $mysqli->query($query);
$count = $result->num_rows;
if ($count == 0) {
	$query = "INSERT INTO `test`.`favorites` (
				user_id ,
				restaurant
			)VALUES (
				'$userID' , '$rest_name'
			)";
	$result = $mysqli->query($query);	
	if 	($result) {
		header("Location: bookmark_success.html");		
	} else {
		header("Location: bookmark_failure.html");		
	}		

} else {
	header("Location: bookmark_already.html");	
}

echo "you've already bookmarked this place";

?>