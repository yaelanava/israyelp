<?php 
session_start();

include './utils/functions.php';

$mysqli = getMysqliConnection();

$review_id=$_GET['review_id'];

$review_query = "SELECT * FROM `reviews` WHERE `reviews`.`id`=$review_id LIMIT 1";
$result_reviews=$mysqli->query($review_query);
$review = mysqli_fetch_assoc($result_reviews);

$user_id = $review['user_id'];
$query_user = "SELECT * FROM `users` WHERE id=$user_id";
$result_user = $mysqli->query($query_user);
$user = mysqli_fetch_assoc($result_user);

$biz_id = $review['biz_id'];
$biz_type = $review['biz_type'];
$query = "SELECT * FROM `$biz_type` WHERE id=$biz_id";
$result = $mysqli->query($query);
$biz = mysqli_fetch_assoc($result);
$biz_url = getBizURL($biz_type, $biz_id);

$html = "<div>	
			<table cellpadding=\"0\" cellspacing=\"10\" border=\"0\" >
				<tr valign=top>
					<td width=80>
						<DIV class=\"clearStyles photoBox\">
							<A href=\"./user_profile.php?user_id=$user_id\"><IMG style=\"WIDTH: 40px; HEIGHT: 40px\" alt=\"התמונה של ".$user['username']."\" src=\"".getUserPictureSrc($user['id'])."\"></A>
						</div>
						<P class=\"reviewer_info\" style=\"float:right\"><A class=\"reviewer_name\" href=\"./user_profile.php?user_id=".$user['id']."\">". $user['username']. "</A></P>
						<br></br>
						<P class=\"reviewer_info\" style=\"float:right\">". $user['city']."</P>
					<td>
						ביקורת עבור: 
						<a href=\"$biz_url\"><strong>".$biz['name']."</strong></a>
						<br></br>
						<DIV class=\"ext_rating\">
							<DIV class=\"rating\">
								<IMG class=\"stars_". $review['grading'] ."\" title=\"".$review['grading']." כוכבים \" height=\"325\" alt=\"". $review['grading'] ."כוכבים\" src=\"./image/stars_map.png\" width=\"83\" />
							</DIV>
							<EM class=\"smaller\">". $review['added']."</EM> 
						</DIV>
						<br>
						<p class=\"review_comment\" style=\"text-align: right\"><b>". $review['title']."</b><br>".$review['review']."</P>
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
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css"> 
</head>

<body dir="rtl">
<?php echo getHeadHTMLCode()?>
<?php echo getNavHTMLCode()?>

<div id="bodyContainer_Centered">
	<p>
		<?php echo $html; ?>
	</p>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>