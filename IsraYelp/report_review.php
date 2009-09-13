<?php

session_start();

include './utils/functions.php';

$review_id = $_GET['review_id'];
$biz_id = $_GET['biz_id'];
$biz_type = $_GET['biz_type'];

$to = "israyelp.co.il@gmail.com";
$subject = "דיווח על ביקורת מס $review_id";

$biz_url = getBizURL($biz_type, $biz_id);

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : "";
$user_email = isset($_SESSION['email']) ? $_SESSION['email'] : "";

$message = "user_id=$user_id, user_email=$user_email\n\nbiz_type=$biz_type, biz_id=$biz_id";

if (mail($to, $subject, $message)) {
	$html = "<p>הדיווח נשלח בהצלחה.";

} else {
	$html = "<p>שליחת הדיווח נכשלה.";
}
$html .= "	<br><br>
			<a href=\"./$biz_url\">חזור לדף הקודם.</a>
		</p>";
?>

<html>
<head>
	<title>דיווח על ביקורת לא הולמת |IsraYelp</title>
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