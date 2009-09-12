<?php 

session_start();

include './utils/functions.php';

if (isset($_GET['user_id'])){
	$user_id = $_GET['user_id'];
} else {
	$user_id = $_SESSION['user_id'];	
}

$same_user = false;
if (isset($_SESSION['user_id']) && ($user_id == $_SESSION['user_id'])){
	$same_user = true;
}

$mysqli = getMysqliConnection();

//getting user name
$user_query = "SELECT * FROM `users` WHERE id=$user_id";
$user_result = $mysqli->query($user_query);
$user = mysqli_fetch_assoc($user_result);
$username = $user['username'];

//counting how much reviews this user wrote
$review_query = "SELECT * FROM `reviews` WHERE user_id=$user_id";
$rev_result = $mysqli->query($review_query);
$rev_count = $rev_result->num_rows;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> ביקורות | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css"> 
</head>
<body class= "us" id="IsraYelp_main_body" dir="rtl">

<?php echo getHeadHTMLCode()?>
<?php echo getNavHTMLCode()?>

<div id="bodyContainer">
		<div id="userTabs" >
			<ul>	
				<?php
					$html = "<li><a href=\"./user_profile.php?user_id=$user_id\">פרופיל</a></li>"; 
					$html .= "<li class=\"selected\"><a href=\"./user_reviews.php?user_id=$user_id\">ביקורות</a></li>";
					if ($same_user){
						$html .= "<li><a href=\"./user_bookmarks.php\">מועדפים</a></li>";	
						$html .= "<li><a href=\"./user_messages.php\">הודעות</a></li>";							
					}
					echo $html;
				?>			
			</ul> 
		</div>		
		<div id="user_header" align="right">
			<h1>הפרופיל של <?php echo $username?></h1>			
		</div>
	
	
	<div id="user_details_wrapper">			
			<?php 
				if($same_user){
					$html = "<br/>
							<H1>כתבת כבר $rev_count ביקורות לאתר</H1>
							<br/>";
				}else{
					$html = "<br/>
							<H1> $username כתב/ה כבר $rev_count ביקורות לאתר</H1>
							<br/>";
				}
				echo $html;
							
				while ($review = mysqli_fetch_assoc($rev_result)){		
					$biz_id = $review['biz_id'];
					$biz_type = $review['biz_type'];
					$biz_url = getBizURL($biz_type, $biz_id);
										
					$grading = $review['grading'];
					$review_id=$review['id'];
					
					$query = "SELECT * FROM `$biz_type` WHERE id='$biz_id' LIMIT 1";
					$result = $mysqli->query($query);
					$biz = mysqli_fetch_assoc($result);
					
					$html = "<div id=\"my_review\">						
								<table cellpadding=\"20\" cellspacing=\"1\" border=\"0\" >
									<tr>										
										<td width=200><span><b>הביקורת נכתבה עבור </b><a href=\"$biz_url\">".$biz['name']."</a>"."</span>
											<DIV class=\"ext_rating\">
												<DIV class=\"rating\">
													<IMG class=\"stars_". $grading."\" height=\"325\" alt=\"".$review['grading']."כוכבים \" src=\"./image/stars_map.png\" width=\"83\" />
												</DIV>
												<EM class=\"smaller\">". $review['added']."</EM> 
											</DIV>
										</td> 
										<td>
											<span><b>". $review['title']."</b><br>". $review['review']."</span>
										</td>										
									</tr>
							</table>";
							if($same_user){
								$html .= "<div id=\"delete_review\" style=\"padding-left:20px\">
										<a href=\"./delete_reviwe.php?review_id=".$review_id."\"><img src=\"./image/delete_rev.png\" height=\"10px\" width=\"10px\"></a>
										<a href=\"./delete_reviwe.php?review_id=".$review_id."\">מחק ביקורת </a>
										</div>";
							}
							$html .="</div>";
					echo $html;			
				}
			?>
		
	</div>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>