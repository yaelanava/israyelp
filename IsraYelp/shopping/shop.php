<?php 

session_start();

include '../utils/functions.php';

$rest_id = $_GET['biz_id'];
$biz_type = "shopping";
$rest_url = getBizURL($biz_type, $rest_id);


$mysqli = getMysqliConnection();

$query_restaurant = "SELECT * FROM `test`.`$biz_type` WHERE id='$rest_id'";
$result_restaurant = $mysqli->query($query_restaurant);
$restaurant = mysqli_fetch_assoc($result_restaurant);
$rest_name = $restaurant['name'];	

$query_reviews = "SELECT * FROM `test`.`reviews` WHERE biz_id='$rest_id' and biz_type='$biz_type' ORDER BY added DESC";
$result_reviews = $mysqli->query($query_reviews);
$count_reviews = $result_reviews->num_rows;
											
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title><?php echo $rest_name?> | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../mystyle.css">  	
</head>

<body dir="rtl">

<div id="head">
		<div id="logo">
			<A href="../main.php"></A>
		</div>
		<div id="register">
			<p><?php if (session_is_registered('username')) print("אתה מחובר כ-" . $_SESSION['username'])?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>

<div id="navContainer">
		<ul>			
			<LI class="header" id="writeReview"><A href="../write_review.php>כתוב ביקורת</A> | </LI>
			<LI class="header" id="findReview"><A href="../find_review.php" >חפש ביקורת</A></LI>
			
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "../login.php?logout=1";} else{echo "../login.php";}?> > <?php if (session_is_registered('username')) {echo "התנתק";} else {echo "כנס";}?></A></LI>
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "../about_me.php";} else{echo "../signup.html?profile=1";}?> >החשבון שלי </A> | </LI>
		</ul>
</div>

<div id="bodyContainer">
	<table>
		<tr>		
			<td style="vertical-align:top">
				<table>
					<tr>		
						<td style="vertical-align:top">
							<div id="bizInfoHeader">
								<h1><?php echo $rest_name?></h1>
								<div id="bizRating">
									<div class="rating">
										<img class="stars_4_half" width="83" height="325" title="4.5 star rating" alt="4.5 star rating" src="../image/stars_map.png"/>
									</div> 
									<em>מבוסס על <span class="count"> <?php echo $count_reviews;?> </span> ביקורות</em>
								</div>
							</div>
							<div id="bizInfoContent">
								<p id="bizCategories"><strong>קטגוריה:</strong>
									<span id="cat_display"> <?php echo $restaurant['category'];?>	
								</p>
								<address class="adr">
									<span class="street-address"><?php echo $restaurant['address']; ?></span>										
								</address>
			
								<span id="bizPhone" class="tel"> <?php echo $restaurant['phone_number']; ?> </span>
						</td>				
						<td>
							<div id="bizPhotos"">
								<div class="clearStyles bizPhotoBox">
										<?php $imageFileSrc = "./image/".$rest_id.".jpg";?>
										<a  href="<?php echo $imageFileSrc?>"><img src="<?php echo $imageFileSrc?>" width=150 height=150 style="" alt=""></a>
								</div>
							</div>
						</td>
					</tr>
				</table>				
				<br></br>			
					<div id="bizAdditionalInfo" class="clearfix">
					<ul>							
						<li><strong>שעות: </strong><?php echo $restaurant['hours']?></li>
						<li><strong>גישה לנכים: </strong> <?php if($restaurant['invalid_access']==1){echo "כן";} else {echo "לא";} ?></li>
						<li><strong>חניה: </strong> <?php if($restaurant['parking']==1){echo "כן";} else {echo "לא";} ?></li>
					</ul>
				</div>				
				<div  id="bizActions" class="clearfix">
					<a class="send-to-friend" rel="nofollow"  href="../send_to_friend.php?biz_id=<?php echo $rest_id?>&return_url=<?php echo $rest_url?>" id="bizShare"><img src= "../image/send2friend.png" width=108 height=41></a>
					<a class="bookmark" rel="nofollow"  class="bookmark" id="bizBookmark" href="../bookmark.php?biz_name=<?php echo $rest_name?>&biz_url=<?php echo $rest_url?>"><img src= "../image/bookmark.png" width=108 height=41></a>
					<a class="write review" rel="nofollow" 
						href= "<?php if (!session_is_registered('username')) { 
									echo ("../login.php?returnUrl=".$rest_url);
									} else {
									echo ("../writeReviewForm.php?biz_id=".$rest_id."&biz_name=".$rest_name."&biz_type=$biz_type");
									}
								?>" 
						id="bizWriteReview"><img src= "../image/write.png" width=108 height=41></a>						
				</div>							
			</td>							
			<td>
				<iframe 
					src="http://maps.freemap.co.il/api/openlayers/?zoom=9&
							lat=<?php echo $restaurant['lat']?>&
							lon=<?php echo $restaurant['lon']?>&
							marker=true"
		        	width="300px" height="350px"
				       scrolling="no"
				       marginwidth="0" marginheight="0" 
				       frameborder="1">
	   			</iframe>
			</td>							
		</tr>
	</table>		
				
	<div id="bizReviews">
		<div id="bizReviewsHeader" class="clearfix">
			</br>
			<h2 id="total_reviews">	<?php echo $count_reviews; ?> ביקורות עבור <?php echo $rest_name?>:</h2>	
		</div>
		<br></br>
		<div id="bizReviewsContent">
			<div id="bizReviewsInner">
				<?php 
					while ($review = mysqli_fetch_assoc($result_reviews)){
						$userId = $review['user_id'];
						$query_user = "SELECT * FROM `test`.`users` WHERE id='$userId'";
						$result_user = $mysqli->query($query_user);
						$user = mysqli_fetch_assoc($result_user);
								
						$html = "<DIV class=\"review externalReview clearfix nonfollowingReview \" >
									<DIV class=\"wrap\">
										<DIV class=\"reviewer\">
											<DIV class=\"mini\">
												<DIV class=\"photoBoxSm\">
													<DIV class=\"clearStyles photoBox\">
														<A href=\"../user_reviwes.php?user_id=".$user['id']."\" rel=\"nofollow\"><IMG style=\"WIDTH: 40px; HEIGHT: 40px\" alt=\"התמונה של " . $user['username'] ."\" src=\"".getUserPictureSrc($user['id'], "../")."\"></A>
													</div>			
												</div>
											</div>
											<P class=\"reviewer_info\"><A class=\"reviewer_name\" href=\"../user_reviwes.php?user_id=".$user['id']."\">". $user['username']. "</A></P>
											<P class=\"reviewer_info\">". $user['city']."</P>
										</div>
										<DIV class=\"ext_rating\">
											<DIV class=\"rating\">
												<IMG class=\"stars_". $review['grading'] ."\" title=\"". $review['grading'] ." כוכבים\" height=\"325\" alt=\"". $review['grading'] ."כוכבים\" src=\"../image/stars_map.png\" width=\"83\" />
											</DIV>
												<EM class=\"smaller\">". $review['added']."</EM> 
										</DIV>
											<p class=\"review_comment ieSucks\"><b>". $review['title']."</b><br>". $review['review']."</P>
									</div>
								</div>";
						echo $html;
					}
				?>	
			</div>				
		</div>
	</div>	
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>