<?php
session_start();

include './utils/functions.php';

$biz_id = $_POST['biz_id'];
$biz_type = $_POST['biz_type'];

if (isset($_POST['title']) && ('' != $_POST['title']) && 
	isset($_POST['review']) && ('' != $_POST['review']) && 
	isset($_POST['grading']) && ('' != $_POST['grading']) &&
	isset($_POST['biz_id']) && ('' != $_POST['biz_id']) &&
	isset($_POST['biz_type']) && ('' != $_POST['biz_type'])) {
	
	$review =  mysql_real_escape_string($_POST['review']);
	$grading = $_POST['grading'];
	$title = mysql_real_escape_string($_POST['title']);

	
	$city_id = $_SESSION['city_id'];
	$user_id = $_SESSION['user_id'];
		
	$biz_url = getBizURL($biz_type, $biz_id);
	$mysqli = getMysqliConnection();
	
	$query = "INSERT INTO `reviews` (
				id, 
				city_id,
				biz_id,
				biz_type, 
				user_id, 
				grading, 
				title, 
				review
			) VALUES (
				NULL , '$city_id', '$biz_id', '$biz_type', '$user_id', '$grading', '$title', '$review'
			);";
			
	$result = $mysqli->query($query);
	
	if ($result) {
		//update biz grading
		$query = "SELECT * FROM `$biz_type` WHERE id=$biz_id";
		$result = $mysqli->query($query);
		$biz = mysqli_fetch_assoc($result);
		
		$oldGrading = $biz['grading'];
		$num_reviews = $biz['num_reviews'];
		
		$newGrading = ceil(($oldGrading*$num_reviews + $grading) / ++$num_reviews);
		
		$query = "UPDATE `$biz_type` SET `grading`='$newGrading', `num_reviews`='$num_reviews' WHERE id=$biz_id LIMIT 1";	
		$result = $mysqli->query($query);		
	}
		
} else {
	header("Location: writeReviewForm.php?biz_type=$biz_type&biz_id=$biz_id&error");	
}

?>	
	
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> כתיבת ביקורת | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
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
	<p><?php if ($result) {echo "הביקורת נשמרה בהצלחה.";} else {echo "הביקורת לא נשמרה. אנא נסה שוב";}?>
		<br><br>
		
		<a href="<?php echo $biz_url;?>">לחץ כאן כדי לחזור לדף המקום.</a>
	</p>
</div>
</body>
</html>