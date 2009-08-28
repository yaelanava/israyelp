<?php
session_start();

include './utils/functions.php';

if (isset($_POST['title']) && ('' != $_POST['title']) && 
	isset($_POST['review']) && ('' != $_POST['review']) && 
	isset($_POST['grading']) && ('' != $_POST['grading']) &&
	isset($_POST['biz_id']) && ('' != $_POST['biz_id']) &&
	isset($_POST['biz_type']) && ('' != $_POST['biz_type'])) {
	
	$review = $_POST['review'];
	$grading = $_POST['grading'];
	$title = $_POST['title'];

	$biz_id = $_POST['biz_id'];
	$biz_type = $_POST['biz_type'];
	
	$city_id = $_SESSION['city_id'];
	$user_id = $_SESSION['user_id'];
		
	$biz_url = "./".$biz_type."/".substr($biz_type,0,strlen($biz_type)-1).".php?biz_id=".$biz_id;
	
	$mysqli = getMysqliConnection();
	
	$query = "INSERT INTO `test`.`reviews` (
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
		
} else {
	echo "��� ������ ��� �����";
	die(0);	
}

?>	
	
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> ����� ������ | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
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
	<p><?php if ($result) {echo "������� ����� ������.";} else {echo "������� �� �����. ��� ��� ���";}?>
		<br><br>
		<a href="<?php echo $biz_url?>">��� ��� ��� ����� ��� ������.</a>
	</p>
</div>
</body>
</html>