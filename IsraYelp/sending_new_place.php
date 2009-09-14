<?php

$new_name = $_POST['new_name'];
$new_street = $_POST['new_street'];
$new_city = $_POST['new_city'];
$new_comment = $_POST['new_comment'];
$sender_email = $_POST['sender_email'];
	
$message .= "\nPlace's name: ";
$message .= $new_name;
$message .= "\nPlace's street: ";
$message .= $new_street;
$message .= "\nPlace's city: ";
$message .= $new_city;
$message .= "\ncomment: ";
$message .= $new_comment;

$to = "israyelp.co.il@gmail.com";
$subject = "new place - $new_name";
if (mail($to, $subject, $message, "From: $sender_email")) {
	$html = "<p>המייל נשלח בהצלחה.
				<br><br>
				<a href=\"./main.php\">חזור לדף הראשי.</a>
			</p>";
} else {
	$html = "<p>שליחת המייל נכשלה.
				<br><br>
				<a href=\"./new_place.php\">נסה שנית.</a>
			</p>";
}
  	
?>

<html>
<head>
	<title>הוספת מקום חדש |IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body dir="rtl">
<?php echo getHeadHTMLCode()?>

<div id="bodyContainer_Centered">
	<?php echo $html?>
</div>
</body>
</html>