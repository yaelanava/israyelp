<?php 
session_start();
	
include './utils/functions.php';

$mysqli = getMysqliConnection();	

$biz_id = $_GET['biz_id'];
$biz_type = $_GET['biz_type'];

$user_id = $_SESSION['user_id'];		

if (isset($_GET['remove'])) {
	$query = "DELETE FROM `favorites` WHERE `favorites`.`user_id`=$user_id AND `favorites`.`biz_id`=$biz_id AND CONVERT(`favorites`.`biz_type` USING utf8)='$biz_type' LIMIT 1";
	$result = $mysqli->query($query);
	if 	($result) {
			$bookmark_msg = "המקום נמחק בהצלחה.";
		} else {
			$bookmark_msg = "פעולת מחיקת המקום נכשלה, אנא נסה שוב.";		
		}		
	$return_url = "./user_bookmarks.php";
	
} else { //insert
	$query = "SELECT * FROM `favorites` WHERE user_id=$user_id and biz_id=$biz_id and biz_type='$biz_type'";
	$result = $mysqli->query($query);
	$count = $result->num_rows;
	if ($count == 0) {
		$type_name = mysql_escape_string($biz_type);
		$query = "INSERT INTO .`favorites` (
					`user_id` ,
					`biz_id` ,
					`biz_type` 	
				)VALUES (
					'$user_id' , '$biz_id', '$biz_type'
				);";
		$result = $mysqli->query($query);	
		if 	($result) {
			$bookmark_msg = "המקום נרשם בהצלחה כמועדף.";
		} else {
			$bookmark_msg = "פעולת סימון כמקום מועדף נכשלה, אנא נסה שוב.";		
		}		
	} else {
		$bookmark_msg = "מקום זה כבר נמצא ברשימת המקומות המועדפים עלייך.";			
	}
	$return_url = getBizURL($biz_type, $biz_id);	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>הוספה למועדפים | IsraYelp</title>
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
	<p><?php echo $bookmark_msg?></p>
	<a href="<?php echo $return_url?>">לחץ כאן כדי לחזור לדף הקודם.</a>
</div>
</body>
</html>