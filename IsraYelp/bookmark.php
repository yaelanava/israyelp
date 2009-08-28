<?php 
session_start();
	
include './utils/functions.php';

$mysqli = getMysqliConnection();	

$biz_name = $_GET['biz_name'];
$biz_url = $_GET['biz_url'];

$user_id = $_SESSION['user_id'];		

$query = "SELECT * FROM `test`.`favorites` WHERE user_id='$user_id' and biz_url='$biz_url'";
$result = $mysqli->query($query);
$count = $result->num_rows;
if ($count == 0) {
	$query = "INSERT INTO `test`.`favorites` (
				`user_id` ,
				`biz_name` ,
				`biz_url` 	
			)VALUES (
				'$user_id' , '$biz_name', '$biz_url'
			);";
	$result = $mysqli->query($query);	
	if 	($result) {
		$bookmark_msg = "'".$biz_name."' ���� ������ ����� �����.";
	} else {
		$bookmark_msg = "����� ����� '".$biz_name."' ����� ����� �����. ��� ��� ���.";		
	}		
} else {
	$bookmark_msg = "'".$biz_name."' ��� ���� ������ ������� �������� �����.";			
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
<div id="head">
		<div id="logo">
			<A href="./main.php">Yelp</A>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>
<div id="bodyContainer_Centered">
	<p><?php echo $bookmark_msg?></p>
	<a href="<?php echo $biz_url?>">��� ��� ��� ����� ��� �����.</a>
</div>
</body>
</html>