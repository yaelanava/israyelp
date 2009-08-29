<?php
session_start();

include './utils/functions.php';

	$biz_id = $_SESSION['biz_id'];
	$biz_type = $_SESSION['biz_type'];
		
	$biz_url = getBizURL($biz_type, $biz_id);
?>



<html>
<head>
	<title>���� ������ |IsraYelp</title>
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
	<p>��� ������ ��� �����.
		<br><br>
		<a href="./search.php">��� ����.</a>
	</p>
</div>
</body>
</html>