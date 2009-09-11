<?php 
	session_start();
	include './utils/functions.php';
	
	$review_id=$_GET['review_id'];
	$user_id = $_SESSION['user_id_rev'];
	
	$mysqli = getMysqliConnection();
	$review_query = "SELECT * FROM `reviews` WHERE `reviews`.`id` = '$review_id' LIMIT 1";
	$result_reviews=$mysqli->query($review_query);
	$review = mysqli_fetch_assoc($result_reviews);
	$the_review=$review['review'];
	
	$query_user = "SELECT * FROM `users` WHERE id='$user_id'";
	$result_user = $mysqli->query($query_user);
	$user = mysqli_fetch_assoc($result_user);
	
	$biz_id = $review['biz_id'];
	$biz_type = $review['biz_type'];
	$query = "SELECT * FROM `$biz_type` WHERE id='$biz_id'";
	$result = $mysqli->query($query);
	$biz = mysqli_fetch_assoc($result);
	$biz_url = getBizURL($biz_type, $biz_id);

	$html = "<div class=\"clearfix\">	
				<table cellpadding=\"20\" cellspacing=\"1\" border=\"0\" >
					<tr>
						<td>
							<DIV class=\"clearStyles photoBox\">
								<A href=\"./about_me.php?external_user=".$user['id']."\" rel=\"nofollow\"><IMG style=\"WIDTH: 40px; HEIGHT: 40px\" alt=\"התמונה של " . $user['username'] ."\" src=\"".getUserPictureSrc($user['id'], "./")."\"></A>
							</div>
							<em class=\"smaller grey\">". $user['username'] ."</em>
						</td>
						<td>
							ביקורת עבור: 
							<a href=\"$biz_url\"><strong>".$biz['name']."</strong></a><br><br><strong>".$review['title'] ."</strong>
							
							<br/><em>".$the_review."</em>
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

<body dir="rtl">
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

<div id="navContainer">
		<ul>
			
			<LI class="header" id="writeReview"><A   href="./write_review.php" >כתוב ביקורת</A> | </LI>
			<LI class="header" id="findReview"><A   href="./find_review.php" >חפש ביקורת</A></LI>
			
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "login.php";}?> > <?php if (session_is_registered('username')) {echo "התנתק";} else {echo "כנס";}?></A></LI>
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "about_me.php?external_user=".$_SESSION['user_id']."";} else{echo "signup.php?profile=1";}?> >החשבון שלי </A> | </LI>
		</ul>
</div>

<div id="bodyContainer_Centered">
	<p>
		<?php echo $html; ?>
	</p>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>