<?php
session_start();

include './utils/functions.php';

$mysqli = getMysqliConnection();

$user_id = $_SESSION['user_id'];
$friend_id = $_GET['friend_id'];

$friend_name = $_GET['friend_name'];


$query = "INSERT INTO `friends` (
			`user_id` ,
			`friend_id` 
		)
		VALUES 
			('$user_id', '$friend_id'), 
			('$friend_id', '$user_id')
		;";
$result = $mysqli->query($query);
		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> הוספת חבר | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css"> 
</head>

<body dir="rtl">

<?php echo getHeadHTMLCode()?>

<div id="bodyContainer_Centered">
	<p><?php echo "הוספת את $friend_name כחבר."?>
		<br><br>
		<?php
			echo "<A href=\"./user_profile.php?user_id=".$friend_id."\"> חזור לחשבון של $friend_name. </A>"; 
		?>
		
	</p>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>