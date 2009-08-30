<?php 
	session_start();
	include './utils/functions.php';
	
	$review_id=$_GET['review_id'];
	$user_id = $_SESSION['user_id'];
	
	$mysqli = getMysqliConnection();
	$review_query = "SELECT * FROM `reviews` WHERE `reviews`.`id` = '$review_id' LIMIT 1";
	$result_reviews=$mysqli->query($review_query);
	$review = mysqli_fetch_assoc($result_reviews);
	$the_review=$review['review'];
	
	$query_user = "SELECT * FROM `test`.`users` WHERE id='$user_id'";
	$result_user = $mysqli->query($query_user);
	$user = mysqli_fetch_assoc($result_user);
	
	$biz_id = $review['biz_id'];
	$biz_type = $review['biz_type'];
	$query = "SELECT * FROM `test`.`$biz_type` WHERE id='$biz_id'";
	$result = $mysqli->query($query);
	$biz = mysqli_fetch_assoc($result);
	$biz_url = getBizURL($biz_type, $biz_id);

	$html = "<div class=\"clearfix\">	
				<table cellpadding=\"20\" cellspacing=\"1\" border=\"0\" >
					<tr>
						<td>
							<DIV class=\"clearStyles photoBox\">
								<A href=\"./user_reviwes.php?user_id=".$user['id']."\" rel=\"nofollow\"><IMG style=\"WIDTH: 40px; HEIGHT: 40px\" alt=\"התמונה של " . $user['username'] ."\" src=\"".getUserPictureSrc($user['id'], "./")."\"></A>
							</div>
							<em class=\"smaller grey\">". $user['username'] ."</em>
						</td>
						<td>
							
							<a href=\"$biz_url\">".$biz['name']."</a> - ".$review['title'] ."
							<br/>
							<br/>".$the_review."
						</td>
					</tr>
				</table>
			</div>	";
	
	
?>

<html>
<head>
	<title> ביקורת </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css"> 
</head>
<body class= "us" id="IsraYelp_main_body" dir="rtl">

<div id="head">
		<div id="logo">
			<A href="./main.php"></A>
		</div>
		<div id="register">
			<p><?php if (session_is_registered('username')) print("אתה מחובר כ-" . $_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>


<div id="bodyContainer_Centered">
	<p>
		<?php
			echo $html; 
		?>
	</p>
</div>

</body>
</html>



