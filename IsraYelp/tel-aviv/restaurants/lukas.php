<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>����� | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
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
			<p><?php if (session_is_registered('username')) print("��� ����� �-" . $_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>

<div id="navContainer">
		<ul>
			
			<LI class="header" id="writeReview"><A   href="../../write_review.php>���� ������</A> | </LI>
			<LI class="header" id="findReview"><A   href="../../find_review.php" >��� ������</A></LI>
			
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "../../login.php?logout=1";} else{echo "../../login.html";}?> > <?php if (session_is_registered('username')) {echo "�����";} else {echo "���";}?></A></LI>
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "../../profile.php";} else{echo "../../signup.html?profile=1";}?> >������ ��� </A> | </LI>
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
									<h1 class="fn org">�����</h1>
									<div id="bizRating">
										<div class="rating"><img class="stars_4 rating average" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090527a/i/new/ico/stars/stars_map.png"/></div> 
										<em>����� �� <span class="count">
										<?php 
											$mysqli = new mysqli('localhost', 'administrator', '', 'test');
											$query = "SELECT * FROM `test`.`critiques` WHERE restaurant='lukas'";
											$result = $mysqli->query($query);
											$count = $result->num_rows;
											echo $count;
										?>
										</span> �������</em>
									</div>
								</div>
								<div id="bizInfoContent">
									<p id="bizCategories">�������:
									<span id="cat_display">	<a  href="/c/sunnyvale-ca/indpak">Take Away</a>, 		<a  href="/c/sunnyvale-ca/afghani">�������</a>, 		<a  href="/c/sunnyvale-ca/pakistani">������</a> </span>
									</p>

									<address class="adr">
										<span class="street-address">���"� 5, �� ���� </span>
									</address>
	
									<span id="bizPhone" class="tel">03-5252565, 03-5686820</span>
	
									<div id="bizUrl">
										<a href="http://www.yelp.com/redir?url=http%3A%2F%2Fwww.ichaatcafe.com&amp;src_bizid=54anJf73lEHBItVRPgRgrA" target="_blank" rel="nofollow" class="url"></a>
									</div>
								</div>
							</div>
							
							<div id="bizPhotos">
								<div class="clearStyles bizPhotoBox">
										<a  href="/biz_photos/54anJf73lEHBItVRPgRgrA?select=gPtUeg7qvd7TkhUi5RQ6Og"><img src="./image/lucas.jpg" width=70 height= 100 style="" alt="�����, �� ����"></a>
								</div>
								<span style="font-size: 10px;"><a rel="nofollow" href="../../uploadPic.php">���� �����</a></span>
							</div>
						</div>
						
						<div id="bizAdditionalInfo" class="clearfix">
							<ul>
								<li><strong>���� �����:</strong> ����� ������</li>
								<li><strong>�������:</strong> ��</li>
								<li><strong>���:</strong> ��</li>
								<li><strong>���� �����:</strong> ��</li>
								<li><strong>������� ������:</strong> ��</li>
								<li><strong>�������:</strong> ��</li>
								<li><strong>������:</strong> ��</li>
								<li><strong>����:</strong> ��</li>
								<li><strong>���� �����:</strong> ��</li>
								<li><strong>����� ����:</strong> ��</li>
											
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
					<h2 id="total_reviews">	<?php echo $count; ?> ������� ���� �����:</h2>	
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
											<LI><A class="bookmark" title="" onclick="initBookSignUp(this,'54anJf73lEHBItVRPgRgrA','iChaat Cafe');return false" href="http://www.yelp.com/signup" rel="nofollow">��� ������</A> </LI>
											<LI><A class="sendToFriend" onclick="Yelp.send2Friends.open(this, '54anJf73lEHBItVRPgRgrA', 'e9vBvWz7IKmZIuvgHvMjgg', null);return false" href="http://www.yelp.com/biz_share?bizid=54anJf73lEHBItVRPgRgrA&reviewid=e9vBvWz7IKmZIuvgHvMjgg&return_url=/biz/ichaat-cafe-sunnyvale-3" rel="nofollow">��� ����</A> </LI>
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
										<P class="reviewer_info"><A class="reviewer_name" href="http://www.yelp.com/user_details?userid=IZ69bDkna2mmffvoTuyEUA">��� �.</A></P>
										<P class="reviewer_info">��-����</P>
									</div>
									<DIV class="ext_rating">
										<DIV class="rating">
											<IMG class="stars_4" title="4 star rating" height="325" alt="4 star rating" src="../../image/stars_map.png" width="83" />
										</DIV>
											<EM class="smaller">5/14/2009</EM> 
									</DIV>
										<P class="review_comment ieSucks">"���� ����, ���� ��� ����. ����� �� ������� ������ ������ ���� ��������� �����. ����� ���� ����� ����� ���� ������ �����. �� ����� ����� ������ ����� �� ����� ���� ������ ���� ��� ���. ���� ��� ������� ������� �� ����; �� ������ ���� ������� �����. ����� �� ����� �� ��� ��� �����. ����� �� �� ������� ���� ���� ������� ���� ������ ������� ������ ��� ���. �� ����� ������ ���� ������ ����� �� ����� �� ������� ��� �����."
										</P>
										<UL class="externalReviewActions">
											<LI><A class="bookmark" title="" onclick="initBookSignUp(this,'54anJf73lEHBItVRPgRgrA','iChaat Cafe');return false" href="http://www.yelp.com/signup" rel="nofollow">��� ������</A> </LI>
											<LI><A class="sendToFriend" onclick="Yelp.send2Friends.open(this, '54anJf73lEHBItVRPgRgrA', 'e9vBvWz7IKmZIuvgHvMjgg', null);return false" href="http://www.yelp.com/biz_share?bizid=54anJf73lEHBItVRPgRgrA&reviewid=e9vBvWz7IKmZIuvgHvMjgg&return_url=/biz/ichaat-cafe-sunnyvale-3" rel="nofollow">��� ����</A> </LI>
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
					<li>  <a href="/signup"   id="Zprofile_footer">�����</a></li>
					<li> | <a href="/about">������ ���</a></li>
					<li> | <a href="/faq" >����� ������ </a></li>
				</ul>
	</div>

	<div class="directory">
		<ul>
			<li class="first"><strong>��� ����</strong></li>
			<li> | <a href="../restaurants.php">��-����</a></li>
			<li> | <a href="../../jerusalem/restaurants.php">�������</a></li>
			<li> | <a href="/boston">����</a></li>
			<li> | <a href="/chicago">��� ���</a></li>
			<li> | <a href="/dallas">������</a></li>
			<li> | <a href="/denver">�����</a></li>
			<li> | <a href="/locations">���� ������</a></li>
		</ul>
	</div>
	
	<div>
		<p> ������ ������ </p>
	</div>
</div>

</body>
</html>
