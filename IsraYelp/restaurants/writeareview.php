<?php
session_start();

if (isset($_POST['rest_id']) && ('' != $_POST['rest_id']) && 
	isset($_POST['title']) && ('' != $_POST['title']) && 
	isset($_POST['review']) && ('' != $_POST['review']) && 
	isset($_POST['grading']) && ('' != $_POST['grading'])) {
	
	$rest_id = $_POST['rest_id'];
	$review = $_POST['review'];
	$grading = $_POST['grading'];
	$title = $_POST['title'];
	$useremail = $_SESSION['email']; 

	$rest_url = "./restaurant.php?rest_id=".$rest_id;
	
	$mysqli = new mysqli('localhost', 'administrator', '', 'test');
	
	$query = "SELECT * FROM `test`.`users` WHERE email='$useremail'";
	$result = $mysqli->query($query);
	
	$user = mysqli_fetch_assoc($result);
	$userID = $user['id'];
	
	$query = "INSERT INTO `test`.`reviews` (
				id, 
				restaurant_id, 
				user_id, 
				grading, 
				title, 
				review
			) VALUES (
				NULL , '$rest_id', '$userID', '$grading', '$title', '$review'
			);";
			
	$result = $mysqli->query($query);
		
} else {
	echo "חלק מהשדות היו ריקים";
	die(0);	
}

?>	
	
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> כתיבת ביקורת | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../mystyle.css">  	
</head>

<body dir="rtl">
<div id="head">
		<div id="logo">
			<A href="../main.php">Yelp</A>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>
<div id="bodyContainer_Centered">
	<p><?php if ($result) {echo "הביקורת נשמרה בהצלחה.";} else {echo "הביקורת לא נשמרה. אנא נסה שוב";}?>
		<br><br>
		<a href="<?php echo $rest_url?>">לחץ כאן כדי לחזור לדף המסעדה.</a>
	</p>
</div>
</body>
</html>