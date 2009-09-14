<?php 
session_start();
include './utils/functions.php';

if (isset($_GET['biz_id'])&&isset($_GET['biz_type'])){
	$returnUrl = getBizURL($_GET['biz_type'], $_GET['biz_id']);
} else {
	$returnUrl = "./main.php";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">

	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css"> 
	<title>הרשמה | IsraYelp</title>
</head>

<body  dir="rtl">
<?php echo getHeadHTMLCode()?>


<div id="bodyContainer_Centered">	
	<p><?php if (isset($_SESSION['username'])) print("אתה מחובר כ-".$_SESSION['username'])."." ?></p>
	<a href=<?php echo $returnUrl?>>לחץ כאן להמשך גלישה באתר.</a>
</div>
</body>
</html>