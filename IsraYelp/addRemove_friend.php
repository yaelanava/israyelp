<?php
session_start();

include './utils/functions.php';

$mysqli = getMysqliConnection();

$user_id = $_SESSION['user_id'];
$friend_id = $_GET['friend_id'];

$friend_name = $_GET['friend_name'];

if (isset($_GET['remove'])){
	$query1 = "DELETE FROM `friends` WHERE `friends`.`user_id`=$user_id AND `friends`.`friend_id`=$friend_id LIMIT 1;";
	$query2 = "DELETE FROM `friends` WHERE `friends`.`user_id`=$friend_id AND `friends`.`friend_id`=$user_id LIMIT 1;";
	$result1 = $mysqli->query($query1);
	$result2 = $mysqli->query($query2);
	if ($result1 && $result2) {
		$msg = "הסרת $friend_name כחבר הצליחה.";
	} else {
		$msg = "הסרת $friend_name כחבר נכשלה.";		
	}	
	$return_url = "<A href=\"./user_friends.php\"> חזור לחשבון שלי. </A>";
			
} else { //insert
	$query = "SELECT * from `friends` WHERE user_id=$user_id and friend_id=$friend_id";		
	$result = $mysqli->query($query);
	if ($result->num_rows != 0) {
		$msg = "$friend_name כבר חבר שלך!";
	} else {
		$query = "INSERT INTO `friends` (
				`user_id` ,
				`friend_id` 
			)
			VALUES 
				('$user_id', '$friend_id'), 
				('$friend_id', '$user_id')
			;";
		$result = $mysqli->query($query);	
		if ($result) {
			$msg = "הוספת את $friend_name כחבר.";
		} else {
			$msg = "הוספת $friend_name כחבר נכשלה.";		
		}
		$return_url = "<A href=\"./user_profile.php?user_id=".$friend_id."\"> חזור לחשבון של $friend_name. </A>";
	}
}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> הוספת חבר | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css"> 
</head>

<body dir="rtl">

<?php echo getHeadHTMLCode()?>

<div id="bodyContainer_Centered">
	<p><?php echo $msg?>
		<br><br>
		<?php
			echo $return_url; 
		?>
		
	</p>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>