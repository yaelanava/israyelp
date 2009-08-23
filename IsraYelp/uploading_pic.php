<?php
	session_start();
	if (isset($_FILES['image']) && ('' != $_FILES['image']))
	{
		$temp_name = $_FILES['image']['tmp_name'];
	}
	else
		echo "there was an error";
	$id=$_SESSION['user_id'];
	$destination="./users_pics/".$id;
	copy($temp_name, $destination);

?>

<html>
<head>
	<title>כתוב ביקורת |IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body dir="rtl">
<div id="head">
		<div id="logo">
			<A href="./main.php">Yelp</A>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>
<div id="bodyContainer_Centered">
	<p>התמונה הועלתה בהצלחה.
	<br><br>
	<a href="./about_me.php"   id="Zprofile_footer">חזור לחשבון שלך</a>
	</p>
</div>
</body>
</html>






