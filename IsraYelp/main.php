<?php 
session_start();
include './utils/functions.php';

if ($_GET['city_id']){
	$city_id = $_GET['city_id'];
	$_SESSION['city_id'] = $city_id;
} else if (session_is_registered('city_id')){
	header("Location: ./main.php?city_id=".$_SESSION['city_id']);
	}else {
	header("Location: ./main.php?city_id=1");	//default
}

$mysqli = getMysqliConnection();

$city_name = getCityName($city_id);
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>אתר ביקורות הגולשים - IsraYelp </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">	
</head>

<body class= "us" id="IsraYelp_main_body" dir="rtl">

<div id="head">
		<div id="logo">
			<A href="./main.php"></A>
		</div>
		<div id="register">
			<p><?php if (session_is_registered('username')) print("אתה מחובר כ-".$_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>
	
<div id="navContainer">
		<ul>			
			<LI class="header" id="writeReview">
				<A href= "<?php if (!session_is_registered('username')) { 
									echo ("./login.php");
									} else {
									echo ("./write_review.php");
									}
								?>" >
				כתוב ביקורת
				</A> | 
			</LI>
			<LI class="header" id="findReview">
				<A href= "./find_review.php">
				חפש ביקורת
				</A>
			</LI>
			
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "login.php?logout";} else{echo "login.php";}?> > <?php if (session_is_registered('username')) {echo "התנתק";} else {echo "כנס";}?></A></LI>
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "profile.php";} else{echo "login.php";}?> >החשבון שלי </A> | </LI>
		</ul>
</div>
	
<div id="bodyContainer">
	<div id="locBar">
		<?php echo getLocBarHtmlCode($city_id, $city_name, "./main.php?");?>
	</div>
 
 	<?php 
 		if (!session_is_registered('username')){
 			$html = "<h2 id=\"nonMemberWelcome\"><A href=\"signup.php\"></A></h2>";
 			echo $html;
 		}
 	?>
 	
	<div id="external_search">
	<form method="post" action="./search.php" name="external_search"> 
		<p>
			<label for="find_desc_ext"> שם המקום <em> שם העסק</em></label> 
			<input type="text" align="right" maxlength="64" id="find_desc_ext" name="place_name" tabindex="1" value="" >
			
		</p>
		<p>
			<label for="find_loc_ext">סוג המקום <em> </em></label>
			<?php echo getTypesHTMLCode()?>
		</p>

		<p>
			<label for="find_loc_ext">עיר <em> </em></label>

			<?php echo getCitiesHTMLCode();?>
			
			</p>
		<input type="hidden" name="source" value="main">

		<button type="submit" id="ex_submit_button" class="form_img_btn" tabindex="3"></button>

	</form>
	</div>


	<div id="column_wrapper" class="clearfix">
	
<!--*******************************-->
<div id="rightColumn">		
	<div id="bestOfYelpModule" class="clearfix external" >					
		<div id="best_cats">
			<h3>המקומות הטובים ביותר ב<?php echo $city_name?>:</h3>			
			<div class="clearfix">
				<div class="bestCat">
					<?php $biz_type = "restaurants";?>
					<h4 style="margin-bottom:0px;" title="מסעדות ובתי קפה"><a href="<?php echo "./$biz_type.php?city_id=$city_id"?>">מסעדות ובתי קפה</a></h4>
					<em>
						<?php 
							$query = "SELECT * FROM `reviews` WHERE city_id=$city_id and biz_type='restaurants'";
							$result = $mysqli->query($query);
							$count = $result->num_rows;
							echo $count;
						?>  
						ביקורות							
					</em>														
					
					<?php 
						$query = "SELECT * FROM `$biz_type` WHERE city_id=$city_id ORDER BY grading DESC LIMIT 5";
						$result = $mysqli->query($query);
						$html = "";
						$first = 1;								
						while ($rest = mysqli_fetch_assoc($result)){
							$rest_url = getBizURL($biz_type, $rest['id']);
							if ($first){
								$image_srs = "./biz_pics/$biz_type/".$rest['id'].".jpg";						
								$html = "<div class=\"clearStyles bizPhotoBox\">
											<a  href=\"$rest_url\"><img src=\"$image_srs\" width=120 height=100 alt=\"".$rest['name']."\"></a>
										</div>";
								$html .= "<ol>";			
							}
							$html .= "<li>";
							if ($first){
								$html .= "<strong>";
							}
							$html .= "<a href=\"$rest_url\"\">".$rest['name']."</a>";
							if ($first){
								$html .= "</strong>";
								$first = 0;
							}
							$html .= "</li>";
						}
						$html .= "</ol>";
						$html .= "<p><a href=\"./$biz_type.php?city_id=".$city_id."\">עוד...</a></p>";
						echo $html;
					?>														
				</div>

				<div class="bestCat">
					<?php $biz_type = "hotels"?>
					<h4 style="margin-bottom:0px;" title="בתי מלון"><a href="<?php echo "./$biz_type.php?city_id=$city_id"?>">בתי מלון</a></h4>
					<em>
						<?php 
							$query = "SELECT * FROM `reviews` WHERE city_id=$city_id and biz_type='hotels'";
								$result = $mysqli->query($query);
								$count = $result->num_rows;
								echo $count;
							?>  
							ביקורות							
						</em>																
						<?php 
							$query = "SELECT * FROM `$biz_type` WHERE city_id=$city_id ORDER BY grading DESC LIMIT 5";
							$result = $mysqli->query($query);
							$first = 1;
							$html="";								
							while ($hotel = mysqli_fetch_assoc($result)){
								$hotel_url = getBizURL($biz_type, $hotel['id']);
								if ($first){
									$image_srs = "./biz_pics/$biz_type/".$hotel['id'].".jpg";						
									$html = "<div class=\"clearStyles bizPhotoBox\">
												<a  href=\"$hotel_url\"><img src=\"$image_srs\" width=120 height=100 alt=\"".$hotel['name']."\"></a>
											</div>";
									$html .= "<ol>";			
								}
								$html .= "<li>";
								if ($first){
									$html .= "<strong>";
								}
								$html .= "<a href=\"$hotel_url\"\">".$hotel['name']."</a>";
								if ($first){
									$html .= "</strong>";
									$first = 0;
								}
								$html .= "</li>";
							}
							$html .= "</ol>";
							$html .= "<p><a href=\"./$biz_type.php?city_id=".$city_id."\">עוד...</a></p>";
							echo $html;
						?>
					</div>										
				</div>
				
				<div class="clearfix">
					<div class="bestCat">
						<?php $biz_type = "nightlife"?>
						<h4 style="margin-bottom:0px;" title="מקומות בילוי"><a href="<?php echo "./$biz_type.php?city_id=$city_id"?>">חיי לילה</a></h4>
						<em>
							<?php 
								$query = "SELECT * FROM `reviews` WHERE city_id=$city_id and biz_type='nightlife'";
								$result = $mysqli->query($query);
								$count = $result->num_rows;
								echo $count;
							?>  
							ביקורות							
						</em>			

						<?php 
							$query = "SELECT * FROM `$biz_type` WHERE city_id=$city_id ORDER BY grading DESC LIMIT 5";
							$result = $mysqli->query($query);
							$first = 1;
							$html="";								
							while ($night = mysqli_fetch_assoc($result)){
								$night_url = getBizURL($biz_type, $night['id']);
								if ($first){
									$image_srs = "./biz_pics/$biz_type/".$night['id'].".jpg";						
									$html = "<div class=\"clearStyles bizPhotoBox\">
												<a  href=\"$night_url\"><img src=\"$image_srs\" width=120 height=100 alt=\"".$night['name']."\"></a>
											</div>";
									$html .= "<ol>";			
								}
								$html .= "<li>";
								if ($first){
									$html .= "<strong>";
								}
								$html .= "<a href=\"$night_url\"\">".$night['name']."</a>";
								if ($first){
									$html .= "</strong>";
									$first = 0;
								}
								$html .= "</li>";
							}
							$html .= "</ol>";
							$html .= "<p><a href=\"./$biz_type.php?city_id=".$city_id."\">עוד...</a></p>";
							echo $html;
						?>
				</div>

					<div class="bestCat">
						<?php $biz_type = "beauty"?>
						<h4 style="margin-bottom:0px;" title="אתרי יופי וספא"><a href="<?php echo "./$biz_type.php?city_id=$city_id"?>">יופי וספא</a></h4>
						<em>
							<?php 
								$query = "SELECT * FROM `reviews` WHERE city_id=$city_id and biz_type='beauty'";
								$result = $mysqli->query($query);
								$count = $result->num_rows;
								echo $count;
							?>  
							ביקורות							
						</em>			

						<?php 
							$query = "SELECT * FROM `$biz_type` WHERE city_id=$city_id ORDER BY grading DESC LIMIT 5";
							$result = $mysqli->query($query);
							$first = 1;
							$html="";								
							while ($beauty = mysqli_fetch_assoc($result)){
								$beauty_url = getBizURL($biz_type, $beauty['id']);
								if ($first){
									$image_srs = "./biz_pics/$biz_type/".$beauty['id'].".jpg";						
									$html = "<div class=\"clearStyles bizPhotoBox\">
												<a  href=\"$beauty_url\"><img src=\"$image_srs\" width=120 height=100 alt=\"".$beauty['name']."\"></a>
											</div>";
									$html .= "<ol>";			
								}
								$html .= "<li>";
								if ($first){
									$html .= "<strong>";
								}
								$html .= "<a href=\"$beauty_url\"\">".$beauty['name']."</a>";
								if ($first){
									$html .= "</strong>";
									$first = 0;
								}
								$html .= "</li>";
							}
							$html .= "</ol>";
							$html .= "<p><a href=\"./$biz_type.php?city_id=".$city_id."\">עוד...</a></p>";
							echo $html;
						?>
				</div>
						

			</div>				
		</div>	
					
		<div id="cat_list">	
			<h4 class="ieSucks">חפש לפי קטגוריה</h4>
			<ul class="stripped ieSucks">								
				<li class="shopping"><a href="./shopping.php?city_id=<?php echo $city_id?>">קניות</a> 
					<?php 
						$query = "SELECT * FROM `shopping` WHERE city_id=$city_id";
						$result = $mysqli->query($query);
						$count = $result->num_rows;
						echo $count;
					?> 
				</li>
				<li class="restaurants"><a href="./restaurants.php?city_id=<?php echo $city_id?>">מסעדות ובתי קפה</a>  										
					<?php 
						$query = "SELECT * FROM `restaurants` WHERE city_id=$city_id";
						$result = $mysqli->query($query);
						$count = $result->num_rows;
						echo $count;
					?>  
				</li>
				<li class="beauty"><a href="./beauty.php?city_id=<?php echo $city_id?>">יופי וספא</a>
					<?php 
						$query = "SELECT * FROM `beauty` WHERE city_id=$city_id";
						$result = $mysqli->query($query);
						$count = $result->num_rows;
						echo $count;
					?>  
				</li>
				<li class="nightlife"><a href="./nightlife.php?city_id=<?php echo $city_id?>">חיי לילה</a> 
				 	<?php 
						$query = "SELECT * FROM `nightlife` WHERE city_id=$city_id";
						$result = $mysqli->query($query);
						$count = $result->num_rows;
						echo $count;
					?>   
				</li>
				<li class="hotelstravel"><a href="./hotels.php?city_id=<?php echo $city_id?>">בתי מלון</a> 
					<?php 
						$query = "SELECT * FROM `hotels` WHERE city_id=$city_id";
						$result = $mysqli->query($query);
						$count = $result->num_rows;
						echo $count;
					?> 
				</li>
				<li class="health"><a href="">רפואה ושירותי בריאות</a> 0  </li>
				<li class="food"><a href="">מזון</a> 0  </li>				
				<li class="education"><a href="">השכלה</a> 0  </li>
				<li class="pets">  <a href="">חיות מחמד</a> 0 </li>
				
				<!--				
				<li class="homeservices"><a href="/c/sf/homeservices">שירותים עד הבית</a> 1522  </li>
				<li class="localservices"><a href="/c/sf/localservices">שירותים מקומיים</a>  1477 </li>
				<li class="eventservices"><a href="/c/sf/eventservices">אירועים</a> 1277  </li>
				<li class="arts"><a href="/c/sf/arts">בידור</a> 1153  </li>
				<li class="active"><a href="/c/sf/active">Active Life</a> 1114</li>
				<li class="auto"><a href="/c/sf/auto">Automotive</a> 829</li>
				<li class="professional"><a href="/c/sf/professional">שירותים מקצועיים</a> 751  </li>
				<li class="realestate"><a href="/c/sf/realestate">Real Estate</a> 480</li>
				<li class="financialservices"><a href="/c/sf/financialservices">שירותים פיננסיים</a> 359  </li>
				<li class="publicservicesgovt"><a href="/c/sf/publicservicesgovt">שירותים ציבוריים</a> 336  </li>
				<li class="localflavor"><a href="/c/sf/localflavor">Local Flavor</a> 319</li>
				<li class="massmedia"><a href="/c/sf/massmedia">Mass Media</a> 199</li>
				<li class="religiousorgs"> 149 <a href="/c/sf/religiousorgs">ארגונים דתיים</a> </li>					
			--></ul>
						
			<p style="font-size:1px;clear:both;margin:0px;">&nbsp;</p>
		</div>
	</div> 

	<div id="topYelpersModule" class="external">
		<h3>מבקרים נבחרים</h3>
		<br>
			<?php 						
				$query = "SELECT * FROM `users` ORDER BY RAND() LIMIT 6";
				$result = $mysqli->query($query);
				while ($user = mysqli_fetch_assoc($result)){
					$html = "<div>
							<P><A href=\"./profile.php?user_id=".$user['id']."\">".$user['username']."</A></P>
							<div class=\"clearStyles photoBox\">
								<img style=\"WIDTH: 80px; HEIGHT: 80px\" src=\"".getUserPictureSrc($user['id'], "./")."\">
							</div>
							<div></div>			
							</div>";
					echo $html;
				}										
			?>							
		</div>
</div>


<!--*******************************-->
		
		<div id="leftColumn">
			<div class="clearfix" id="reviewPicksModule">
				<H3>ביקורת היום</H3>	
				<p></p>
				
					<?php 
						$today_reviews = "SELECT * FROM `reviews` ORDER BY added DESC LIMIT 1"; //todo: same city or not?
						$result_today = $mysqli->query($today_reviews);
						while ($review = mysqli_fetch_assoc($result_today) ){
							$user_id_chosen = $review['user_id'];
							$query_user = "SELECT * FROM `users` WHERE id=$user_id_chosen";
							$result_user = $mysqli->query($query_user);
							$user = mysqli_fetch_assoc($result_user);
							
							$biz_id = $review['biz_id'];
							$biz_type = $review['biz_type'];
							$query = "SELECT * FROM `$biz_type` WHERE id=$biz_id";
							$result = $mysqli->query($query);
							$biz = mysqli_fetch_assoc($result);
							$biz_url = getBizURL($biz_type, $biz_id);
							$image_srs = "./biz_pics/$biz_type/$biz_id.jpg";
							
							$rev = $review['review'];
							$rev_title = $review['title'];
							
							$html =  "<div id=\"reviewerInfo\">
											<div class=\"clearStyles bizPhotoBox\">
												<a  href=\"$biz_url\"><img src=\"$image_srs\" style=\"WIDTH: 60px; HEIGHT: 70px\" alt=\"".$biz['name']."\"></a>
											</div>
									</div>
								
									<div id=\"reviewPick\">
										<p>נכתבה עבור: <a href=\"$biz_url\">".$biz['name']."</a></p>
										<p style=\"padding-top:.3em;\">
										<div class=\"rating\">
											<IMG class=\"stars_". $review['grading']." height=\"325\" alt=\"". $review['grading'] ."כוכבים\" src=\"./image/stars_map.png\" width=\"83\" />							
										</div>";
							if (strlen($rev) > 100){
								$rev = substr($rev,0,99);
								$_SESSION['user_id_rev'] = $user['id'];
								$html .= "<strong>".$rev_title."</strong><br><em>".$rev."</em>";								
								$html .="<a href=\"./present_review.php?review_id=".$review['id']."\"> להמשך לחץ כאן...</a>";
							} else {
								$html .= "<strong>".$rev_title."</strong><br><em>".$rev."</em>"; 	 							
							}
							$html .="<p></div>";
														
							echo $html;							
						}
					?>				
				
			</div>
			
			
			<?php 
						$today_coupons = "SELECT * FROM `coupons` WHERE city_id=$city_id ORDER BY id DESC LIMIT 2 "; 
						$result_coupons = $mysqli->query($today_coupons);
						$num_coupons = $result_coupons->num_rows;
						if ($num_coupons>0){
							$html = "<div id=\"recent_offers\"><img height=\"50\"  width=\"50\" src=\"./image/present.jpg\" align=\"left\">
									<h3> מבצעים והנחות </h3>
									<ul class=\"stripped\">";
							while ($coupon = mysqli_fetch_assoc($result_coupons) ){
								$biz_id = $coupon['biz_id'];				
								$biz_type = $coupon['biz_type']; 
								$coupon_text = $coupon['coupon'];
								$query = "SELECT * FROM `$biz_type` WHERE id=$biz_id";
								$result = $mysqli->query($query);
								$biz = mysqli_fetch_assoc($result);
								$biz_name = $biz['name'];
								$biz_url = getBizURL($biz_type, $biz_id);
								$html .= "<li>
									<h4><a href=".$biz_url.">".$biz_name."</a></h4>							
									<p>".$coupon_text."</p>
									</li>";
							}
							$html .="</ul></div>";
							echo $html;
						}
				?>
			
										
				<div id="freshListsModule">
					<h3>ישר מהתנור...</h3>
					<p>הביקורות האחרונות של חברי האתר</p>
					<?php 
						$query_reviews = "SELECT * FROM `reviews` WHERE city_id=$city_id ORDER BY added DESC LIMIT 3"; //todo: same city or not?
						$result_reviews = $mysqli->query($query_reviews);
						while ($review = mysqli_fetch_assoc($result_reviews) ){
							$user_id_late = $review['user_id'];
							$query_user = "SELECT * FROM `users` WHERE id=$user_id_late";
							$result_user = $mysqli->query($query_user);
							$user = mysqli_fetch_assoc($result_user);
							
							$biz_id = $review['biz_id'];
							$biz_type = $review['biz_type'];
							$query = "SELECT * FROM `$biz_type` WHERE id=$biz_id";
							$result = $mysqli->query($query);
							$biz = mysqli_fetch_assoc($result);
							$biz_url = getBizURL($biz_type, $biz_id);
							
							$rev = $review['review'];
						
							$html = "<div class=\"clearfix\">
										<DIV class=\"clearStyles photoBox\">
											<A href=\"./profile.php?user_id=".$user['id']."\" rel=\"nofollow\"><IMG style=\"WIDTH: 40px; HEIGHT: 40px\" alt=\"התמונה של " . $user['username'] ."\" src=\"".getUserPictureSrc($user['id'], "./")."\"></A>". 
											"<A href=\"./profile.php?user_id=".$user['id']."\" rel=\"nofollow\">".$user['username']."</a>" .		
											"</div>								
											<p>ביקורת עבור: 
											<a href=\"$biz_url\">".$biz['name']."</a><br>
											<strong>".$review['title'] ."</strong>
											
											<br/>";																																														
							if (strlen($rev) > 100){
								$rev = substr($rev,0,99);
								$_SESSION['user_id_rev'] = $user['id'];
								$html .= "<em>".$rev."</em>"; 								
								$html .="<a href=\"./present_review.php?review_id=".$review['id']."\"> להמשך לחץ כאן...</a>";
							} else {
								$html .= "<em>".$rev."</em>"; 							
							}
							$html .="</p></div><br>";							
							echo $html;											
						}
					?>							
				</div>			
		</div>
	</div>
</div>

<div id="pressLinks"><img src="./image/ads_full.png" width="950" height="84" usemap="#pressMap"  />
	<map name="pressMap">
		<area rel="nofollow" alt="חפש מבקר" href="./find_review.php" coords="10,6,232,79">
		<area rel="nofollow" alt="כתוב ביקורת" href="./write_review.php"  coords="245,6,469,79">
		<area rel="nofollow" alt="בדוק בתי מלון" href="./hotels.php?city_id=<?php echo $city_id; ?>" coords="481,6,705,79">
		<area rel="nofollow" alt="בדוק מסעדות" href="./restaurants.php?city_id=<?php echo $city_id; ?>" coords="718,6,941,79">
	</map>
</div>



<?php echo getFooterHTMLCode()?>

</body>
</html>