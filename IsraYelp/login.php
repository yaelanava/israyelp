<?php
session_start();

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
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$mysqli = new mysqli('localhost', 'administrator', '', 'test');
	
//	/* check connection */
//	if (mysqli_connect_errno()) {
//	    printf("Connect failed: %s\n", mysqli_connect_error());
//	    exit();
//	}
	
	$query = "SELECT * FROM `test`.`users` WHERE email='$email' and password=PASSWORD('$password')";
	$result = $mysqli->query($query);
	$count = $result->num_rows;
	
//	/* free */
//    $result->close();
//    $mysqli->close();
	
	if($count==1){
		$user = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $user['username'];
		$_SESSION['email'] = $email;
		header("location:login_success.php");
	} else {
		echo "דוא'ל או סיסמא לא נכונים";
	}	
}