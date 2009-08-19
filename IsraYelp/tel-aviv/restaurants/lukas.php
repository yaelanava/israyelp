<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>לוקאס | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="../../image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../../image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../../mystyle.css">  	
</head>

<body dir="rtl">

<div id="head">
		<div id="logo">
			<A href="../../main.php"></A>
		</div>
		<div id="register">
			<p><?php if (session_is_registered('username')) print("אתה מחובר כ-" . $_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>

<div id="navContainer">
		<ul>
			
			<LI class="header" id="writeReview"><A   href="../../write_review.php>כתוב ביקורת</A> | </LI>
			<LI class="header" id="findReview"><A   href="../../find_review.php" >חפש ביקורת</A></LI>
			
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "../../login.php?logout=1";} else{echo "../../login.html";}?> > <?php if (session_is_registered('username')) {echo "התנתק";} else {echo "כנס";}?></A></LI>
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "../../profile.php";} else{echo "../../signup.html?profile=1";}?> >החשבון שלי </A> | </LI>
		</ul>
</div>

<div id="bodyContainer">
	<div id="ieInnerWrap" class="clearfix">
		<div id="bizMain">
			<div id="bizBox">
				<div class="hReview-aggregate">
					<div class="item vcard">
						<div id="bizInfoBody">
							<div class="wrap">
								<div id="bizInfoHeader">
									<h1 class="fn org">לוקאס</h1>
									<div id="bizRating">
										<div class="rating"><img class="stars_4 rating average" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090527a/i/new/ico/stars/stars_map.png"/></div> 
										<em>מבוסס על <span class="count">
										<?php 
											$mysqli = new mysqli('localhost', 'administrator', '', 'test');
											$query = "SELECT * FROM `test`.`critiques` WHERE restaurant='lukas'";
											$result = $mysqli->query($query);
											$count = $result->num_rows;
											echo $count;
										?>
										</span> ביקורות</em>
									</div>
								</div>
								<div id="bizInfoContent">
									<p id="bizCategories">קטגוריה:
									<span id="cat_display">	<a  href="/c/sunnyvale-ca/indpak">Take Away</a>, 		<a  href="/c/sunnyvale-ca/afghani">אירועים</a>, 		<a  href="/c/sunnyvale-ca/pakistani">ביסטרו</a> </span>
									</p>

									<address class="adr">
										<span class="street-address">מזא"ה 5, תל אביב </span>
									</address>
	
									<span id="bizPhone" class="tel">03-5252565, 03-5686820</span>
	
									<div id="bizUrl">
										<a href="http://www.yelp.com/redir?url=http%3A%2F%2Fwww.ichaatcafe.com&amp;src_bizid=54anJf73lEHBItVRPgRgrA" target="_blank" rel="nofollow" class="url"></a>
									</div>
								</div>
							</div>
							
							<div id="bizPhotos">
								<div class="clearStyles bizPhotoBox">
										<a  href="/biz_photos/54anJf73lEHBItVRPgRgrA?select=gPtUeg7qvd7TkhUi5RQ6Og"><img src="./image/lucas.jpg" width=70 height= 100 style="" alt="לוקאס, תל אביב"></a>
								</div>
								<span style="font-size: 10px;"><a rel="nofollow" href="../../uploadPic.php">הוסף תמונה</a></span>
							</div>
						</div>
						
						<div id="bizAdditionalInfo" class="clearfix">
							<ul>
								<li><strong>מחיר לסועד:</strong> בהתאם לתפריט</li>
								<li><strong>משלוחים:</strong> כן</li>
								<li><strong>כשר:</strong> לא</li>
								<li><strong>גישה לנכים:</strong> כן</li>
								<li><strong>ידידותי לילדים:</strong> כן</li>
								<li><strong>אירועים:</strong> כן</li>
								<li><strong>רומנטי:</strong> כן</li>
								<li><strong>חניה:</strong> כן</li>
								<li><strong>אזור עישון:</strong> כן</li>
								<li><strong>ישיבה בחוץ:</strong> כן</li>
											
							</ul>
						</div>
					</div>
				</div>
				
				<div id="bizActions" class="clearfix">
					<a class="send-to-friend" rel="nofollow"  href="../../send_to_friend.php?bizid=54anJf73lEHBItVRPgRgrA&amp;return_url=%2Fbiz%2Fichaat-cafe-sunnyvale-3" id="bizShare"><img src= "../../image/send2friend.png" width=108 height=41></a>
					<a class="bookmark" rel="nofollow" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" class="bookmark" id="bizBookmark" href="/signup"><img src= "../../image/bookmark.png" width=108 height=41></a>
					<a class="write review" rel="nofollow" href="lukas_writeReview.php" id="bizWriteReview"><img src= "../../image/write.png" width=108 height=41></a>
				</div>
			</div>
			
			
			<div id="bizReviews">
				<div id="bizReviewsHeader" class="clearfix">
					</br>
					<h2 id="total_reviews">	<?php echo $count; ?> ביקורות עבור לוקאס:</h2>	
				</div>
				<div id="bizReviewsContent">
					<div id="bizReviewsInner">
							<DIV class="review externalReview clearfix nonfollowingReview " id="review_e9vBvWz7IKmZIuvgHvMjgg">
								<DIV class="wrap">
									<DIV class="reviewer">
										<DIV class="mini">
											<DIV class="photoBoxSm">
												<DIV class="clearStyles photoBox">
													<A href="http://www.yelp.com/user_details?userid=IZ69bDkna2mmffvoTuyEUA" rel="nofollow"><IMG style="WIDTH: 40px; HEIGHT: 40px" alt="Photo of Sheena D." src="http://static.px.yelp.com/photo/VWQ0SOuTgPPN7rTCyuTbkg/ss" /></A>
												</div>												
											</div>
										</div>
										<?php 
											$review = $result->fetch_row();
											$userId = $review[1];
											$userQuery = "SELECT * FROM `test`.`users` WHERE id='$userId'";
											$userResult = $mysqli->query($userQuery);
											$user = mysqli_fetch_assoc($userResult);											
										?>
										<P class="reviewer_info"><A class="reviewer_name" href="http://www.yelp.com/user_details?userid=IZ69bDkna2mmffvoTuyEUA"><?php echo $user['username'];?></A></P>
										<P class="reviewer_info"><?php echo $user['city'];?></P>
									</div>
									<DIV class="ext_rating">
										<DIV class="rating">
											<IMG class="stars_5" title="5 star rating" height="325" alt="5 star rating" src="../../image/stars_map.png" width="83" />
										</DIV>
											<EM class="smaller">5/14/2009</EM> 
									</DIV>
										<P class="review_comment ieSucks"><?php echo $review[4];?>

										</P>
										<UL class="externalReviewActions">
											<LI><A class="bookmark" title="" onclick="initBookSignUp(this,'54anJf73lEHBItVRPgRgrA','iChaat Cafe');return false" href="http://www.yelp.com/signup" rel="nofollow">סמן כמועדף</A> </LI>
											<LI><A class="sendToFriend" onclick="Yelp.send2Friends.open(this, '54anJf73lEHBItVRPgRgrA', 'e9vBvWz7IKmZIuvgHvMjgg', null);return false" href="http://www.yelp.com/biz_share?bizid=54anJf73lEHBItVRPgRgrA&reviewid=e9vBvWz7IKmZIuvgHvMjgg&return_url=/biz/ichaat-cafe-sunnyvale-3" rel="nofollow">שלח לחבר</A> </LI>
										</UL>
								</div>
							</div>
							
		
							
							
							<DIV class="review externalReview clearfix nonfollowingReview " id="review_e9vBvWz7IKmZIuvgHvMjgg">
								<DIV class="wrap">
									<DIV class="reviewer">
										<DIV class="mini">
											<DIV class="photoBoxSm">
												<DIV class="clearStyles photoBox">
													<A href="http://www.yelp.com/user_details?userid=IZ69bDkna2mmffvoTuyEUA" rel="nofollow"><IMG style="WIDTH: 40px; HEIGHT: 40px" alt="Photo of Sheena D." src="http://static.px.yelp.com/photo/VWQ0SOuTgPPN7rTCyuTbkg/ss" /></A>
												</div>
												
		
											</div>
										</div>
										<P class="reviewer_info"><A class="reviewer_name" href="http://www.yelp.com/user_details?userid=IZ69bDkna2mmffvoTuyEUA">דנה א.</A></P>
										<P class="reviewer_info">תל-אביב</P>
									</div>
									<DIV class="ext_rating">
										<DIV class="rating">
											<IMG class="stars_4" title="4 star rating" height="325" alt="4 star rating" src="../../image/stars_map.png" width="83" />
										</DIV>
											<EM class="smaller">5/14/2009</EM> 
									</DIV>
										<P class="review_comment ieSucks">"פשוט מאוד, מחיר מול מוצר. במחיר של העסקיות בלוקאס אוכלים ברשת המבורגרים ידועה. סטייק טעים עסיסי ועשוי היטב והמחיר ברצפה. כל הכבוד לבעלי המסעדה שהלכו על מסעדה ברמה ובמחיר עממי לכל נפש. נמאס מכל המסעדות ששודדות את הקהל; לא נותנות כלום ומוכרות ביוקר. לוקאס זו דוגמא של לתת יפה ובזול. מזכיר לי את המסעדות בניו יורק שנותנות אוכל איכותי במחירים השווים לכל נפש. כל הכבוד ושיהיו הרבה מסעדות מהסוג של לוקאס כי מהאחרות כבר שבענו."
										</P>
										<UL class="externalReviewActions">
											<LI><A class="bookmark" title="" onclick="initBookSignUp(this,'54anJf73lEHBItVRPgRgrA','iChaat Cafe');return false" href="http://www.yelp.com/signup" rel="nofollow">סמן כמועדף</A> </LI>
											<LI><A class="sendToFriend" onclick="Yelp.send2Friends.open(this, '54anJf73lEHBItVRPgRgrA', 'e9vBvWz7IKmZIuvgHvMjgg', null);return false" href="http://www.yelp.com/biz_share?bizid=54anJf73lEHBItVRPgRgrA&reviewid=e9vBvWz7IKmZIuvgHvMjgg&return_url=/biz/ichaat-cafe-sunnyvale-3" rel="nofollow">שלח לחבר</A> </LI>
										</UL>
								</div>
							</div>											
					</div>				
				</div>

			</div>
		</div>
		
		<div id="bizSideBar" class="clearfix">
				<iframe src="http://maps.freemap.co.il/api/openlayers/?zoom=9&lat=32.06711&lon=34.77177&marker=true"
        		width="300px" height="200px"
		        scrolling="no"
		        marginwidth="0" marginheight="0" 
		        frameborder="1">
      		</iframe>
		</div>
	
	</div>

</div>
 
<div id="footer">
	
	<div>		
				<ul id="aboutSite">
					<li>  <a href="/signup"   id="Zprofile_footer">עלינו</a></li>
					<li> | <a href="/about">החשבון שלי</a></li>
					<li> | <a href="/faq" >שאלות נפוצות </a></li>
				</ul>
	</div>

	<div class="directory">
		<ul>
			<li class="first"><strong>מפת האתר</strong></li>
			<li> | <a href="../restaurants.php">תל-אביב</a></li>
			<li> | <a href="../../jerusalem/restaurants.php">ירושלים</a></li>
			<li> | <a href="/boston">חיפה</a></li>
			<li> | <a href="/chicago">באר שבע</a></li>
			<li> | <a href="/dallas">הרצליה</a></li>
			<li> | <a href="/denver">אשדוד</a></li>
			<li> | <a href="/locations">ערים נוספות</a></li>
		</ul>
	</div>
	
	<div>
		<p> זכויות יוצרים </p>
	</div>
</div>

</body>
</html>
