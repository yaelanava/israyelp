<?php 

session_start();
	
include './utils/functions.php';
	
$mysqli = getMysqliConnection();
	
$review_id = $_GET['review_id'];

//find review
$query = "SELECT * FROM `reviews` WHERE id=$review_id LIMIT 1";
$result = $mysqli->query($query);
$review = mysqli_fetch_assoc($result);
$grading = $review['grading'];	
$biz_type = $review['biz_type'];
$biz_id = $review['biz_id'];

//delete review
$query = "DELETE FROM `reviews` WHERE id=$review_id LIMIT 1";
$result = $mysqli->query($query);	
	
if ($result) {
	//update biz grading
	$query = "SELECT * FROM `$biz_type` WHERE id=$biz_id";
	$result = $mysqli->query($query);
	$biz = mysqli_fetch_assoc($result);
	
	$oldGrading = $biz['grading'];
	$num_reviews = $biz['num_reviews'];
	$newGrading = ceil(($oldGrading*$num_reviews - $grading) / --$num_reviews);
	
	$query = "UPDATE `$biz_type` SET `grading`='$newGrading', `num_reviews`='$num_reviews' WHERE id=$biz_id LIMIT 1";	
	$result = $mysqli->query($query);		
}
	
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
		<a href="./about_me.php" id="Zprofile_footer">חזור לחשבון שלי.</a>
	</p>
</div>





