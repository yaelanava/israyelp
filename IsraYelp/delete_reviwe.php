<?php 
	session_start();
	include './utils/functions.php';
	
	$review_id=$_GET['reviwe_id'];
	
	$mysqli = getMysqliConnection();
	$delete_query = "DELETE FROM `reviews` WHERE `reviews`.`id` = '$review_id' LIMIT 1";
	$mysqli->query($delete_query);	
	
?>


<head>
	<title> מחיקת ביקורת </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css"> 
</head>

<body dir="rtl">
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
	<p>הביקורת נמחקה בהצלחה.
		<br><br>
		<a href="./about_me.php"   id="Zprofile_footer">חזור לחשבון שלי.</a>
	</p>
</div>





