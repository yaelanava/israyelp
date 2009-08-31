<?php
session_start();

include './utils/functions.php';

if ($_GET['logout']){
	session_destroy();
	header("Location:main.php");
	die(0);				
}

if (isset($_POST['email']) && ('' != $_POST['email']) && 
	isset($_POST['password']) && ('' != $_POST['password'])) {
	loginUser();
} else {
	header("location:login.html");
}

function loginUser(){
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	
	$mysqli = getMysqliConnection();	
	
	$query = "SELECT * FROM `test`.`users` WHERE email='$email' and password=PASSWORD('$password')";
	$result = $mysqli->query($query);
	$count = $result->num_rows;	
	if($count==1){
		$user = mysqli_fetch_assoc($result);
		$_SESSION['user_id'] = $user['id'];	
		$_SESSION['username'] = $user['username'];
		$_SESSION['email'] = $email;
		if ($_GET['returnUrl']){
			header("location:".$_GET['returnUrl']);			
		} else {
			header("location:login_success.php");	
		}
	} else {
		echo "דוא'ל או סיסמא לא נכונים";
	}	
}