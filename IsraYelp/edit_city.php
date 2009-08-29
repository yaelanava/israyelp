<?php 
	session_start();
	include './utils/functions.php';
	
	if (isset($_POST['new_city']) && ('' != $_POST['new_city'])) {
		$new_city=$_POST['new_city'];
	}
		
	else {
		header("location:edit_city_fail.php");	
		die(0);
	}
	$id = $_SESSION['user_id'];
	
?>



<?php										
	//counting how much reviews this user wrote
	$mysqli = new mysqli('localhost', 'administrator', '', 'test');
	$user_query = "SELECT * FROM `test`.`users` WHERE id='$id'";
	$result_user_edit=$mysqli->query($user_query);
	$user_update = mysqli_fetch_assoc($result_user_edit);
	$added=$user_update['added'];
	//$update_query="UPDATE `test`.`users` SET `city` = '$new_city',WHERE `users`.`id` ='$id'";
	$update_query="UPDATE `test`.`users` SET `city` = '$new_city' WHERE `users`.`id` =$id LIMIT 1 ;";
	$mysqli->query($update_query);
?>

<head>
	<title> עדכון עיר </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css"> 
</head>
<body class= "us" id="IsraYelp_main_body" dir="rtl">

<div id="head">
		<div id="logo">
			<A href="./main.php"></A>
		</div>
		<div id="register">
			<p><?php if (session_is_registered('username')) print("אתה מחובר כ-" . $_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>


<div id="bodyContainer_Centered">
	<p>השינוי הושלם בהצלחה.
		<br><br>
		<a href="./about_me.php"   id="Zprofile_footer">.חזור לחשבון שלך</a>
	</p>
</div>





