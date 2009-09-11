<?php 
session_start();
	
include './utils/functions.php';

$mysqli = getMysqliConnection();	

$fav_biz_id = $_GET['fav_biz_id'];
$fav_biz_type = $_GET['fav_biz_type'];
$user_id = $_SESSION['user_id'];		
$biz_url = getBizURL($fav_biz_type, $fav_biz_id);


$query = "SELECT * FROM `favorites` WHERE user_id='$user_id' 
		and biz_type='$fav_biz_type' 
		and biz_id='$fav_biz_id'";
$result = $mysqli->query($query);
$count = $result->num_rows;
if ($count == 0) {
	$type_name = mysql_real_escape_string($fav_biz_type);
	$query = "INSERT INTO .`favorites` (
				`user_id` ,
				`biz_id` ,
				`biz_type` 	
			)VALUES (
				'$user_id' , '$fav_biz_id', '$type_name'
			);";
	$result = $mysqli->query($query);	
	if 	($result) {
		$bookmark_msg = "����� ���� ������ ������.";
	} else {
		$bookmark_msg = "����� ����� ����� ����� �����, ��� ��� ���.";		
	}		
} else {
	$bookmark_msg = "���� �� ��� ���� ������ ������� �������� �����.";			
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>����� �������� | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>
<body dir="rtl">
<?php echo getHeadHTMLCode()?>

<div id="bodyContainer_Centered">
	<p><?php echo $bookmark_msg?></p>
	<a href="<?php echo $biz_url?>">��� ��� ��� ����� ��� �����.</a>
</div>
</body>
</html>