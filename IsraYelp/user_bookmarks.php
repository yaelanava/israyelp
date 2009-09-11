<?php 
session_start();

include './utils/functions.php';

$mysqli = getMysqliConnection();

$user_id = $_SESSION['user_id'];

//getting user name
$user_query = "SELECT * FROM `users` WHERE id=$user_id";
$user_result = $mysqli->query($user_query);
$user = mysqli_fetch_assoc($user_result);
$username = $user['username'];

//counting how much reviews this user wrote
$fav_query = "SELECT * FROM `favorites` WHERE user_id='$user_id'";
$fav_result = $mysqli->query($fav_query);
$fav_count = $fav_result->num_rows;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> המועדפים שלי | IsraYelp</title>
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

<div id="bodyContainer">
		<div id="userTabs">
			<ul> 
				<li><a href="./user_profile.php">פרופיל</a></li>		 
				<li><a href="./user_reviews.php">ביקורות</a></li>
				<li class="selected"><a href="./user_bookmarks.php">מועדפים</a></li>
				<li><a href="./user_messages.php">הודעות</a></li>												
			</ul> 
		</div>
		<div id="user_header" align="right">
			<h1>הפרופיל של <?php echo $username?></h1>			
		</div>
	<div id="user_details_wrapper">		
		<?php 
			$html = "<br/>
					<H1>יש לך $fav_count מקומות מועדפים</H1>
					<br/>";	
			echo $html;
			while ($fav = mysqli_fetch_assoc($fav_result)){	
				$fav_biz_id=$fav['biz_id'];
				$fav_biz_type=$fav['biz_type'];
				$biz_url = getBizURL($fav_biz_type, $fav_biz_id);
				
				$query_biz = "SELECT * FROM `$fav_biz_type` WHERE id=$fav_biz_id";
				$result_biz = $mysqli->query($query_biz);
				$biz = mysqli_fetch_assoc($result_biz);	
				$biz_address = $biz['address'];
				
				$html = "<div id=\"my_review\">					
							<table cellpadding=\"10\" cellspacing=\"1\" border=\"0\" >
								<tr>
									<td>
										<span><b><a href=".$biz_url.">".$biz['name']."</a></b></span>
										".", ".$biz_address."
									</td>
									 
								</tr>
							</table>
						</div>";
				echo $html;				
			}
		?>			
	</div>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>