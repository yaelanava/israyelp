<?php session_start();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>

	<title>לוקאס - תל אביב</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../../mystyle.css"> 
	
	
	<!--<link rel="stylesheet" type="text/css" media="all" href="http://static.px.yelp.com/static/20090507c/css/base_versioned.css">-->
	<link rel="stylesheet" type="text/css" media="print" href="http://static.px.yelp.com/static/20090507c/css/print.css">
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="http://static.px.yelp.com/static/20090507c/css/ie.css" />
	<![endif]-->
	
		<link rel="stylesheet" type="text/css" media="all" href="http://static.px.yelp.com/static/20090507c/css/biz_versioned.css"/>
	<link rel="stylesheet" type="text/css" media="all" href="http://static.px.yelp.com/static/20090507c/css/review.css"/>
	<link rel="stylesheet" type="text/css" media="print" href="http://static.px.yelp.com/static/20090507c/css/biz_print.css"/>
	 
</head>

<body id="yelp_main_body" class="us">

<div id="head">
		<div id="logo">
			<A href="main.php/"></A>
		</div>
		<div id="register">
			<p><?php if (session_is_registered('username')) print("אתה מחובר כ-" . $_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>


<div id="navContainer">
		<ul>
			<LI class="header" id="welcome" ><A class="tabon" href="./">ברוכים הבאים</A> | </LI>
			<LI class="header" id="aboutMe"><A id="Zabout_me" href="http://static.px.yelp.com/signup?return_url=%2Fuser_details" rel="nofollow">עלינו</A> | </LI>
			<LI class="header" id="writeReview"><A id="Zwrite_a_review" href="http://static.px.yelp.com/signup?return_url=%2Fwriteareview" rel="nofollow">כתוב ביקורת</A> | </LI>
			<LI class="header" id="findReview"><A href="http://static.px.yelp.com/find" rel="nofollow">מצא ביקורת</A> | </LI>
			<LI class="header" id="invite"><A id="Zinvite_friends" href="http://static.px.yelp.com/signup?return_url=%2Finvite_friends" rel="nofollow">הזמן חברים</A></LI>
			
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "login.html";}?> rel="nofollow"> <?php if (session_is_registered('username')) {echo "התנתק";} else {echo "כנס";}?></A></LI>
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "profile.php";} else{echo "signup.html?profile=1";}?> rel="nofollow">החשבון שלי </A> | </LI>
			<LI class="header_login"><A href="member_search.php" rel="nofollow"> חיפוש משתמש </A> | </LI>		
		</ul>
</div>

	<div id="bodyContainer">
		<div id="ieInnerWrap" class="clearfix">
			
			<div id="bizMain">
					<div id="bizBox">
			<div class="hReview-aggregate">
		<div class="item vcard">
			<div id="bizInfoBody" class="slideshow">
				<div class="wrap">
					<div id="bizInfoHeader">

						<h1 class="fn org">לוקאס</h1>
						<div id="bizRating">
								<div class="rating"><img class="stars_4 rating average" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div> 
								<em>based on <span class="count">118</span> reviews</em>
									<div id="rating_graph" class="pseudoLink">Rating Details &raquo;</div>
						</div>
					</div>

					<div id="bizInfoContent">
						<p id="bizCategories">Categories:
								<span id="cat_display">				<a  href="/c/sf/mideastern">Middle Eastern</a>, 		<a  href="/c/sf/persian">Persian/Iranian</a> </span>
									&nbsp;[<a href="/biz_attribute?biz_id=OpBTLNaGnGcn8DRsLcEfQQ" id="edit_cat_link" onclick="new Yelp.categoryPickerPopup(this, 'OpBTLNaGnGcn8DRsLcEfQQ'); return false;" class="smallest" rel="nofollow">Edit</a>]
						</p>

						<address class="adr">
							Neighborhood: North Beach/Telegraph Hill<br/>
							<span class="street-address">470 Green St</span><br />		(between Grant Ave &amp; Varennes St) 
<br /><span class="locality">San Francisco</span>, <span class="region">CA</span> <span class="postal-code">94133</span><br />
						</address>
	
							<span id="bizPhone" class="tel">(415) 362-8286</span>
	
							<div id="bizUrl">
									<a href="http://www.yelp.com/redir?url=http%3A%2F%2Fwww.maykadehrestaurant.com&amp;src_bizid=OpBTLNaGnGcn8DRsLcEfQQ" target="_blank" class="url">www.maykadehrestaurant.com</a>
							</div>

							<div id="bizAnnouncement">
								<div id="anncInner" class="clearfix"> 
									<div class="announcement_type SPECIAL_OFFER"><strong>Best Kebob in the Bay Area!</strong></div>
									<p id="bizAnnounDesc">Come in for lunch or dinner and discover why &nbsp;we&#39;ve&#8230;</p>
									<em class="smaller">Announced 1 week ago</em>
										<div id="bizAnnounDesc_more" class="pseudoLink">More &raquo;</div>
										<div id="bizAnnounDesc_less" class="pseudoLink" style="display: none;">Hide &laquo;</div>
								</div>
								<div id="anncBtm">&nbsp;</div>
							</div>
					</div>
				</div>

						<div id="bizSlide">
			<div id="slideBox">
				<div id="slideHeader"></div>
				<div id="slideViewer"></div>
				<div id="slideViewerControls">
					<div id="slideViewerAddPhoto"><a rel="nofollow" href="/biz_photos/OpBTLNaGnGcn8DRsLcEfQQ?action_user_photos=1">Add Photos</a></div>
					<a href="/biz_photos/OpBTLNaGnGcn8DRsLcEfQQ">View All</a>&nbsp;<strong>|</strong>&nbsp;<span id="slidestatus">
						<span style="font-size: 9px;"><strong>1</strong> of <strong>15</strong></span></span>&nbsp;<img id="reverseSSBtn" src="http://static.px.yelp.com/static/20090507a/i/new/slideshow/reverseOff.gif" width="21" height="15" border="0" alt="Previous Photo"/><img id="forwardSSBtn" src="http://static.px.yelp.com/static/20090507a/i/new/slideshow/forwardOff.gif" width="21" height="15" border="0" alt="Next Photo"/><img id="playSSBtn" src="http://static.px.yelp.com/static/20090507a/i/new/slideshow/playOff.gif" width="21" height="15" alt="Start Slideshow"/>
				</div>
				<div id="slideFooter"></div>
			</div>
		</div>

			</div>



				<div id="bizAdditionalInfo" class="clearfix">
					<ul>
										<li><strong>Hours:</strong> <p class="hours">
Mon-Thu.				12:00 p.m. - 10:30 p.m.
			</p>
			<p class="hours">
Fri-Sat.				12:00 p.m. - 11:00 p.m.
			</p>
			<p class="hours">
Sun.				12:00 p.m. - 10:00 p.m.
			</p></li>
		


												<li><strong>Price Range:</strong> <span class="pricerange"> 
							<a id="price_tip" title="Price range is the approximate cost per person for a meal including one drink, tax, and tip.&lt;br/&gt;&lt;br/&gt;We&#39;re going for averages here, folks.&lt;br/&gt;&lt;br/&gt;&amp;#36; = Cheap, Under $10&lt;br/&gt;&amp;#36;&amp;#36; = Moderate, $11 - $30&lt;br/&gt;&amp;#36;&amp;#36;&amp;#36; = Spendy, $31 - $60&lt;br/&gt;&amp;#36;&amp;#36;&amp;#36;&amp;#36; = Splurge, Above $60">$$</a>
	</span></li>
		

												<li><strong>Accepts Credit Cards:</strong> Yes</li>
		

												<li><strong>Parking:</strong> Valet</li>
		

												<li><strong>Attire:</strong> Casual</li>
		

												<li><strong>Good for Groups:</strong> Yes</li>
		

												<li><strong>Good for Kids:</strong> Yes</li>
		

												<li><strong>Takes Reservations:</strong> Yes</li>
		

												<li><strong>Delivery:</strong> No</li>
		

												<li><strong>Take-out:</strong> Yes</li>
		

												<li><strong>Waiter Service:</strong> Yes</li>
		

												<li><strong>Wheelchair Accessible:</strong> Yes</li>
		

												<li><strong>Outdoor Seating:</strong> No</li>
		

												<li><strong>Good for:</strong> Dinner</li>
		

												<li><strong>Alcohol:</strong> Full Bar</li>
		

					</ul>
				</div>
					<div id="firstToReviewBox" class="clearfix">
		<div id="firstToReviewLabel"><a href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:jpyPIGx6-JhJfSmqzY9rkw" rel="nofollow">First to Review</a></div>
				<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=RU7bd3h2f6pBlf8BfAyxGQ"><img src="http://static.px.yelp.com/photo/I-stdAciVThdZNJOCLkP8A/xss" style="height:20px;width:20px;" alt="Photo of Benjamin L." /></a>
	</div>
 <a href="/user_details?userid=RU7bd3h2f6pBlf8BfAyxGQ" id="user_name">Benjamin L.</a>
	</div>

			<div class="clearfix" id="bizOwner">
				<p>
					<a rel="nofollow" href="/biz_attribute?biz_id=OpBTLNaGnGcn8DRsLcEfQQ" id="bizUpdate">Edit Business Info</a>
				</p>
			</div>
		</div>
	</div>

			<div id="bizActions" class="clearfix">
		<a rel="nofollow" href="#" onclick="printSwitch(window.location.href);return false;" id="bizPrintLink">Print version</a>
		<a class="send-to-friend" rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;return_url=%2Fbiz%2Fmaykadeh-persian-cuisine-san-francisco" id="bizShare">Send to Friend</a>

		<a class="bookmark" rel="nofollow" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" class="bookmark" id="bizBookmark" href="/signup">Bookmark</a>
			<a class="send-to-phone" rel="nofollow" id="send2phone" href="#" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine','send2phone');return false">Send to Phone</a>

			<a class="write review" rel="nofollow" href="/writeareview/biz/OpBTLNaGnGcn8DRsLcEfQQ" id="bizWriteReview">Write A Review</a>
	</div>

	</div>


						<div id="about_reviews_tabs">
							<ul class="tabnav clearfix">
								<li class="active" rel="reviews"><div class="shim"><a>Reviews (118)</a></div></li>
								<li rel="about"><div class="shim"><a onmousedown="pageTracker._trackPageview('/biz/about_this_business')">About This Business</a></div></li>
							</ul>
							<p class="pseudohr">&nbsp;</p>
						</div>
						<div id="biz_tab_reviews">
								<div id="bizReviews">
		<a rel="nofollow" name="reviews"></a>
		<div id="bizReviewsHeader" class="clearfix">

				<form id="review_search_form" method="GET" action="/biz/maykadeh-persian-cuisine-san-francisco">
					<p><input type="text" name="q" value="" />
					<button type="submit" class="form_img_btn alignbtm">Search Reviews</button></p>
				</form>
				<h2 id="total_reviews">118 reviews for Maykadeh Persian Cuisine</h2>
		</div>
						<div id="review_snapshot" class="clearfix">
			<h3 id="review_snapshot_header">Review Highlights &nbsp;&nbsp;</h3>
			<div class="content">
				<div id="review_summaries">
						<div class="review_summary clearfix">
								<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/biz/maykadeh-persian-cuisine-san-francisco?q=eggplant+mint+garlic+sauce" class="ngram" sentence-review-id="9_AgcF0u1weuC7u2EN6nEA" ngram="eggplant%20mint%20garlic%20sauce"><img src="http://static.px.yelp.com/photo/VynQh6GUdEsPYXv8Wj87JA/xss" style="height:20px;width:20px;" alt="user photo" /></a>
	</div>

							<div class="snippet">
								"<a class="ngram" sentence-review-id="9_AgcF0u1weuC7u2EN6nEA" ngram="eggplant%20mint%20garlic%20sauce" href="/biz/maykadeh-persian-cuisine-san-francisco?q=eggplant+mint+garlic+sauce" rel="nofollow">eggplant and mint garlic sauce</a> appetizer (aka Kashke Bademjan."
								<span class="secondary">(in 6 reviews)</span>
							</div>
						</div>
						<div class="review_summary clearfix">
								<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/biz/maykadeh-persian-cuisine-san-francisco?q=kashke+bademjan" class="ngram" sentence-review-id="Wy3Gn3c4quLPqOSFONNXNA" ngram="kashke%20bademjan"><img src="http://static.px.yelp.com/photo/mgZB0mbkBJHFk_yi1qWAGw/xss" style="height:20px;width:20px;" alt="user photo" /></a>
	</div>

							<div class="snippet">
								"The <a class="ngram" sentence-review-id="Wy3Gn3c4quLPqOSFONNXNA" ngram="kashke%20bademjan" href="/biz/maykadeh-persian-cuisine-san-francisco?q=kashke+bademjan" rel="nofollow">Kashke Bademjan</a> is the best appetizer there."
								<span class="secondary">(in 9 reviews)</span>
							</div>
						</div>
						<div class="review_summary clearfix">
								<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/biz/maykadeh-persian-cuisine-san-francisco?q=basmati+rice" class="ngram" sentence-review-id="zxCW8BIuMTa8zxHm2RLVPg" ngram="basmati%20rice"><img src="http://static.px.yelp.com/photo/JgXuoMXVrZoXFgyZiqyAtg/xss" style="height:20px;width:20px;" alt="user photo" /></a>
	</div>

							<div class="snippet">
								"The lamb is always delicious, and the <a class="ngram" sentence-review-id="zxCW8BIuMTa8zxHm2RLVPg" ngram="basmati%20rice" href="/biz/maykadeh-persian-cuisine-san-francisco?q=basmati+rice" rel="nofollow">Basmati rice</a> is addicting."
								<span class="secondary">(in 13 reviews)</span>
							</div>
						</div>
				</div>
				<div id="snapshot_graphs">
					<div class="padding">
						<div id="review_snapshot_graph_header"></div>
						<div id="review_snapshot_graph_content">
							<div class="loader">
								<img src="http://static.px.yelp.com/static/20090507a/i/new/gfx/burst_loader_ani.gif" alt="loading" class="loader" />&nbsp;&nbsp;Loading...
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

				<div id="review_sort_section">Sort by: 
			
				<a rel="nofollow" class="sort_label_desc selected" href="/biz/maykadeh-persian-cuisine-san-francisco?rpp=40&amp;sort_by=relevance_asc">Recent + Votes</a>
			 | 
				<a rel="nofollow" href="/biz/maykadeh-persian-cuisine-san-francisco?rpp=40&amp;sort_by=date_desc">Date</a>
			 | 
				<a rel="nofollow" href="/biz/maykadeh-persian-cuisine-san-francisco?rpp=40&amp;sort_by=rating_desc">Rating</a>
			 | 
					<a rel="nofollow" href="/biz/maykadeh-persian-cuisine-san-francisco?rpp=40&amp;sort_by=elites_desc">Elites&#39;</a>
	</div>



		<div id="bizReviewsContent">
						<a id="bizSupporter" title="This business is a paying advertiser. As an advertiser, this business receives an enhanced photo slideshow and the ability to highlight one of their favorite reviews at the top of their business page. Advertisers cannot delete or otherwise censor negative reviews.">This business is a Yelp Sponsor</a>
						<h3 id="featuredReviewHeader">One of Maykadeh Persian Cuisine&#39;s Favorite Reviews <a class="whatsthis" title="Yelp Sponsors can highlight <strong>one</strong> of their favorite reviews at the top of their business page. Following that, review order is determined by a combination of recency and user voting, this methodology is applied to all businesses, sponsors or not." href="#">What&#39;s This?</a></h3>
							<div id="review_MSSTKb_mGZtTPbRm_c7_dQ" class="review externalReview clearfix nonfollowingReview featuredReview">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=zp3tRNqyeL7-kGDJwMkgpQ"><img src="http://static.px.yelp.com/photo/CpSLzdUYUjVmI4SgZZ4W7Q/ss" style="height:40px;width:40px;" alt="Photo of Michele F." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						<a rel="nofollow" href="/elite" title="User is Elite">Elite &#39;09</a>
				</p>
			<p class="miniOrange friend_count ieSucks">9</p>
			<p class="miniOrange review_count ieSucks">73</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=zp3tRNqyeL7-kGDJwMkgpQ" class="reviewer_name">Michele F.</a></p>
					<p class="reviewer_info">Berkeley, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_5" width="83" height="325" title="5 star rating" alt="5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">2/20/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">Maykadeh was recommended to me by a Persian. &nbsp;They said it was the best Persian restaurant in the area. &nbsp;So on a cold rainy February night I made my way out to San Fran to try it for myself. &nbsp;The restaurant is very comfortable. &nbsp;They have cozy booth seating next to the windows, as well as tables throughout the rest of the restaurant for groups. &nbsp;A platter full of herbs, and cheese is served to you along with flat bread before your meal. &nbsp;The tea that they serve is black and delicious. &nbsp;It is a must if you go. &nbsp;The food is amazing. &nbsp;My boyfriend had the Khorest Fesenjoon, which is chicken in a pomegranate nut sauce, and I had the Sunday special, Bagalhi Polo, which is lamb shank with dill and Lima bean rice. &nbsp;<br /><br />If you are looking to try something new, or if you are just want something savory, this place is for you. &nbsp;It would be perfect for a date, or an adventurous family outing.</p> 				
			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2Fzp3tRNqyeL7-kGDJwMkgpQ%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="MSSTKb_mGZtTPbRm_c7_dQ" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=MSSTKb_mGZtTPbRm_c7_dQ&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:MSSTKb_mGZtTPbRm_c7_dQ" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'MSSTKb_mGZtTPbRm_c7_dQ')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 
			<div id="bizReviewsInner">
									<div id="review_Pwas_x9_LQnv599hHRpCKw" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=GG7fISPKxdGqzM8pKsuhtw"><img src="http://static.px.yelp.com/photo/A1bd-M7lPlp24MAFdSkFiA/ss" style="height:40px;width:40px;" alt="Photo of M M." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">5</p>
			<p class="miniOrange review_count ieSucks">23</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=GG7fISPKxdGqzM8pKsuhtw" class="reviewer_name">M M.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">4/30/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">Excellent food and nice decor<br /><br />Portions are generous, &nbsp;so go there w/ an appetite<br /><br />Order Zereshk Polo and the eggplant appetizer<br /><br />mmmm...........</p> 				
			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FGG7fISPKxdGqzM8pKsuhtw%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="Pwas_x9_LQnv599hHRpCKw" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=Pwas_x9_LQnv599hHRpCKw&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'Pwas_x9_LQnv599hHRpCKw', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:Pwas_x9_LQnv599hHRpCKw" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'Pwas_x9_LQnv599hHRpCKw')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_ip8JkvSfyV-EEAE_joqoOw" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=51qAUEpBm23k4CX_uGZcMA"><img src="http://static.px.yelp.com/photo/umrAyEpBghSwYjsRU-na3w/ss" style="height:40px;width:40px;" alt="Photo of Nikki L." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">5</p>
			<p class="miniOrange review_count ieSucks">22</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=51qAUEpBm23k4CX_uGZcMA" class="reviewer_name">Nikki L.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">4/16/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">Once again fellow Yelpers...you always come through. <br /><br />So it was my turn to pick a place to eat so I refer to my trusty Yelp. <br /><br />I wanted something good but different. So I decided to go to Maykadeh. I had never been to a Persian restaurant before so I had no clue what I was getting into. <br /><br />I don&#39;t even know the name of what I ordered, it was the special and some kind of ground chicken. It had to be the best ground chicken whatchamacallit I have ever had. It was moist and tasty. If all Persian food is this good I need to take a trip cause they are doing it right.</p> 				
			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2F51qAUEpBm23k4CX_uGZcMA%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="ip8JkvSfyV-EEAE_joqoOw" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=ip8JkvSfyV-EEAE_joqoOw&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'ip8JkvSfyV-EEAE_joqoOw', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:ip8JkvSfyV-EEAE_joqoOw" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'ip8JkvSfyV-EEAE_joqoOw')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_vX1S20imuJ6fGPReWhHNYQ" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=GCuDiPUKYxhgFHP5LqJa2Q"><img src="http://static.px.yelp.com/photo/LADoTlmBvWljIJdpI95NTw/ss" style="height:40px;width:40px;" alt="Photo of Gloria H." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						<a rel="nofollow" href="/elite" title="User is Elite">Elite &#39;09</a>
				</p>
			<p class="miniOrange friend_count ieSucks">111</p>
			<p class="miniOrange review_count ieSucks">729</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=GCuDiPUKYxhgFHP5LqJa2Q" class="reviewer_name">Gloria H.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">3/16/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">Took us almost a year to come here and I feel bad to say that it was all because the other 2 places we had in mind didn&#39;t work out...BUT it turned out to be a good thing so a win-win for all. &nbsp;<br /><br />The place is bright with large glass partitions but tightly packed with tables with little room to move around. &nbsp;We were lead to the bench seats behind the bar with a party of 2 on either side. &nbsp;The place was very warm to a point of stuffy and we were dressed in winter gear...while I down iced water (I don&#39;t normally drink water), hubby asked if they can turn on the fans. &nbsp;Guess the fans don&#39;t really work but they did get the AC going...<br /><br />While we were debating what to order, the couple sitting to our left was very friendly and told us the lamb tongue we were considering is very good. &nbsp;They were having this thick layer of crispy rice with gravy over it. &nbsp;It really looked good and we shall try next time. &nbsp;<br /><br />To start, I got the Rotari - it&#39;s an individual sized bottle of sparkling wine. &nbsp;So cute and perfect for one. &nbsp;I need to find it and get myself a case at home! &nbsp;Hubby got a glass of chardonnay. &nbsp;We ordered:<br /><br />Lamb tongue with lime juice, sour cream and saffron - $14 - it tasted like curry but a little tart. &nbsp;The tongue was so tender and flavorful. &nbsp;It was not gamey at all.<br /><br />Skewered mixture of Certified Angus Beef and leg of lamb, ground daily, onion, Persian spices, Basmati rice - $14.75 - huge oval plate of basmati rice with a grilled tomato and 2 long skewers of tasty meat with juices oozing out. &nbsp;Hubby liked it a lot and had half of the dish even though it was mine!<br /><br />Lamb shank, baby eggplant braised with tomato, saffron, sun dried lime, Basmati rice - $16 - the meat falls off the bone. &nbsp;It was tender and very flavorful.<br /><br />I added a glass of syrah with dinner. &nbsp;As mentioned by other yelpers, you are served with warm flat bread and a plate filled with a chunk of feta cheese, sprigs of basil and radish. &nbsp;There were also couple cubes of butter. &nbsp;<br /><br />We thoroughly enjoyed dinner and look forward to returning soon.</p> 						<div class="rateReview external" id="ufc_vX1S20imuJ6fGPReWhHNYQ">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (2)
							</li>
							<li class="smaller">
								Funny (2)
							</li>
							<li class="smaller">
								Cool (1)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FGCuDiPUKYxhgFHP5LqJa2Q%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="vX1S20imuJ6fGPReWhHNYQ" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=vX1S20imuJ6fGPReWhHNYQ&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'vX1S20imuJ6fGPReWhHNYQ', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:vX1S20imuJ6fGPReWhHNYQ" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'vX1S20imuJ6fGPReWhHNYQ')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_BKYaQXs3DFUY0qLIuJdsPw" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=HYhMBUK6-uMofKV_CS-p7g"><img src="http://static.px.yelp.com/photo/tMN6P9CsqcdeZK2M3nYKmA/ss" style="height:40px;width:40px;" alt="Photo of Kasra V." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">0</p>
			<p class="miniOrange review_count ieSucks">8</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=HYhMBUK6-uMofKV_CS-p7g" class="reviewer_name">Kasra V.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_5" width="83" height="325" title="5 star rating" alt="5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">4/13/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">Great kabobs.....delicious stews.....amazing zaboon......great service....<br />expensive like 40 pp</p> 				
			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FHYhMBUK6-uMofKV_CS-p7g%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="BKYaQXs3DFUY0qLIuJdsPw" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=BKYaQXs3DFUY0qLIuJdsPw&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'BKYaQXs3DFUY0qLIuJdsPw', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:BKYaQXs3DFUY0qLIuJdsPw" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'BKYaQXs3DFUY0qLIuJdsPw')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_n0SAaK_KguVZhpX7gmxIlg" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=m-_pnRtoqOxw-zOtDADckQ"><img src="http://static.px.yelp.com/photo/3tpUqhcX2XRwOqvt4A3hdQ/ss" style="height:40px;width:40px;" alt="Photo of Cara J." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">13</p>
			<p class="miniOrange review_count ieSucks">120</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=m-_pnRtoqOxw-zOtDADckQ" class="reviewer_name">Cara J.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_3" width="83" height="325" title="3 star rating" alt="3 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">3/5/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">I wasn&#39;t that impressed. &nbsp;I&#39;ve had Persian in Seattle and it tasted better. &nbsp;I ordered the lamb dish the waitress like the best (oddly also one of the most expensive dishes). The lamb was great, well flavored, etc, but the rice and veggies are something my mom (who can&#39;t cook and isn&#39;t Persian) would have made. &nbsp;I was also annoyed by the conversation one of the employees was having with a few people at the table nearby, at least one of whom he must have known. &nbsp;Plus there&#39;s no parking in North Beach at night and the person I went with had to do valet parking, which at least they do provide in front of their restaurant for $10.<br /><br />In sum: It&#39;s not good enough to to justify the price. &nbsp;Nice lights on the trees outside though.</p> 						<div class="rateReview external" id="ufc_n0SAaK_KguVZhpX7gmxIlg">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (1)
							</li>
							<li class="smaller">
								Cool (1)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2Fm-_pnRtoqOxw-zOtDADckQ%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="n0SAaK_KguVZhpX7gmxIlg" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=n0SAaK_KguVZhpX7gmxIlg&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'n0SAaK_KguVZhpX7gmxIlg', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:n0SAaK_KguVZhpX7gmxIlg" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'n0SAaK_KguVZhpX7gmxIlg')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_07szBw91C9ayEqSwMDEDCA" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=avQj5fVfA1FD0575MMKjnw"><img src="http://static.px.yelp.com/photo/WY192dQTdW-Lh0wLq_u7Xw/ss" style="height:40px;width:40px;" alt="Photo of Bhumika K." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">15</p>
			<p class="miniOrange review_count ieSucks">94</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=avQj5fVfA1FD0575MMKjnw" class="reviewer_name">Bhumika K.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">3/12/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">I can&#39;t really comment on the food, because I&#39;m on a stupid wedding diet - may as well be called hell. &nbsp;I ended up having a greek salad, lentil soup (yum) and the yogurt dip with the elephant garlic (don&#39;t get this). <br /><br />But what I can comment on is the service. &nbsp;The host was so nice and placed my friend&#39;s stroller in the back and provided a corner seat so the baby can sleep properly. &nbsp;Our server was totally unassuming too. &nbsp;When we asked what the &quot;dough&quot; drink was, she came back and brought us a sample, provided recommendations and was just so pleasant. <br /><br />4 stars for now, probably 5 stars when I go back here post wedding starvation.</p> 				
			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FavQj5fVfA1FD0575MMKjnw%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="07szBw91C9ayEqSwMDEDCA" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=07szBw91C9ayEqSwMDEDCA&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', '07szBw91C9ayEqSwMDEDCA', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:07szBw91C9ayEqSwMDEDCA" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', '07szBw91C9ayEqSwMDEDCA')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_wYWFHTpR8LtG2If_xRxbIA" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=qot3ukhDVXS3rCYmE5wS-A"><img src="http://static.px.yelp.com/photo/MWWj-g5CY6AJFU-J8VadRg/ss" style="height:40px;width:40px;" alt="Photo of Will A." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						<a rel="nofollow" href="/elite" title="User is Elite">Elite &#39;09</a>
				</p>
			<p class="miniOrange friend_count ieSucks">21</p>
			<p class="miniOrange review_count ieSucks">170</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=qot3ukhDVXS3rCYmE5wS-A" class="reviewer_name">Will A.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_3" width="83" height="325" title="3 star rating" alt="3 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">3/6/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">Yay, Persian food in a convenient location! Maykadeh doesn&#39;t quite live up to The Persian Room&#39;s (Scottsdale, AZ) standards but is pretty good. Actually I went here because there was a thread on Yelp talk about finding hot Persian girls and someone said they go here. Well, can&#39;t vouch for that... hot Persian girls were scarce. Food was good and the restaurant was pretty though. Solid 3 stars!</p> 				
			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2Fqot3ukhDVXS3rCYmE5wS-A%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="wYWFHTpR8LtG2If_xRxbIA" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=wYWFHTpR8LtG2If_xRxbIA&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'wYWFHTpR8LtG2If_xRxbIA', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:wYWFHTpR8LtG2If_xRxbIA" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'wYWFHTpR8LtG2If_xRxbIA')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_nLSZKsHriZgGQGE-LeXdRQ" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=JopUeYYcCp5RTOcD5kPn2A"><img src="http://static.px.yelp.com/photo/J7fNt7CzsadSo3qUzhRsVg/ss" style="height:40px;width:40px;" alt="Photo of Lydia S." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">0</p>
			<p class="miniOrange review_count ieSucks">3</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=JopUeYYcCp5RTOcD5kPn2A" class="reviewer_name">Lydia S.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_5" width="83" height="325" title="5 star rating" alt="5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">3/13/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">is just great! Sasha is very gentleman and the food i had there.............one of the most fullfilling food ever in the city!<br />I will never forget all those courses....still in the back of my mind.<br />thank you for that experience. was great food ever!</p> 				
			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FJopUeYYcCp5RTOcD5kPn2A%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="nLSZKsHriZgGQGE-LeXdRQ" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=nLSZKsHriZgGQGE-LeXdRQ&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'nLSZKsHriZgGQGE-LeXdRQ', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:nLSZKsHriZgGQGE-LeXdRQ" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'nLSZKsHriZgGQGE-LeXdRQ')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_pAWuXufGy7GBPcJBKk1lEA" class="review review-with-updates externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=dfYNTBw--CYlZbFz581kYQ"><img src="http://static.px.yelp.com/photo/75jNfx5AzWT234w7oDwPwg/ss" style="height:40px;width:40px;" alt="Photo of Meghan P." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						<a rel="nofollow" href="/elite" title="User is Elite">Elite &#39;09</a>
				</p>
			<p class="miniOrange friend_count ieSucks">1455</p>
			<p class="miniOrange review_count ieSucks">686</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=dfYNTBw--CYlZbFz581kYQ" class="reviewer_name">Meghan P.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_5" width="83" height="325" title="5 star rating" alt="5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller updated_date">Updated - 12/31/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">I brought my family back to Maykadeh last night and they loved it and could not stop raving about the food. I had the sweet &amp; sour sauce chicken again which is absolutely sinful. The Persian martini was also delish! So I will keep my 5 star reviews but have to say...<br /><br />I&#39;m not so sure about those desserts! We tried the Persian ice cream and another dessert with a strange name. When we asked the server what it was before ordering it, he said it was like shaved ice with rose water and noodles. I&#39;m not sure why we still braved ordering it... yes, it was refreshing but SO strange. I guess I have to develop my taste for Persian desserts a bit more but until then will stick to the apps and mains...</p> 						<div class="rateReview external" id="ufc_pAWuXufGy7GBPcJBKk1lEA">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (13)
							</li>
							<li class="smaller">
								Funny (9)
							</li>
							<li class="smaller">
								Cool (12)
							</li>
			</ul>
		</div>

			
						<div class="archived_reviews excerpt" id="review:pAWuXufGy7GBPcJBKk1lEA::biz:OpBTLNaGnGcn8DRsLcEfQQ">
		<h4>1 Previous Review:
					<span class="pseudoLink">Show all &raquo;</span>
		</h4>
		<ul class="stripped">
				<li class="clearfix">
					<div class="rating-small"><img class="stars_5" width="83" height="325" title="5 star rating" alt="5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div> <em>11/7/2008</em>
					
					<p class="review_comment">Thank you Yelp and Yelpers for leading me to a true gem, once again! I live right by Maykadeh&#8230;
							<span class="pseudoLink">Read more &raquo;</span>
					</p>
				</li>
		</ul>
	</div>

			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FdfYNTBw--CYlZbFz581kYQ%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="pAWuXufGy7GBPcJBKk1lEA" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=pAWuXufGy7GBPcJBKk1lEA&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'pAWuXufGy7GBPcJBKk1lEA', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:pAWuXufGy7GBPcJBKk1lEA" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'pAWuXufGy7GBPcJBKk1lEA')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_gaUM5yVQhqmVfXq4CMFU0Q" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=OFp4aPsp0KBoyg5aTc234g"><img src="http://static.px.yelp.com/photo/Vvy_gRYbbcTiPdSShIchew/ss" style="height:40px;width:40px;" alt="Photo of Melvie S." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">0</p>
			<p class="miniOrange review_count ieSucks">3</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=OFp4aPsp0KBoyg5aTc234g" class="reviewer_name">Melvie S.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">2/1/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">I can&#39;t wait to go back &nbsp;to Maykadeh again....I really loved the food. It&#39;s delicious.Yum Yummy. &nbsp;Probably go back on Valentines day. Wow! We&#39;ve been here many times. <br /><br />One thing is I loved their special ice cream. Hmmm.... so good &nbsp;This is a good place to eat kebab or Persian food.</p> 						<div class="rateReview external" id="ufc_gaUM5yVQhqmVfXq4CMFU0Q">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (1)
							</li>
							<li class="smaller">
								Cool (1)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FOFp4aPsp0KBoyg5aTc234g%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="gaUM5yVQhqmVfXq4CMFU0Q" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=gaUM5yVQhqmVfXq4CMFU0Q&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'gaUM5yVQhqmVfXq4CMFU0Q', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:gaUM5yVQhqmVfXq4CMFU0Q" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'gaUM5yVQhqmVfXq4CMFU0Q')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_dOaZg4Gu0Ba1YA5ga0x8uA" class="review review-with-updates externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=lCmvpQfFpdxhbWVM59eUCg"><img src="http://static.px.yelp.com/photo/sYkS6gqlTpT6UeCTLRI4oA/ss" style="height:40px;width:40px;" alt="Photo of joce l." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">23</p>
			<p class="miniOrange review_count ieSucks">605</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=lCmvpQfFpdxhbWVM59eUCg" class="reviewer_name">joce l.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller updated_date">Updated - 2/13/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">I had the lamb shank here too; very very flavorful and fell right off the bone. YUMMY!<br />Huge portions (i think it&#39;s family style) an if you can&#39;t finish it, pack up the leftovers; they&#39;re as good as they were when you first ate them!</p> 				
			
						<div class="archived_reviews excerpt" id="review:dOaZg4Gu0Ba1YA5ga0x8uA::biz:OpBTLNaGnGcn8DRsLcEfQQ">
		<h4>1 Previous Review:
					<span class="pseudoLink">Show all &raquo;</span>
		</h4>
		<ul class="stripped">
				<li class="clearfix">
					<div class="rating-small"><img class="stars_3" width="83" height="325" title="3 star rating" alt="3 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div> <em>2/8/2009</em>
					
					<p class="review_comment">&quot;What is that chicken with basmati rice? The best dish there...chicken is very tender and flavorful&quot;
							<span class="pseudoLink">Read more &raquo;</span>
					</p>
				</li>
		</ul>
	</div>

			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FlCmvpQfFpdxhbWVM59eUCg%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="dOaZg4Gu0Ba1YA5ga0x8uA" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=dOaZg4Gu0Ba1YA5ga0x8uA&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'dOaZg4Gu0Ba1YA5ga0x8uA', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:dOaZg4Gu0Ba1YA5ga0x8uA" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'dOaZg4Gu0Ba1YA5ga0x8uA')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_WqN66-Jx6XgykinQMlxuVA" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=ml6oLMrQw9fk7rW6iud88Q"><img src="http://static.px.yelp.com/photo/m04hDhQLVe8kLcQlEcSCiA/ss" style="height:40px;width:40px;" alt="Photo of ben d." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">11</p>
			<p class="miniOrange review_count ieSucks">10</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=ml6oLMrQw9fk7rW6iud88Q" class="reviewer_name">ben d.</a></p>
					<p class="reviewer_info">Berkeley, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">4/7/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">went there with a friend, <br />the food was very tasty and different. had the lamb tongue for the first time and loved it.<br />the parking was hard to find.<br />i liked the place</p> 				
			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2Fml6oLMrQw9fk7rW6iud88Q%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="WqN66-Jx6XgykinQMlxuVA" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=WqN66-Jx6XgykinQMlxuVA&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'WqN66-Jx6XgykinQMlxuVA', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:WqN66-Jx6XgykinQMlxuVA" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'WqN66-Jx6XgykinQMlxuVA')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_82PocbVTz6DMw74TVYiPCw" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=3ydG8dwXw2gytUkqEHR6Tw"><img src="http://static.px.yelp.com/photo/g_8fiYg8hto0Ro_LjVoTEw/ss" style="height:40px;width:40px;" alt="Photo of Jonathan F." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">0</p>
			<p class="miniOrange review_count ieSucks">134</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=3ydG8dwXw2gytUkqEHR6Tw" class="reviewer_name">Jonathan F.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">12/28/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">Maykadeh Persian Restaurant has good food. Almost all of their entrees are outstanding. <br /><br />Atmosphere is pleasant and service is friendly. Yes, some of the items on the menu are a bit pricey. But it all depends upon what you want and what you like. No matter where I go, I always order a specialty. <br /><br />Each restaurant regardless of the type or style of food has a specialty. I look for some item on the menu that is prepared well or is unique. <br /><br />I am not an expert on Persian food. But I have been to Mediterranean style places enough to discern what is basic and what is a specialty. For example, hummus, falafel and tabbouleh, these are routine side dishes found almost everywhere in the city these days. <br /><br />Yet, special dishes found only at a Persian restaurant is what I pay more attention to. The dishes that are distinctively Persian, this is what I look for when going to places like Maykadeh. <br /><br />I enjoy the lamb dishes, especially the kabob. I am not daring enough yet to try such entrees like Lamb brains or feet, etc. <br /><br />I do enjoy the use of spices and herbs which make the food flavorful and exotic. Dishes like the Kashke Bademjam, a mixture of eggplant, mint and garlic is delicious. One item that is not listed but I am told by friends that it is a treat for any Persian meal is...Tadik. <br /><br />This is a rice that is cooked in a special way that makes it crunchy and buttery sweet. See web link for one recipe I found: <br /><br /><a href="http://www.yelp.com/redir?url=http%3A%2F%2Fwww.katshomecooking.com%2F2008%2F09%2Fstill-on-persian-kick-ghormeh-sabzi-and.html" target="_blank" rel="nofollow">http://www.katshomecoo...</a> <br /><br />And, another site at web link: <br /><br /><a href="http://www.yelp.com/redir?url=http%3A%2F%2Fwww.teich.net%2Fblog%2F2006%2F01%2F22%2Fpersian-rice-dishes%2F" target="_blank" rel="nofollow">http://www.teich.net/b...</a> <br /><br />I was told by friends and acquaintances that you must ask for tadik and it will only be served if they have it already made for that day. <br /><br />I have been to Alborz Restaurant on Van Ness Ave, which is alright but I think Maykadeh is better, at least I was told it was. <br /><br />All I can say is that I enjoyed my experience and the food was delicious. <br /><br />Located in North Beach, there is parking available at Maykadeh right outside the door. But since the area is always so busy with people, parking is not easy to find. <br /><br />For more info see the restaurant&#39;s web site at: <br /><br /><a href="http://www.yelp.com/redir?url=http%3A%2F%2Fwww.maykadehrestaurant.com" target="_blank" rel="nofollow">http://www.maykadehres...</a>/</p> 						<div class="rateReview external" id="ufc_82PocbVTz6DMw74TVYiPCw">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (1)
							</li>
							<li class="smaller">
								Funny (1)
							</li>
							<li class="smaller">
								Cool (1)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2F3ydG8dwXw2gytUkqEHR6Tw%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="82PocbVTz6DMw74TVYiPCw" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=82PocbVTz6DMw74TVYiPCw&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', '82PocbVTz6DMw74TVYiPCw', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:82PocbVTz6DMw74TVYiPCw" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', '82PocbVTz6DMw74TVYiPCw')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_GUMZETdpBZNLD8dvAdnZhQ" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=TTXdVPTinvm5tEA-_w-DcQ"><img src="http://static.px.yelp.com/photo/uRCz2y3aP6xmXBma-ej9fQ/ss" style="height:40px;width:40px;" alt="Photo of Jimmy L." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">3</p>
			<p class="miniOrange review_count ieSucks">152</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=TTXdVPTinvm5tEA-_w-DcQ" class="reviewer_name">Jimmy L.</a></p>
					<p class="reviewer_info">Santa Clara, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">12/12/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">I&#39;m a fan of Persian food, and this is one of the best places I have ever been to. They are located in North Beach, provide valet parking (yet, I always opt to look for my own!). <br /><br />I have only been here twice, and both times, have ordered the braised lamb shank, which is slow-cooked with beans and spices. Unfortunately, I can&#39;t remember the name of it, and I think is slightly different than the one posted on the online menu. It&#39;s really good, and the meat falls off the bone, which of course is the best part, and where all the flavor is. It goes well with the rice that is so infused with flavor that you know it&#39;s been cooked well, and cooked slow!<br /><br />I also tried the baby chicken (poissin) which my mother ordered, and was really tender and moist. Even better and more moist was the Joojeh Kebab (boneless chicken thighs marinated in saffron, onion and lime juice). Both the chicken entrees came with vegetables - in addition to the basmati rice.<br /><br />The ambience is typical San Franciscan - intimate, and with candles. You can&#39;t beat that!<br /><br />The service was just OK - with the generic yet obligatory and emotionless, &quot;How is everything?&quot; ten minutes into the meal.<br /> <br />The complimentary flat bread leaves something to be desired and I could do without it. It&#39;s kind of like lke-warm cardboard.</p> 						<div class="rateReview external" id="ufc_GUMZETdpBZNLD8dvAdnZhQ">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (1)
							</li>
							<li class="smaller">
								Cool (1)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FTTXdVPTinvm5tEA-_w-DcQ%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="GUMZETdpBZNLD8dvAdnZhQ" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=GUMZETdpBZNLD8dvAdnZhQ&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'GUMZETdpBZNLD8dvAdnZhQ', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:GUMZETdpBZNLD8dvAdnZhQ" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'GUMZETdpBZNLD8dvAdnZhQ')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_iv1SXp7obGvzN0xMABzA2Q" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=7KVpIdVSWCzI5F7TGxQawA"><img src="http://static.px.yelp.com/photo/-hbbhz4y0kWgsO-OcxAHaA/ss" style="height:40px;width:40px;" alt="Photo of Tash S." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">3</p>
			<p class="miniOrange review_count ieSucks">61</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=7KVpIdVSWCzI5F7TGxQawA" class="reviewer_name">Tash S.</a></p>
					<p class="reviewer_info">Oakland, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_5" width="83" height="325" title="5 star rating" alt="5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">11/25/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">I&#39;m a snob when it comes to Persian food. I love this place, a little pricey but honestly what good Persian food isn&#39;t? All the meat is tender, and the stews and soups are fresh. I think this is the best Persian spot that I&#39;ve tried in San Francisco. Most of the time when I&#39;m craving Persian, I head out to the East Bay and eat my family&#39;s home cooking. But when I&#39;m feeling saucy, I come here. It&#39;s great.</p> 						<div class="rateReview external" id="ufc_iv1SXp7obGvzN0xMABzA2Q">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (2)
							</li>
							<li class="smaller">
								Cool (1)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2F7KVpIdVSWCzI5F7TGxQawA%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="iv1SXp7obGvzN0xMABzA2Q" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=iv1SXp7obGvzN0xMABzA2Q&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'iv1SXp7obGvzN0xMABzA2Q', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:iv1SXp7obGvzN0xMABzA2Q" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'iv1SXp7obGvzN0xMABzA2Q')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_VCH5v_1_ygLyRucfgJQNxg" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=HEPfqAH6ObF36Fp1B9Fi1Q"><img src="http://static.px.yelp.com/photo/IhHN11viv9kArNPm1uryDg/ss" style="height:40px;width:40px;" alt="Photo of Sally M." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						<a rel="nofollow" href="/elite" title="User is Elite">Elite &#39;09</a>
				</p>
			<p class="miniOrange friend_count ieSucks">61</p>
			<p class="miniOrange review_count ieSucks">145</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=HEPfqAH6ObF36Fp1B9Fi1Q" class="reviewer_name">Sally M.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_5" width="83" height="325" title="5 star rating" alt="5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">11/24/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">Incredibly delicious - absolutely superb!<br /><br />A friend of mine took me here last night to show me his native cuisine and introduce me to Persian food, and it was so good, I was craving it again today! <br /><br />We started off and sampled the mint leaves, wrapped in the naan-like bread (apologies for not knowing the Persian word), with feta. Then we ordered the fabulously delicious Mast-o-Khier (homemade yogurt and cucumber), that went well with most everything. My friend also ordered us another appetizer that he loved - which was essentially &quot;crunchy rice&quot; with stew atop. I wasn&#39;t such a fan of the &quot;crunchy rice&quot; part, but he loved it, and I did enjoy the stew. (I think this is a local favourite... not even sure if it&#39;s on the menu...) ;)<br /><br />For our main course, we ordered the Poussin, the Shish Kebab (lamb), and I think the Maykadeh Kebab (filet mignon). We put all this atop the Basmati Rice, along with the roasted tomatoes and green peppers. Everything was delicious!<br /><br />We were treated to a dessert of Baklava and Bastani (Persian ice cream - rose water and pistachio, maybe? very yummy!), as well as some tea. Even though I thought we had no room for dessert, I was royally impressed with this heavenly dessert! And today I&#39;m craving for more...<br /><br />I&#39;m so looking forward to our next visit to Maykadeh, as I now adore Persian food!</p> 						<div class="rateReview external" id="ufc_VCH5v_1_ygLyRucfgJQNxg">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (1)
							</li>
							<li class="smaller">
								Cool (1)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FHEPfqAH6ObF36Fp1B9Fi1Q%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="VCH5v_1_ygLyRucfgJQNxg" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=VCH5v_1_ygLyRucfgJQNxg&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'VCH5v_1_ygLyRucfgJQNxg', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:VCH5v_1_ygLyRucfgJQNxg" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'VCH5v_1_ygLyRucfgJQNxg')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_TTWN98bWajyyg8WBDazZ5A" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=JLOlSZ-HWXbTIiJxFEHb1Q"><img src="http://static.px.yelp.com/photo/mpXhShs2Yh63NLXOCujwzA/ss" style="height:40px;width:40px;" alt="Photo of hasham Y." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">10</p>
			<p class="miniOrange review_count ieSucks">56</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=JLOlSZ-HWXbTIiJxFEHb1Q" class="reviewer_name">hasham Y.</a></p>
					<p class="reviewer_info">San Jose, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_2" width="83" height="325" title="2 star rating" alt="2 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">3/6/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">It has been a while since i last had Persian food so I was really looking forward eating there. The restaurant is located in residential/ commercial neighborhood so parking is a hassle. I drove around with hope of finding a parking but that effort was futile. Eventually i ended up using their valet service which costs $10. <br />the restaurant had nice decor and great sitting arrangements. The host was friendly and seated us right away. Must say reservation is really not necessary there. The menu has tons of lamb, chicken and beef entrees initially making my carnivorous stomach very happy. <br />Being clueless as to what lamb entree to eat, i asked the server for recommendation and landed with Shishlek (lamp chops) <br />They serve a house appetizer which includes raw onion, mint leave and Feta cheese with bread. I have never eaten raw onion and mint leaves in appetizer but i am not a Persian either. The food was avg. The lamb was mildly spiced, tender and juicy. It was definitely cooked to perfection as it is really easy to over cook lamb. I enjoyed eating the lamb but I didn&#39;t eat much of the sides ( veges and rice) as they weren&#39;t too flavorful or appealing. Veges had the soogy overcooked look. <br />The server forgot about the table after serving food. No follow up on how the food was or if we need any thign else until we were and i had to pay the bill on my way out. Actually the funny thing is they would have let me walk out for free If i hadn&#39;t ask for the bill. Yes, the staff really lost it in the end. <br />All in all, I found the restaurant pricey.</p> 				
			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FJLOlSZ-HWXbTIiJxFEHb1Q%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="TTWN98bWajyyg8WBDazZ5A" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=TTWN98bWajyyg8WBDazZ5A&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'TTWN98bWajyyg8WBDazZ5A', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:TTWN98bWajyyg8WBDazZ5A" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'TTWN98bWajyyg8WBDazZ5A')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_kZGfCyTftPH5EoQ8oTRnHQ" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=nkN_do3fJ9xekchVC-v68A"><img src="http://static.px.yelp.com/photo/cdGz9MHwd-04vSZ98KX9ZA/ss" style="height:40px;width:40px;" alt="Photo of Jeremy S." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						<a rel="nofollow" href="/elite" title="User is Elite">Elite &#39;09</a>
				</p>
			<p class="miniOrange friend_count ieSucks">2126</p>
			<p class="miniOrange review_count ieSucks">811</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=nkN_do3fJ9xekchVC-v68A" class="reviewer_name">Jeremy S.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_3" width="83" height="325" title="3 star rating" alt="3 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">8/22/2008</em>
	
							<span class="photoCount"><a href="/biz_photos/OpBTLNaGnGcn8DRsLcEfQQ?userid=nkN_do3fJ9xekchVC-v68A">2 photos</a></span>

				</div>
	
					<p class="review_comment ieSucks">The restaurant is attractive (better than I expected from the photos), though they aren&#39;t trying to create more ambiance than your basic white table cloth dining room. We brought a fairly large party (8 or so) and they managed it well, so I&#39;d recommend this place for medium sized groups provided you call ahead. <br /><br />Food was ok, I had the chelo-kebab koobideh for an entree. It was fine, but both the meat and rice were too buttery. We also shared a range of appetizers and I enjoyed their fresh hummus.<br /><br />Their valet parking was helpful given the difficulty of finding a spot in this area.<br /><br />Bottom line: decent spot, but I won&#39;t be rushing back.<br /><br />Disclaimer: Maykadeh is a sponsor and I work for Yelp</p> 						<div class="rateReview external" id="ufc_kZGfCyTftPH5EoQ8oTRnHQ">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (15)
							</li>
							<li class="smaller">
								Funny (8)
							</li>
							<li class="smaller">
								Cool (12)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FnkN_do3fJ9xekchVC-v68A%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="kZGfCyTftPH5EoQ8oTRnHQ" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=kZGfCyTftPH5EoQ8oTRnHQ&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'kZGfCyTftPH5EoQ8oTRnHQ', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:kZGfCyTftPH5EoQ8oTRnHQ" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'kZGfCyTftPH5EoQ8oTRnHQ')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_BO1fT1BvRW_4ScYZhOaG2A" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=4FcfCT4WFGdNI_E09htphQ"><img src="http://static.px.yelp.com/photo/56bdzEp3qGpgiAOG-moPAA/ss" style="height:40px;width:40px;" alt="Photo of Diana B." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						<a rel="nofollow" href="/elite" title="User is Elite">Elite &#39;09</a>
				</p>
			<p class="miniOrange friend_count ieSucks">37</p>
			<p class="miniOrange review_count ieSucks">188</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=4FcfCT4WFGdNI_E09htphQ" class="reviewer_name">Diana B.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_3" width="83" height="325" title="3 star rating" alt="3 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">10/16/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">Overall 3.5 stars. Maykadeh is nice and clean. I liked the Joojeh Kabob, which was the boneless chicken thighs with Basmati rice, and we got to add the beef kabob for a few dollars more. I was also excited about trying the Khoresht Fesenjoon, which is the pomegranate chicken, but the waitress thought that we ordered the Khoresht Bademjan, which is the lamb shank with eggplant and tomato. The sauce was tasty except I don&#39;t like the gamey taste of lamb; luckily the waitress was nice enough to change our order. However, the thick pomegranate sauce for the chicken ended up tasting like sweet jam which was a bit overpoweringly sweet but palatable with complimentary basil, feta and pita bread.</p> 						<div class="rateReview external" id="ufc_BO1fT1BvRW_4ScYZhOaG2A">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (1)
							</li>
							<li class="smaller">
								Cool (1)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2F4FcfCT4WFGdNI_E09htphQ%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="BO1fT1BvRW_4ScYZhOaG2A" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=BO1fT1BvRW_4ScYZhOaG2A&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'BO1fT1BvRW_4ScYZhOaG2A', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:BO1fT1BvRW_4ScYZhOaG2A" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'BO1fT1BvRW_4ScYZhOaG2A')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_ny3br1lQD0IODDbvNX0UCQ" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=ey4hEFEHP8PRihWIGMBgoQ"><img src="http://static.px.yelp.com/static/20090507a/i/new/gfx/blank_user_small.gif" style="height:40px;width:40px;" alt="Photo of Daria H." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">0</p>
			<p class="miniOrange review_count ieSucks">9</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=ey4hEFEHP8PRihWIGMBgoQ" class="reviewer_name">Daria H.</a></p>
					<p class="reviewer_info">Tiburon, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">2/2/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">If you have to choose any Middle Eastern or &quot;Mediterranean&quot; food, this would be the best one to choose. Best Persian food you can get in the bay area. I recommend the Tongue and the Barg kabob. You can take a date here to get exotic food while maintaining the ambiance of a nice restaurant and polite waiters. <br /><br />If you&#39;re sick of Italian restaurants in North Beach, try this out.</p> 						<div class="rateReview external" id="ufc_ny3br1lQD0IODDbvNX0UCQ">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (1)
							</li>
							<li class="smaller">
								Cool (1)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2Fey4hEFEHP8PRihWIGMBgoQ%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="ny3br1lQD0IODDbvNX0UCQ" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=ny3br1lQD0IODDbvNX0UCQ&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'ny3br1lQD0IODDbvNX0UCQ', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:ny3br1lQD0IODDbvNX0UCQ" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'ny3br1lQD0IODDbvNX0UCQ')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_PBBEVVjEzeSORUyNSBcAFQ" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=yW5ajGtDmMAujfld63J-eQ"><img src="http://static.px.yelp.com/photo/Q7U0kERx7rHHBBG8Q1qTkA/ss" style="height:40px;width:40px;" alt="Photo of Tiffany L." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						<a rel="nofollow" href="/elite" title="User is Elite">Elite &#39;09</a>
				</p>
			<p class="miniOrange friend_count ieSucks">104</p>
			<p class="miniOrange review_count ieSucks">231</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=yW5ajGtDmMAujfld63J-eQ" class="reviewer_name">Tiffany L.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">10/2/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">Ive never seen a middle eastern restaraunt that had valet parking. &nbsp;It was very convenient as you all know the hells of parking in north beach. &nbsp;However, it was quite awkward as the valet guy kept moving the car around - I think to put the nicer ones up front. &nbsp;But it was still awkward. &nbsp;As for the food - this was a more expensive middle eastern restaurant, something you dont see too often. &nbsp;The food I thought was very good and the place was nice and crowded. &nbsp; I still fancy the koobideh which is always my favorite. &nbsp; &nbsp;Tip: Get a side of the cucumber yogurt sauce and put it on top of EVERYTHING.</p> 						<div class="rateReview external" id="ufc_PBBEVVjEzeSORUyNSBcAFQ">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (1)
							</li>
							<li class="smaller">
								Cool (1)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FyW5ajGtDmMAujfld63J-eQ%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="PBBEVVjEzeSORUyNSBcAFQ" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=PBBEVVjEzeSORUyNSBcAFQ&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'PBBEVVjEzeSORUyNSBcAFQ', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:PBBEVVjEzeSORUyNSBcAFQ" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'PBBEVVjEzeSORUyNSBcAFQ')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_oHrg8Z7zpm7FEMTlpNZmnA" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=p8RS_rLHaNwA5vF6C98nBw"><img src="http://static.px.yelp.com/photo/dyVCfiKzFp6hdDopKzzr5A/ss" style="height:40px;width:40px;" alt="Photo of Virginia Y." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						<a rel="nofollow" href="/elite" title="User is Elite">Elite &#39;09</a>
				</p>
			<p class="miniOrange friend_count ieSucks">164</p>
			<p class="miniOrange review_count ieSucks">142</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=p8RS_rLHaNwA5vF6C98nBw" class="reviewer_name">Virginia Y.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">7/29/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">My love affair with Persian food started when I lived in Long Beach many years ago. There&#39;s quite a Persian population down south, so finding a Persian restaurant wasn&#39;t too hard. So my experience with the cuisine encompasses a number of establishments. <br /><br />I&#39;ve dined at Maykadeh quite a few times over the years, and it&#39;s on par with what I like in Persian cuisine. My mom&#39;s not Persian (surprise!) &nbsp;so I have no idea what is truly authentic. But my Persian friends say this place is one of best...I have to say, I like it better than Alborz (on Van Ness) and Darya (Costa Mesa), both of which have a loyal following. <br /><br />Most notable differences between this place and others is that their meats are tender, flavorful and moist. Many places tend to overcook the chicken and the ground meats are a bit on the dry side. The koobideh (ground meat) is excellent whether you choose lamb or beef. The lamb dishes are definitely recommended and are not gamey. Filet Mignon proved tasty and tender. And the rice had the right texture, flavored with the usual saffron. One of my favorites is their little baby chicken...I don&#39;t know if it&#39;s really a baby chicken, but that&#39;s what I call it. It&#39;s served whole and is definitely worth having.<br /><br />I did have dessert tonight, which I usually skip, because I&#39;m usually stuffed from the sizeable dishes offered here. Both the flan and rosewater poached pears and ice cream proved themselves worth the calories. <br /><br />Maykadeh&#39;s atmosphere invites a bit of lingering after dinner. Modern Persian music plays in the background, and as the sun goes down, the lights strewn around the trees outside cast a nice ambiant light into the comfortable dining area....nice place for our girls night out, the birthday party next to us, and the kissy kissy couple in the corner.</p> 						<div class="rateReview external" id="ufc_oHrg8Z7zpm7FEMTlpNZmnA">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (5)
							</li>
							<li class="smaller">
								Funny (2)
							</li>
							<li class="smaller">
								Cool (6)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2Fp8RS_rLHaNwA5vF6C98nBw%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="oHrg8Z7zpm7FEMTlpNZmnA" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=oHrg8Z7zpm7FEMTlpNZmnA&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'oHrg8Z7zpm7FEMTlpNZmnA', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:oHrg8Z7zpm7FEMTlpNZmnA" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'oHrg8Z7zpm7FEMTlpNZmnA')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_zlSK8v474ZhsUSsqSuGuFw" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=vW9kDUZbsSONrajEc2UQXQ"><img src="http://static.px.yelp.com/photo/Fo3nNhOR6NTFeF72n7xL6w/ss" style="height:40px;width:40px;" alt="Photo of Elena G." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						<a rel="nofollow" href="/elite" title="User is Elite">Elite &#39;09</a>
				</p>
			<p class="miniOrange friend_count ieSucks">166</p>
			<p class="miniOrange review_count ieSucks">147</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=vW9kDUZbsSONrajEc2UQXQ" class="reviewer_name">Elena G.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">8/9/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">If I had to pick a word to describe Maykadeh, it&#39;d pick &quot;reliable.&quot; &nbsp;I&#39;ve been several times and everytime it&#39;s right on. &nbsp;There&#39;s nothing outstandingly special about it, it&#39;s just a very good Persian restaurant. &nbsp;Anyone who enjoys Mediterreanean cuise will enjoy Persian food as well. &nbsp;I had the shish kabob, which was juicy and tender. &nbsp;The rice was good too (even I ate it and I view rice as a waste of space usually). &nbsp;I especially appreciate the herbs, pita, and feta they serve at the beginning, much more interesting than bread and butter. &nbsp;I promise to take a bite of the onion next time too! :)<br /><br />The decor is simple and conservative enough to bring the fam, but no one who will be disappointed. &nbsp;<br /><br />Also, don&#39;t even bother looking for parking in NB, the valet is very worth it in this neighborhood.</p> 						<div class="rateReview external" id="ufc_zlSK8v474ZhsUSsqSuGuFw">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (2)
							</li>
							<li class="smaller">
								Funny (1)
							</li>
							<li class="smaller">
								Cool (1)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FvW9kDUZbsSONrajEc2UQXQ%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="zlSK8v474ZhsUSsqSuGuFw" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=zlSK8v474ZhsUSsqSuGuFw&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'zlSK8v474ZhsUSsqSuGuFw', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:zlSK8v474ZhsUSsqSuGuFw" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'zlSK8v474ZhsUSsqSuGuFw')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_eleeTcX-qnRl5FkKNVF9nQ" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=vlELEyIv1faCIaGmXPvTCw"><img src="http://static.px.yelp.com/photo/KeZsEQr8_FKHDA7rGStVKQ/ss" style="height:40px;width:40px;" alt="Photo of Ian M." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">12</p>
			<p class="miniOrange review_count ieSucks">16</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=vlELEyIv1faCIaGmXPvTCw" class="reviewer_name">Ian M.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_5" width="83" height="325" title="5 star rating" alt="5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">2/15/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">GO HERE &nbsp;BITCHES!!!! I kid, I kid. &nbsp;But seriously, do yourself a favor and go here, bitch.</p> 				
			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FvlELEyIv1faCIaGmXPvTCw%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="eleeTcX-qnRl5FkKNVF9nQ" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=eleeTcX-qnRl5FkKNVF9nQ&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'eleeTcX-qnRl5FkKNVF9nQ', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:eleeTcX-qnRl5FkKNVF9nQ" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'eleeTcX-qnRl5FkKNVF9nQ')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_PEOZ1Bdphi27ouM2Os9oAw" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=XpsSVV1ZG1x7JVnC2mDc5Q"><img src="http://static.px.yelp.com/photo/9jxA-7k8fHD819vDnblu5g/ss" style="height:40px;width:40px;" alt="Photo of Sheila Y." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						<a rel="nofollow" href="/elite" title="User is Elite">Elite &#39;09</a>
				</p>
			<p class="miniOrange friend_count ieSucks">89</p>
			<p class="miniOrange review_count ieSucks">433</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=XpsSVV1ZG1x7JVnC2mDc5Q" class="reviewer_name">Sheila Y.</a></p>
					<p class="reviewer_info">Inner Richmond, San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">8/11/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">K...another Persian throwing their two cents in.<br />I brought a group of post law-school friends here and my significant other (Irish and Italian) so I was the virtual &quot;tour guide.&quot; <br />The Persian Martini was very un-Persian (yes except I suppose for the Pomegranate juice), but it was very tasty!<br />The Kashk-e-Bademjan was nice and smoky and the Salad Shirazi was decent. &nbsp;<br />We mostly all ordered the Sultani except for a splattering of Chicken Kabob and a Vegetarian Khoresht. &nbsp;It all looked great, but I can only speak for the Barg and Koobideh. &nbsp;Barg was juicy and tender and the Koobideh was decent, but a leeetle overdone. &nbsp;Otherwise good. &nbsp;<br />I still can&#39;t give it a five star given the LA and Vancouver Persian bar has been set much higher. &nbsp;But great given the &quot;Persian&quot; food I have eaten at other establishments in the Bay Area.</p> 						<div class="rateReview external" id="ufc_PEOZ1Bdphi27ouM2Os9oAw">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (1)
							</li>
							<li class="smaller">
								Cool (1)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FXpsSVV1ZG1x7JVnC2mDc5Q%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="PEOZ1Bdphi27ouM2Os9oAw" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=PEOZ1Bdphi27ouM2Os9oAw&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'PEOZ1Bdphi27ouM2Os9oAw', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:PEOZ1Bdphi27ouM2Os9oAw" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'PEOZ1Bdphi27ouM2Os9oAw')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_7kxYeJyQsVu6xDfKGLkqZw" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=lbey-9-Hyf-ZWZhlweV75g"><img src="http://static.px.yelp.com/photo/HhRuEz-OjGREdaVB_sfFsg/ss" style="height:40px;width:40px;" alt="Photo of Me Y." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">7</p>
			<p class="miniOrange review_count ieSucks">117</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=lbey-9-Hyf-ZWZhlweV75g" class="reviewer_name">Me Y.</a></p>
					<p class="reviewer_info">Oakland, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_5" width="83" height="325" title="5 star rating" alt="5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">6/26/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">Yes, yes, yes...this is THE place to go.<br /><br />I have nothing bad to say about the +5 times that I&#39;ve come here for great food. EVERY time has been great.</p> 						<div class="rateReview external" id="ufc_7kxYeJyQsVu6xDfKGLkqZw">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (2)
							</li>
							<li class="smaller">
								Cool (2)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2Flbey-9-Hyf-ZWZhlweV75g%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="7kxYeJyQsVu6xDfKGLkqZw" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=7kxYeJyQsVu6xDfKGLkqZw&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', '7kxYeJyQsVu6xDfKGLkqZw', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:7kxYeJyQsVu6xDfKGLkqZw" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', '7kxYeJyQsVu6xDfKGLkqZw')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_BmFuDETZQdim33i0h1_5DA" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=ePMvJQEwkSxov7TJ6GMG1w"><img src="http://static.px.yelp.com/photo/wdXzUUZef9p8gNM9kPCuhQ/ss" style="height:40px;width:40px;" alt="Photo of Anita T." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">1</p>
			<p class="miniOrange review_count ieSucks">9</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=ePMvJQEwkSxov7TJ6GMG1w" class="reviewer_name">Anita T.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_5" width="83" height="325" title="5 star rating" alt="5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">1/2/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">Our favorite Persian cuisine in the city!</p> 						<div class="rateReview external" id="ufc_BmFuDETZQdim33i0h1_5DA">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (1)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FePMvJQEwkSxov7TJ6GMG1w%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="BmFuDETZQdim33i0h1_5DA" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=BmFuDETZQdim33i0h1_5DA&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'BmFuDETZQdim33i0h1_5DA', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:BmFuDETZQdim33i0h1_5DA" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'BmFuDETZQdim33i0h1_5DA')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_edrItstw5j5Jby5e1tVNyA" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=l-zgWG-brcQ4iRev-pfrsg"><img src="http://static.px.yelp.com/photo/gblk3juDBapzD4pvmM1qvQ/ss" style="height:40px;width:40px;" alt="Photo of Peg S." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						<a rel="nofollow" href="/elite" title="User is Elite">Elite &#39;09</a>
				</p>
			<p class="miniOrange friend_count ieSucks">189</p>
			<p class="miniOrange review_count ieSucks">295</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=l-zgWG-brcQ4iRev-pfrsg" class="reviewer_name">Peg S.</a></p>
					<p class="reviewer_info">Fremont, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">5/28/2008</em>
	
							<span class="photoCount"><a href="/biz_photos/OpBTLNaGnGcn8DRsLcEfQQ?userid=l-zgWG-brcQ4iRev-pfrsg">2 photos</a></span>

				</div>
	
					<p class="review_comment ieSucks">Fine Persian dining in North Beach. &nbsp;Was surprised by the the upscaleness of the place upon walking in. &nbsp;Surprised again by the apps of basil, feta, onion, radish (Were these garnish or should I eat this? &nbsp;Being that I have food babies all the time, the answer is always a resounding EAT it!) served up with pita bread - simple, but the flavors of each item jumps out at you and is enhanced by the others. For the main course, we ordered the shish kebab and the chicken breast kebab (see pic). &nbsp;Loved all the flavors together. &nbsp;Wonderful basmati rice, grilled veggies - tomatoes, onions, etc. Chicken was lightly flavorful. &nbsp;Lamb more gamey. &nbsp;Delightful meal.</p> 						<div class="rateReview external" id="ufc_edrItstw5j5Jby5e1tVNyA">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (5)
							</li>
							<li class="smaller">
								Funny (3)
							</li>
							<li class="smaller">
								Cool (6)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2Fl-zgWG-brcQ4iRev-pfrsg%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="edrItstw5j5Jby5e1tVNyA" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=edrItstw5j5Jby5e1tVNyA&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'edrItstw5j5Jby5e1tVNyA', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:edrItstw5j5Jby5e1tVNyA" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'edrItstw5j5Jby5e1tVNyA')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_zS-pZJ5EOU4ZNdJjLskxaQ" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=afWyhHkJUuDbhmBwDbwucw"><img src="http://static.px.yelp.com/photo/tAraBST6r1u_4kCVXQDsWA/ss" style="height:40px;width:40px;" alt="Photo of Marco P." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">0</p>
			<p class="miniOrange review_count ieSucks">7</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=afWyhHkJUuDbhmBwDbwucw" class="reviewer_name">Marco P.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">11/10/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">Been here five times and never been disapointed. The appetizer itself - fresh pita, mint, leaves, onion - is filling and tasty. &nbsp; Ambience is excellent. Service is generally good. &nbsp;The safron flavored koobideh kabob is great. &nbsp;Prices are quite reasonable. &nbsp;great formula for success.</p> 				
			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FafWyhHkJUuDbhmBwDbwucw%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="zS-pZJ5EOU4ZNdJjLskxaQ" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=zS-pZJ5EOU4ZNdJjLskxaQ&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'zS-pZJ5EOU4ZNdJjLskxaQ', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:zS-pZJ5EOU4ZNdJjLskxaQ" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'zS-pZJ5EOU4ZNdJjLskxaQ')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_3vjbixKZPRPT5k63YKiRhA" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=OavTJ3NsyrTSBRDINjNLow"><img src="http://static.px.yelp.com/static/20090507a/i/new/gfx/blank_user_small.gif" style="height:40px;width:40px;" alt="Photo of simone s." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">0</p>
			<p class="miniOrange review_count ieSucks">6</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=OavTJ3NsyrTSBRDINjNLow" class="reviewer_name">simone s.</a></p>
					<p class="reviewer_info">Beverly Hills, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_3" width="83" height="325" title="3 star rating" alt="3 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">12/28/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">A bit pricey for the small portions they serve. I guess we are used to our Los Angeles Persian Restaurants with the big plates and reasonable prices. &nbsp;We definitely have had better and tastier Persian kabob&#39;s before. And the Shish kabob is usually not 3 pieces on a skewer but rather 8-10. Nice decide and flowers and very clean and friendly staff.</p> 						<div class="rateReview external" id="ufc_3vjbixKZPRPT5k63YKiRhA">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (1)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FOavTJ3NsyrTSBRDINjNLow%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="3vjbixKZPRPT5k63YKiRhA" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=3vjbixKZPRPT5k63YKiRhA&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', '3vjbixKZPRPT5k63YKiRhA', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:3vjbixKZPRPT5k63YKiRhA" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', '3vjbixKZPRPT5k63YKiRhA')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_Tzb92khZBS7N-0ZgnARVPQ" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=ScI9v5lHoWkOc9nkbe2ICg"><img src="http://static.px.yelp.com/photo/RpNsWoXt0jKZV0O7Y5M06A/ss" style="height:40px;width:40px;" alt="Photo of Annie Y." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						<a rel="nofollow" href="/elite" title="User is Elite">Elite &#39;09</a>
				</p>
			<p class="miniOrange friend_count ieSucks">0</p>
			<p class="miniOrange review_count ieSucks">59</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=ScI9v5lHoWkOc9nkbe2ICg" class="reviewer_name">Annie Y.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">12/26/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">I have eaten here twice with different friends this month, and each time the experience has been good. Both times we ordered the Kashke Bademjan appetizer (eggplant and mint garlic sauce) - yum! Spread it on the warm flat bread they provide with a little bit of the basil that they also provide- it is to die for! &nbsp;The first time I ordered the Ghorme Sabzee (Lamb shank cooked in finely chopped onion,leek, scallions, chives &amp; herbs, dried lime, Basmati rice) - and the lamb was nice, tender, and did not at all land in your stomach like a rock. And we all know that lamb can be a hit or miss meat. The second time I ordered the Poussin <br />(Baby chicken with all the bones marinated in onion, saffron,<br />lime juice, vegetables and Basmati rice). The lime juice helps keep the chicken moist and tender - so you are not chewing on tough meat. I topped it off with a nice cup of hot Persian tea. The food here is excellent, and I will be a repeat customer when I am in the mood for good Persian food.</p> 				
			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FScI9v5lHoWkOc9nkbe2ICg%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="Tzb92khZBS7N-0ZgnARVPQ" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=Tzb92khZBS7N-0ZgnARVPQ&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'Tzb92khZBS7N-0ZgnARVPQ', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:Tzb92khZBS7N-0ZgnARVPQ" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'Tzb92khZBS7N-0ZgnARVPQ')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_qR2QUZN4ids7Z70W7vKQDg" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=drCX4t3SAp52J-mNzzzFWQ"><img src="http://static.px.yelp.com/photo/LoSsg8mX3YJYpGwmMDah5w/ss" style="height:40px;width:40px;" alt="Photo of Samantha S." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">3</p>
			<p class="miniOrange review_count ieSucks">14</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=drCX4t3SAp52J-mNzzzFWQ" class="reviewer_name">Samantha S.</a></p>
					<p class="reviewer_info">Hempstead, NY</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">1/15/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">coming from a persian, this persian food is pretty delicious. the kashk is one of the best i&#39;ve ever had. <br />pretty pricey though!!</p> 				
			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FdrCX4t3SAp52J-mNzzzFWQ%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="qR2QUZN4ids7Z70W7vKQDg" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=qR2QUZN4ids7Z70W7vKQDg&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'qR2QUZN4ids7Z70W7vKQDg', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:qR2QUZN4ids7Z70W7vKQDg" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'qR2QUZN4ids7Z70W7vKQDg')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_c8Sy1np--kmLOS4o7Uea6Q" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=4EvLI91dILOymB7XO_v24Q"><img src="http://static.px.yelp.com/photo/KhsCSUxxzgxg1Kk9nBaItQ/ss" style="height:40px;width:40px;" alt="Photo of Adam G." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">27</p>
			<p class="miniOrange review_count ieSucks">149</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=4EvLI91dILOymB7XO_v24Q" class="reviewer_name">Adam G.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_5" width="83" height="325" title="5 star rating" alt="5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">4/23/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">I&#39;ve been here only once, on a cold rainy night in December with Wifey (then Fiance-y). It was worth the hike across town. The fesenjoon --- chicken in a sauce of pomegranate juice and walnuts over rice --- was to die for. The only better fesenjoon I had was at our wedding. We&#39;re going to stop by tonight for some takeout - more fesenjoon. It&#39;s just that good. <br /><br />I&#39;m sure they have other great dishes too. If you&#39;re not familiar with Persian cuisine, you should also try the Ghorme Sabzee (lamb and greens and kidney beans over rice), Polo Zereshk (chicken over rice made with barberry and saffron), and Joojeh Kebab (kebab marinated in saffron). It&#39;s all amazing - these guys know what they&#39;re doing.</p> 						<div class="rateReview external" id="ufc_c8Sy1np--kmLOS4o7Uea6Q">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (3)
							</li>
							<li class="smaller">
								Cool (3)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2F4EvLI91dILOymB7XO_v24Q%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="c8Sy1np--kmLOS4o7Uea6Q" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=c8Sy1np--kmLOS4o7Uea6Q&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'c8Sy1np--kmLOS4o7Uea6Q', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:c8Sy1np--kmLOS4o7Uea6Q" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'c8Sy1np--kmLOS4o7Uea6Q')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_3EO8gp1VUt6vnUWiLMfhmg" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=4IjzfbO7XKFNWWVufHNhww"><img src="http://static.px.yelp.com/photo/5TrjFskT3zSrDgNXPn8yXg/ss" style="height:40px;width:40px;" alt="Photo of Natalie G." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						<a rel="nofollow" href="/elite" title="User is Elite">Elite &#39;09</a>
				</p>
			<p class="miniOrange friend_count ieSucks">95</p>
			<p class="miniOrange review_count ieSucks">264</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=4IjzfbO7XKFNWWVufHNhww" class="reviewer_name">Natalie G.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_2" width="83" height="325" title="2 star rating" alt="2 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">4/14/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">I thought mixing it up and trying a new restaurant and food would be a really good idea. I was wrong, with a capital W. Maykadeh was pretty busy when I arrived and usually this is a good sign. Since my friend and I were new to Persian food we wanted to try a lot of different plates.<br /><br />All the dishes we tried were vegetarian (maybe that is where we went wrong). &nbsp;The waiter also seemed to rush us out of there. Instead of helping us with the menu or suggesting anything, he just rushed around and quickly took our order. I didn&#39;t think the food was very fresh. The prices were very cheap however.</p> 						<div class="rateReview external" id="ufc_3EO8gp1VUt6vnUWiLMfhmg">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (3)
							</li>
							<li class="smaller">
								Funny (1)
							</li>
							<li class="smaller">
								Cool (2)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2F4IjzfbO7XKFNWWVufHNhww%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="3EO8gp1VUt6vnUWiLMfhmg" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=3EO8gp1VUt6vnUWiLMfhmg&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', '3EO8gp1VUt6vnUWiLMfhmg', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:3EO8gp1VUt6vnUWiLMfhmg" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', '3EO8gp1VUt6vnUWiLMfhmg')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_5dSXyQ2k33yvqJwnXdTvkQ" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=RGjLWrj_M-E3d5N9y8QA2A"><img src="http://static.px.yelp.com/static/20090507a/i/new/gfx/blank_user_small.gif" style="height:40px;width:40px;" alt="Photo of isis n." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">0</p>
			<p class="miniOrange review_count ieSucks">7</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=RGjLWrj_M-E3d5N9y8QA2A" class="reviewer_name">isis n.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_2" width="83" height="325" title="2 star rating" alt="2 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">1/18/2009</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">Sorry to buck the trend, but we came here recently and found the experience a little less than ordinary. While we waited for our friends to arrive they seated us at bar - I ordered pomegranate martini and hubby ordered a regular martini. Both were very dissapointing - weak. <br /><br />When we found out when our friends were arriving, we wanted to be moved to our table. It took me asking the main guy number of times before this happened. Infact I had to get the attention of someone in the kitchen to help us. <br /><br />The appetisers were good. The main food was O-k, I had lamb cutlets, it was a bit dry and the rice was fairly oily. My hubby had lamb fillets and he said he enjoyed that. <br /><br />The service at the table was generally good, they came around and topped up our water etc. <br /><br />I would probably not bother with the dessert, baklava was sickly sweeter than any baklava I&#39;ve had and this is coming from having eaten it in many countries including Australia and countries in the middle eat itself. The persian icecream was quite interesting, I personally liked it. <br /><br />Overall, I&#39;ll try the many other restaurants in the neighbourhood before going back to this one.</p> 				
			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FRGjLWrj_M-E3d5N9y8QA2A%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="5dSXyQ2k33yvqJwnXdTvkQ" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=5dSXyQ2k33yvqJwnXdTvkQ&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', '5dSXyQ2k33yvqJwnXdTvkQ', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:5dSXyQ2k33yvqJwnXdTvkQ" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', '5dSXyQ2k33yvqJwnXdTvkQ')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_Cq8VkM0dzGyNZ_rxtvJUVg" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=GX6YV2sORHR7tOma3mcYfw"><img src="http://static.px.yelp.com/photo/53ldUn2n04-2-34sol76EA/ss" style="height:40px;width:40px;" alt="Photo of Marina N." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">29</p>
			<p class="miniOrange review_count ieSucks">373</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=GX6YV2sORHR7tOma3mcYfw" class="reviewer_name">Marina N.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">6/2/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">Outstanding meat. Had delicious lamb tongue, koobideh, and filet mignon. Sabzi served complimentary. Cucum/Tomato salad was great.<br /><br />I like the sabzi at Shalizaar better but the Filet Mignon is better at Maykadeh. Koobideh are comparable at the two; they use different spices but I think Shalizaar&#39;s flavor is a little better. My favorite at Shalizaar is the lamb so I will try that next time at Maykadeh. The pita was better at Maykadeh.<br /><br />Valet parking available for $10, which is awesome because it&#39;s impossible to park there. Service was very friendly.<br /><br />Update: Went again and again, the waiter was very nice. The lamb was very good but I think it&#39;s better at Shalizaar. I will definitely return here whenever I&#39;m in the mood for meat!! (Drooling already...)</p> 						<div class="rateReview external" id="ufc_Cq8VkM0dzGyNZ_rxtvJUVg">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (1)
							</li>
							<li class="smaller">
								Cool (1)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FGX6YV2sORHR7tOma3mcYfw%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="Cq8VkM0dzGyNZ_rxtvJUVg" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=Cq8VkM0dzGyNZ_rxtvJUVg&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'Cq8VkM0dzGyNZ_rxtvJUVg', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:Cq8VkM0dzGyNZ_rxtvJUVg" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'Cq8VkM0dzGyNZ_rxtvJUVg')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_jvA2vFVrrGmNGQ8LcQPnwg" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=31Tyd_67KWGSk0cZz9-HoA"><img src="http://static.px.yelp.com/photo/aOhjNBubdG4fgin1myiJOg/ss" style="height:40px;width:40px;" alt="Photo of A B." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						&nbsp;
				</p>
			<p class="miniOrange friend_count ieSucks">42</p>
			<p class="miniOrange review_count ieSucks">40</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=31Tyd_67KWGSk0cZz9-HoA" class="reviewer_name">A B.</a></p>
					<p class="reviewer_info">Dublin, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">3/31/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">Succulent is the best way for me to describe this place. The ground lamb/beef kabob cannot be missed and if you&#39;re into lamb the lamb shank dish was tender and flavorful. <br /><br />Maykadeh looks like a nice date place, but when we walked in, we were pleasantly surprised how many middle eastern families were eating there - a good sign that the food is top notch.</p> 						<div class="rateReview external" id="ufc_jvA2vFVrrGmNGQ8LcQPnwg">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (2)
							</li>
							<li class="smaller">
								Cool (3)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2F31Tyd_67KWGSk0cZz9-HoA%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="jvA2vFVrrGmNGQ8LcQPnwg" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=jvA2vFVrrGmNGQ8LcQPnwg&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'jvA2vFVrrGmNGQ8LcQPnwg', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:jvA2vFVrrGmNGQ8LcQPnwg" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'jvA2vFVrrGmNGQ8LcQPnwg')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_zxCW8BIuMTa8zxHm2RLVPg" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=d-5gWThyELEJZdFKUx5Pzg"><img src="http://static.px.yelp.com/photo/JgXuoMXVrZoXFgyZiqyAtg/ss" style="height:40px;width:40px;" alt="Photo of Adolfo L." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						<a rel="nofollow" href="/elite" title="User is Elite">Elite &#39;09</a>
				</p>
			<p class="miniOrange friend_count ieSucks">172</p>
			<p class="miniOrange review_count ieSucks">154</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=d-5gWThyELEJZdFKUx5Pzg" class="reviewer_name">Adolfo L.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">2/28/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">I love it, it&#39;s so fun to stuff my face with Persian food. The lamb is always delicious, and the Basmati rice is addicting. I&#39;m not usually big on rice, but when it comes to Basmati rice prepared Persian style all fluffy and buttery, I wolf it all down. Send me some insulin, I feel my blood glucose spiking. <br /><br />Maykadeh defeinitely does it all the way I like it. I had the lamb chop with Basmati rice. My friend had the Koobideh with Basmati rice. Both dishes were great, but my chops were slightly overcooked. <br /><br />I think the food is great, but what does a Chinese guy know about Persian food. So I looked around and saw that half the patrons there were Persian. Very good sign. I&#39;ll be back for more!</p> 						<div class="rateReview external" id="ufc_zxCW8BIuMTa8zxHm2RLVPg">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (3)
							</li>
							<li class="smaller">
								Funny (2)
							</li>
							<li class="smaller">
								Cool (2)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2Fd-5gWThyELEJZdFKUx5Pzg%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="zxCW8BIuMTa8zxHm2RLVPg" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=zxCW8BIuMTa8zxHm2RLVPg&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'zxCW8BIuMTa8zxHm2RLVPg', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:zxCW8BIuMTa8zxHm2RLVPg" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'zxCW8BIuMTa8zxHm2RLVPg')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 									<div id="review_NYlQwz8x2NHXguhzp337bA" class="review externalReview clearfix nonfollowingReview ">
			<div class="wrap">
				<div class="reviewer">
						<div class="mini">	
		<div class="photoBoxSm">
					<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=woW3EEoyj5M42Z7yXLhNLg"><img src="http://static.px.yelp.com/photo/iP05d6DwkxEKFdK8kr4_4Q/ss" style="height:40px;width:40px;" alt="Photo of Anna K." /></a>
	</div>

				<p class="miniOrange is_elite ieSucks">
						<a rel="nofollow" href="/elite" title="User is Elite">Elite &#39;09</a>
				</p>
			<p class="miniOrange friend_count ieSucks">255</p>
			<p class="miniOrange review_count ieSucks">116</p>
		</div>
	</div>

					<p class="reviewer_info"><a href="/user_details?userid=woW3EEoyj5M42Z7yXLhNLg" class="reviewer_name">Anna K.</a></p>
					<p class="reviewer_info">San Francisco, CA</p>
				</div>
				<div class="ext_rating">
					<div class="rating"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
					<em class="smaller">2/12/2008</em>
	
					
				</div>
	
					<p class="review_comment ieSucks">A good friend of mine, we&#39;ll call her &quot;Lauren Breuning&quot; works for the Ritz Carlton and gets these insane hook-ups within the service industry. It&#39;s pretty bitchin&#39;. So, when LaurBreu posits the question, &quot;Wanna get free Persian food?&quot; I&#39;m like, &quot;Did the Iranian Shah get ousted by a military coup in the 1950&#39;s? Tchya!&quot; And off to Maykadeh we go.<br />So, as part of our VIP &quot;This-Broad-Works-at-the-freakin&#39;-Ritz&quot; treatment, we had a prearranged menu that featured, oh, everything. If it baahed, mooed, clucked, or just um, hummused, we ate it. <br />Basically, my only critique was that the &quot;rosewater sherbet&quot; meant to cleanse the palate did an all-too-thorough job, cause it tasted exactly like, well, bath.</p> 						<div class="rateReview external" id="ufc_NYlQwz8x2NHXguhzp337bA">
			<p class="rateReviewIntro">
					People thought this was:
			</p>
			<ul class="stripped">
							<li class="smaller">
								Useful (2)
							</li>
							<li class="smaller">
								Funny (7)
							</li>
							<li class="smaller">
								Cool (3)
							</li>
			</ul>
		</div>

			
			
				<ul class="externalReviewActions">
					<li class="add-review-comment">			<a rel="nofollow" class="add-owner-comment" href="https://biz.yelp.com/login/add_owner_comment?return_url=%2Fr2r%2FOpBTLNaGnGcn8DRsLcEfQQ%2Fcomment%2FwoW3EEoyj5M42Z7yXLhNLg%2Fcompose&biz_id=OpBTLNaGnGcn8DRsLcEfQQ">
				Add owner comment
			</a>
			&nbsp;&nbsp;&nbsp;
</li>
					<li><a rel="nofollow" href="/signup" class="bookmark" rel="NYlQwz8x2NHXguhzp337bA" title="Something catch your eye?<br/>Bookmark this business to build your own list of fun ideas to check out later!" onclick="initBookSignUp(this,'OpBTLNaGnGcn8DRsLcEfQQ','Maykadeh Persian Cuisine');return false">Bookmark</a></li>
					<li><a rel="nofollow" href="/biz_share?bizid=OpBTLNaGnGcn8DRsLcEfQQ&amp;reviewid=NYlQwz8x2NHXguhzp337bA&amp;return_url=/biz/maykadeh-persian-cuisine-san-francisco" class="sendToFriend" onclick="Yelp.send2Friends.open(this, 'OpBTLNaGnGcn8DRsLcEfQQ', 'NYlQwz8x2NHXguhzp337bA', null);return false">Send to a Friend</a></li>
					<li><a rel="nofollow" class="linkToThis" href="/biz/maykadeh-persian-cuisine-san-francisco#hrid:NYlQwz8x2NHXguhzp337bA" onclick="review_fetcher.fetchReviews('OpBTLNaGnGcn8DRsLcEfQQ', 'MSSTKb_mGZtTPbRm_c7_dQ', 'NYlQwz8x2NHXguhzp337bA')">Link to This Review</a></li>
				</ul>
				
			</div>
	
	</div>
 
			</div>
		</div>

			<div id="paginationControls" class="pagination_controls">
				<div id="rpp_count">1 to 40 of 118 |&nbsp;&nbsp;</div>
					<table cellpadding="0" cellspacing="0" border="0" width="380">
	<tr>
		<td>Page: 

 <span class="highlight2">1</span>
<a href="/biz/maykadeh-persian-cuisine-san-francisco?rpp=40&amp;sort_by=relevance_desc&amp;start=40"> 2</a>
<a href="/biz/maykadeh-persian-cuisine-san-francisco?rpp=40&amp;sort_by=relevance_desc&amp;start=80"> 3</a>

		</td>
	</tr>
</table>

				<a class="write-review" href="/writeareview/biz/OpBTLNaGnGcn8DRsLcEfQQ" rel="nofollow">Write a Review</a>
			</div>
	</div>

						</div>
						<div id="biz_tab_about" style="display:none">
									<div id="about_this_biz">
			<div class="header clearfix">
				<a class="whatsthis" title="This section allows business owners to provide information about their business. To learn more, go to http://www.yelp.com/business" href="#">What&#39;s This?</a>
				<h3>About This Business</h3>
				<span class="provided_by">Provided by business</span>
			</div>
	
				<div class="section">
					<h4>Specialties</h4>
					<div class="inner"><p>Maykadeh has the best Kebob in the Bay Area. &nbsp;We specialize in succulant lamb dishes and have a variety of lamb entrees on the menu. Persian cuisine is one of the unexpected. While our basic ingredients are familiar to most, such as lamb &amp; rice, the ingredients that enhance it, while not unknown, are used infrequently in Western cuisine: pomegranates, pistachio nuts, saffron, dried lime, rosewater, yogurt, cardamom, cloves, barberry, fenugreek, the unique spice sumak--the list is endless. Persia&#39;s cuisine influenced all of the Middle East and its array of color, texture &amp; flavors is one we invite you to share at Maykadeh.</p></div>
				</div>


				<div class="section">
					<h4>Meet the Business Owner: Mahmoud K.</h4>
					<div class="inner"><p>Mahmoud has worked in the restaurant industry for 46 years and is an expert in crafting a superb dining experience. &nbsp;He has run Maykadeh for &nbsp;the past 26 years and is proud to deliver high quality Persian food to San Francisco.</p></div>
				</div>
			
			<div class="flag_wrapper">
				<a rel="nofollow" class="flag_link" id="bizAboutThisBizFlag" href="/flag_content?flag_type=about_this_biz&flag_id=OpBTLNaGnGcn8DRsLcEfQQ&previous_url=/biz/maykadeh-persian-cuisine-san-francisco">Flag as inappropriate</a>
			</div>
		</div>

						</div>
			</div>

			<div id="bizSideBar" class="clearfix">
						<div id="bizNearby">
			<div id="mapdiv">
				<iframe src="http://maps.freemap.co.il/api/openlayers/?zoom=9&lat=32.06711&lon=34.77177&marker=true"
				        width="300px" height="400px"
				        scrolling="no"
				        marginwidth="0" marginheight="0" 
				        frameborder="1">
   			  </iframe>
			</div>

				<div id="mapLink">
						<a rel="nofollow" href="/map/maykadeh-persian-cuisine-san-francisco">View Larger Map/Directions &raquo;</a>
				</div>

			<div id="nearby_biz_nav" class="clearfix">
					<h3>Browse Nearby:</h3>
					<ul class="stripped">
															<li><a href="/search?find_loc=470+Green+St%2C+San+Francisco%2C+CA+94133&cflt=restaurants" rel="nofollow">Restaurants</a> | </li>
															<li><a href="/search?find_loc=470+Green+St%2C+San+Francisco%2C+CA+94133&cflt=nightlife" rel="nofollow">Nightlife</a> | </li>
															<li><a href="/search?find_loc=470+Green+St%2C+San+Francisco%2C+CA+94133&cflt=shopping" rel="nofollow">Shopping</a> | </li>
															<li><a href="/search?find_loc=470+Green+St%2C+San+Francisco%2C+CA+94133&cflt=coffee" rel="nofollow">Coffee</a> | </li>
						<li><a href="/search?find_loc=470+Green+St%2C+San+Francisco%2C+CA+94133" rel="nofollow">All</a></li>
					</ul>
			</div>
		</div>

							<div id="bizSimilarBox" class="simple_list">
			<h3>People Who Viewed This Also Viewed...</h3>
			<ul>
						<li class="clearfix">
			

<div class="clearStyles bizPhotoBox">
		<a  href="/biz/alborz-persian-cuisine-san-francisco"><img src="http://static.px.yelp.com/bphoto/Gj-hR5PSqQnq6f9sxYSImA/ss" style="height:40px;width:40px;" alt="Photo of Alborz Persian Cuisine"></a>
</div>

		<div class="biz_info">
			<a href="/biz/alborz-persian-cuisine-san-francisco"id="bizreclink1">Alborz Persian Cuisine</a><br>
			<div class="biz_rating"> 
				<div class="rating-small"><img class="stars_4" width="83" height="325" title="4 star rating" alt="4 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
				<em class="smaller">&nbsp;84 reviews</em>
			</div>
				Neighborhood: Pacific Heights<br />
					Category: Middle Eastern
		</div>
	</li>

						<li class="clearfix">
			

<div class="clearStyles bizPhotoBox">
		<a  href="/biz/lavash-san-francisco"><img src="http://static.px.yelp.com/bphoto/F6eDTVCkXo-1YBo29RIPrw/ss" style="height:40px;width:40px;" alt="Photo of Lavash"></a>
</div>

		<div class="biz_info">
			<a href="/biz/lavash-san-francisco"id="bizreclink2">Lavash</a><br>
			<div class="biz_rating"> 
				<div class="rating-small"><img class="stars_4_half" width="83" height="325" title="4.5 star rating" alt="4.5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
				<em class="smaller">&nbsp;153 reviews</em>
			</div>
				Neighborhood: Inner Sunset<br />
					Category: Middle Eastern
		</div>
	</li>

						<li class="clearfix">
			

<div class="clearStyles bizPhotoBox">
		<img src="http://static.px.yelp.com/static/20090507a/i/new/gfx/blank_biz_sm_sq.png" style="height:40px;width:40px;" alt="business image">
</div>

		<div class="biz_info">
			<a href="/biz/nua-san-francisco"id="bizreclink3">Nua</a><br>
			<div class="biz_rating"> 
				<div class="rating-small"><img class="stars_5" width="83" height="325" title="5 star rating" alt="5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
				<em class="smaller">&nbsp;2 reviews</em>
			</div>
				Neighborhood: North Beach/Telegraph Hill<br />
					Category: Greek
		</div>
	</li>

						<li class="clearfix">
			

<div class="clearStyles bizPhotoBox">
		<a  href="/biz/queen-of-sheba-san-francisco"><img src="http://static.px.yelp.com/bphoto/oyN5K4JorbOqWqRgy0U0dQ/ss" style="height:40px;width:40px;" alt="Photo of Queen of Sheba"></a>
</div>

		<div class="biz_info">
			<a href="/biz/queen-of-sheba-san-francisco"id="bizreclink4">Queen of Sheba</a><br>
			<div class="biz_rating"> 
				<div class="rating-small"><img class="stars_5" width="83" height="325" title="5 star rating" alt="5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
				<em class="smaller">&nbsp;12 reviews</em>
			</div>
				Neighborhood: Nob Hill<br />
					Category: Middle Eastern
		</div>
	</li>

						<li class="clearfix">
			

<div class="clearStyles bizPhotoBox">
		<a  href="/biz/estia-san-francisco"><img src="http://static.px.yelp.com/bphoto/ohN_6K6v6ZBZEcXY2Bk26Q/ss" style="height:40px;width:40px;" alt="Photo of Estia"></a>
</div>

		<div class="biz_info">
			<a href="/biz/estia-san-francisco"id="bizreclink5">Estia</a><br>
			<div class="biz_rating"> 
				<div class="rating-small"><img class="stars_3_half" width="83" height="325" title="3.5 star rating" alt="3.5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div>
				<em class="smaller">&nbsp;53 reviews</em>
			</div>
				Neighborhood: North Beach/Telegraph Hill<br />
					Category: Greek
		</div>
	</li>

			</ul>
		</div>

						<div id="relatedLists" class="simple_list">
			<h3 class="clearfix">
					<a href="/list_search?q=Middle+Eastern&sort=relevance&location=San+Francisco%2C+CA" id="more_lists_button">More</a>
				Related Lists
			</h3>
			<ul>
				<li class="clearfix">
						<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=sm6AzP6HSQhI9j9V_oiPWA"><img src="http://static.px.yelp.com/photo/UH9YecBXczD8ympvFC7bGg/ss" style="height:40px;width:40px;" alt="Photo of Bobak S." /></a>
	</div>

					<div class="user_info">
						<a href="/list/taste-sunnyvale">Taste</a>
						<br />Forget about service, ambiance, cleanliness, and&#8230;
					</div>
				</li>
				<li class="clearfix">
						<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=woW3EEoyj5M42Z7yXLhNLg"><img src="http://static.px.yelp.com/photo/iP05d6DwkxEKFdK8kr4_4Q/ss" style="height:40px;width:40px;" alt="Photo of Anna K." /></a>
	</div>

					<div class="user_info">
						<a href="/list/Jqg7pyQQyUcXxp5ps4eo8w">Top Restaurants</a>
						<br />Some of my favorite dining destinations in the&#8230;
					</div>
				</li>
				<li class="clearfix">
						<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=6JeTO9iBoblsgaH47biypA"><img src="http://static.px.yelp.com/photo/qoSYAS0LV7plutTncrSxaQ/ss" style="height:40px;width:40px;" alt="Photo of Ahu S." /></a>
	</div>

					<div class="user_info">
						<a href="/list/posterity-berkeley">Posterity</a>
						<br />back in the day, when i was up to no good, started&#8230;
					</div>
				</li>
				<li class="clearfix">
						<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=GCuDiPUKYxhgFHP5LqJa2Q"><img src="http://static.px.yelp.com/photo/YybdE6oHXxan3e2j9ns5bA/ss" style="height:40px;width:40px;" alt="Photo of Gloria H." /></a>
	</div>

					<div class="user_info">
						<a href="/list/places-to-eat-in-north-beach-san-francisco">Places to eat in North&#8230;</a>
						<br />So many places, so little time...where to go?&#8230;
					</div>
				</li>
				<li class="clearfix">
						<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=m-_pnRtoqOxw-zOtDADckQ"><img src="http://static.px.yelp.com/photo/3tpUqhcX2XRwOqvt4A3hdQ/ss" style="height:40px;width:40px;" alt="Photo of Cara J." /></a>
	</div>

					<div class="user_info">
						<a href="/list/yummy-halal-places-in-the-bay-area-san-francisco">Yummy Halal Places in the&#8230;</a>
						<br />Here&#39;s where I&#39;d be eating right now, if I weren&#39;t&#8230;
					</div>
				</li>
				<li class="clearfix">
						<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=dfYNTBw--CYlZbFz581kYQ"><img src="http://static.px.yelp.com/photo/75jNfx5AzWT234w7oDwPwg/ss" style="height:40px;width:40px;" alt="Photo of Meghan P." /></a>
	</div>

					<div class="user_info">
						<a href="/list/north-beach---no-beach-all-food-san-francisco">North Beach - no beach,&#8230;</a>
						<br />The best eats, drinks, coffees, shops, etc. in my&#8230;
					</div>
				</li>
				<li class="clearfix">
						<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=NM8xzqVmP3GcLuc2_INvXQ"><img src="http://static.px.yelp.com/photo/3MJ4veqSlx1Pu4TGfbI8Tw/ss" style="height:40px;width:40px;" alt="Photo of Chris C." /></a>
	</div>

					<div class="user_info">
						<a href="/list/my-best-north-beach-haunts-san-francisco">My Best North Beach&#8230;</a>
						<br />After living in North Beach for 15 years, I leave&#8230;
					</div>
				</li>
				<li class="clearfix">
						<div class="clearStyles photoBox" >
			<a rel="nofollow" href="/user_details?userid=s153fBYyTwancmAvW0_4Bw"><img src="http://static.px.yelp.com/photo/lkAgQ_N2rOiptLD9obyFxw/ss" style="height:40px;width:40px;" alt="Photo of Joyce L." /></a>
	</div>

					<div class="user_info">
						<a href="/list/best-of-berkeley">Best OF</a>
						<br />These are my all time favorite--GO TO, MAKE ME&#8230;
					</div>
				</li>
			</ul>
		</div>

				
				
			</div>
		</div>
			<div id="yahoo_link">
				Reviews of <a href="http://local.yahoo.com/CA/San+Francisco/Food+Dining/Restaurants/Middle+Eastern">San Francisco Middle Eastern</a> on Yahoo!
			</div>
	</div>
	
		<script type="text/javascript" src="http://static.px.yelp.com/static/20090507b/js/st_lib/effects.js"></script>
	<script type="text/javascript" src="http://static.px.yelp.com/static/20090507b/js/biz_functions.js"></script>

	<script type="text/javascript">
	<!--
		var gmapsUrl = 'http://maps.google.com/maps?oe=utf-8&file=api&v=2.145&client=gme-yelp&key=ABQIAAAA-4PdDZI3yUT7Q6QmlfyYQBR-H9_hULZDKDkXlc3vkn3yqIJUbRQJYjw-XzY7Nb8a-Xj4njoI-o-BLg';
		var review_fetcher;
		Yelp.mainBizInit = function(){
				makeNiceTitles();


				var priceTooltip = new Yelp.tooltipz('price_tip', {doClick: true});

				review_fetcher = new Yelp.BizReviewsFetcher(); 
					review_fetcher.fetchReviews("OpBTLNaGnGcn8DRsLcEfQQ", "MSSTKb_mGZtTPbRm_c7_dQ",false);
					Event.observe($$('#firstToReviewLabel a')[0],'click',function(){review_fetcher.fetchReviews("OpBTLNaGnGcn8DRsLcEfQQ", "MSSTKb_mGZtTPbRm_c7_dQ", "jpyPIGx6-JhJfSmqzY9rkw");});
					new Yelp.tooltipz($('featuredReviewHeader').down('.whatsthis'), {doClick: true});
				new Yelp.tooltipz($('about_this_biz').down('.whatsthis'), {doClick: true});
					var tab_controller = new Yelp.BizDetailsTabMechatron($('about_reviews_tabs'));
				highlight_fetcher = new Yelp.AboutThisBizHighlightFetcher();
				highlight_fetcher.fetchHighlights("OpBTLNaGnGcn8DRsLcEfQQ", 45);
				Yelp.biz_map_init();
			Yelp.extraBizInit();
		};
		Event.observe(window, "load", Yelp.mainBizInit);
		
			(function(){new Yelp.ReviewSummaryMechatron({
				'container': $('review_snapshot'),
				'main_reviews_elements': [$('bizReviewsContent'), $('review_sort_section'), $('paginationControls')],
				'main_reviews_container': $('bizReviewsContent'),
				'scroll_to_element': $('bizReviewsHeader'),
				'graphs_header': $('review_snapshot_graph_header'),
				'graphs_content': $('review_snapshot_graph_content'),
				'graphs_urls': {
					dist:"http://static.px.yelp.com/biz_details_graphs/static/20090507a/dist/OpBTLNaGnGcn8DRsLcEfQQ",
					trend:"http://static.px.yelp.com/biz_details_graphs/static/20090507a/trend/OpBTLNaGnGcn8DRsLcEfQQ"
				}
			});})();

			Yelp.loggedin_user = false;

		var json_biz = {"rating":3.974576,"phone":"(415) 362-8286","formatted_city":"San Francisco, CA","biz_announcement":"","formatted_city_name":"San Francisco","formatted_address":["470 Green St","San Francisco, CA 94133"],"id":"OpBTLNaGnGcn8DRsLcEfQQ","city":"San Francisco","review_count":118,"accurate_for_map":true,"zip":"94133","state":"CA","latitude":37.799817,"cross_streets":"Grant Ave & Varennes St","cross_streets_miniprefix":"b/t","address1":"470 Green St","address2":"","address3":"","photos":[],"formatted_address_brief":["470 Green St","San Francisco, CA 94133"],"name":"Maykadeh Persian Cuisine","neighborhoods":["North Beach/Telegraph Hill"],"category_yelp_ids":["-eE1jeB3WC3O2Pmggiue9A","IQOlufXZrB3wxaL71bHe-Q"],"country":"US","longitude":-122.406959};

		Yelp.api_domain = 'http://api.yelp.com';
		Yelp.biz_id = 'OpBTLNaGnGcn8DRsLcEfQQ';
		
				var slides = [{"image_url":"bphoto/B9-Ftyrtu1we1jTvdp8GCw/","type":"photo","user":{"exists":false},"caption":null},{"image_url":"bphoto/ScB3sb9D0zUi9l-MHuSI7w/","type":"photo","user":{"display_name":"Agus S.","id":"nNGxAKP9FtjW-7olgzp00A","exists":true},"caption":"kobideh kebab"},{"image_url":"bphoto/q3ssZiHLSXrCGJ2EikOLZQ/","type":"photo","user":{"display_name":"Agus S.","id":"nNGxAKP9FtjW-7olgzp00A","exists":true},"caption":"hummus"},{"image_url":"bphoto/FWyB8YBz-Xhic-Avhxp5nA/","type":"photo","user":{"display_name":"Michael M.","id":"l1PQTDX5tkaXhbBZdAefIQ","exists":true},"caption":""},{"image_url":"bphoto/_-GVRFJgqIYZM__zjVGMdQ/","type":"photo","user":{"display_name":"Peg S.","id":"l-zgWG-brcQ4iRev-pfrsg","exists":true},"caption":null},{"image_url":"bphoto/C1ZvygUht_P0dzPv0c4JUw/","type":"photo","user":{"display_name":"Peg S.","id":"l-zgWG-brcQ4iRev-pfrsg","exists":true},"caption":null},{"image_url":"bphoto/ryHCAYrpFPy7k1mwDQx2rQ/","type":"photo","user":{"exists":false},"caption":null},{"image_url":"bphoto/KAwH2SrB_K0F18aPUjn1QQ/","type":"photo","user":{"exists":false},"caption":null},{"image_url":"bphoto/cKdqdGOYgNcWwb5VoxGbzw/","type":"photo","user":{"exists":false},"caption":null},{"image_url":"bphoto/LkXibxc44XKkEcnrS_SRfA/","type":"photo","user":{"display_name":"Michael M.","id":"l1PQTDX5tkaXhbBZdAefIQ","exists":true},"caption":""},{"image_url":"bphoto/jH0IRdZfMUkPNGsICl0ANQ/","type":"photo","user":{"display_name":"Michael M.","id":"l1PQTDX5tkaXhbBZdAefIQ","exists":true},"caption":""},{"image_url":"bphoto/_-97q-cHoziOcHYXJQLEEQ/","type":"photo","user":{"display_name":"Michael M.","id":"l1PQTDX5tkaXhbBZdAefIQ","exists":true},"caption":""},{"image_url":"bphoto/Kbv8v5dQEqJGnYqwa0kBug/","type":"photo","user":{"display_name":"Jeremy S.","id":"nkN_do3fJ9xekchVC-v68A","exists":true},"caption":null},{"image_url":"bphoto/63kt59Nq2f0v4fVhixFJiQ/","type":"photo","user":{"display_name":"Jeremy S.","id":"nkN_do3fJ9xekchVC-v68A","exists":true},"caption":null},{"image_url":"bphoto/-xgl_mvNNmmvWpWv7vliJw/","type":"photo","user":{"display_name":"Michael M.","id":"l1PQTDX5tkaXhbBZdAefIQ","exists":true},"caption":null}];
	var paused = false;
	var slideshow;
	var playMouseover = false;
	Event.observe(window, 'load', initss);

				(function(){new Yelp.biz_announce('bizAnnounDesc', 'J86yjDYJVKcWcpBQt5IlMQ', 'Come in for lunch or dinner and discover why &nbsp;we&#39;ve been in business over 25 years. &nbsp;Our ingredients are fresh and service is impeccable!');})();
			Yelp.makeSupporterTooltip();
	//-->
	</script>
			<script type="text/javascript" src="http://static.px.yelp.com/static/20090507b/js/dynObjects.js"></script>
		<script type="text/javascript" src="http://static.px.yelp.com/static/20090507b/js/chart_functions.js"></script>

<!-- google_ad_section_start(weight=ignore) -->
<div id="footer">
	
	<div>		
				<ul id="aboutSite">
					<li><a href="/business?country=US" rel="nofollow">Business Owners</a></li>
					<li> | <a href="/signup" rel="nofollow" id="Zprofile_footer">My Account</a></li>
					<li> | <a href="/about" rel="nofollow">About Yelp</a></li>
					<li> | <a href="/faq" rel="nofollow">FAQ</a></li>
					<li> | <a href="/weekly">The Weekly Yelp</a></li>
					<li> | <a href="http://officialblog.yelp.com">Yelp Blog</a></li>
					<li> | <a href="/yelpmobile" rel="nofollow">Yelp Mobile</a></li>
					<li> | <a href="/toronto">Yelp Canada</a></li>
					<li> | <a href="/london">Yelp UK</a></li>
					<li> | <a href="/rss" rel="nofollow">RSS</a></li>
					<li> | <a href="/developers?country=US" rel="nofollow">Developers</a></li>
					<li> | <a href="/contact" rel="nofollow">Feedback</a></li>
					<li> | <a href="/jobs?country=US" rel="nofollow">Jobs</a></li>
				</ul>
	</div>

<p>&nbsp;</p>	
<div class="directory">
	<span class="azlist">
		San Francisco Business Listings
		<a href="/sm/san-francisco-ca/num">#</a>
		<a href="/sm/san-francisco-ca/a">A</a>
		<a href="/sm/san-francisco-ca/b">B</a>
		<a href="/sm/san-francisco-ca/c">C</a>
		<a href="/sm/san-francisco-ca/d">D</a>
		<a href="/sm/san-francisco-ca/e">E</a>
		<a href="/sm/san-francisco-ca/f">F</a>
		<a href="/sm/san-francisco-ca/g">G</a>
		<a href="/sm/san-francisco-ca/h">H</a>
		<a href="/sm/san-francisco-ca/i">I</a>
		<a href="/sm/san-francisco-ca/j">J</a>
		<a href="/sm/san-francisco-ca/k">K</a>
		<a href="/sm/san-francisco-ca/l">L</a>
		<a href="/sm/san-francisco-ca/m">M</a>
		<a href="/sm/san-francisco-ca/n">N</a>
		<a href="/sm/san-francisco-ca/o">O</a>
		<a href="/sm/san-francisco-ca/p">P</a>
		<a href="/sm/san-francisco-ca/q">Q</a>
		<a href="/sm/san-francisco-ca/r">R</a>
		<a href="/sm/san-francisco-ca/s">S</a>
		<a href="/sm/san-francisco-ca/t">T</a>
		<a href="/sm/san-francisco-ca/u">U</a>
		<a href="/sm/san-francisco-ca/v">V</a>
		<a href="/sm/san-francisco-ca/w">W</a>
		<a href="/sm/san-francisco-ca/x">X</a>
		<a href="/sm/san-francisco-ca/y">Y</a>
		<a href="/sm/san-francisco-ca/z">Z</a>
		| <a href="/sm/san-francisco-ca-added">Newly Added</a>
	</span>
</div>	
<p>&nbsp;</p>	
<p>Use of this site is subject to express <a href="/static?p=tos&amp;country=US" rel="nofollow"><strong>Terms of Service</strong></a>. By continuing past this page, you agree to abide by these terms.</p>
<p>Copyright &copy; 2004-2009 Yelp | <a href="/static?p=privacy&amp;country=US" rel="nofollow">Privacy Policy</a><br><br></p>



<div class="directory">
	<ul>
		<li class="first"><strong>Site Map</strong></li>
		<li> | <a href="/atlanta">Atlanta</a></li>
		<li> | <a href="/austin">Austin</a></li>
		<li> | <a href="/boston">Boston</a></li>
		<li> | <a href="/chicago">Chicago</a></li>
		<li> | <a href="/dallas">Dallas</a></li>
		<li> | <a href="/denver">Denver</a></li>
		<li> | <a href="/detroit">Detroit</a></li>
		<li> | <a href="/honolulu">Honolulu</a></li>
		<li> | <a href="/houston">Houston</a></li>
		<li> | <a href="/la">Los Angeles</a></li>
		<li> | <a href="/miami">Miami</a></li>
		<li> | <a href="/minneapolis">Minneapolis</a></li>
		<li> | <a href="/nyc">New York</a></li>
		<li> | <a href="/philadelphia">Philadelphia</a></li>
		<li> | <a href="/portland">Portland</a></li>
		<li> | <a href="/sacramento">Sacramento</a></li>
		<li> | <a href="/sandiego">San Diego</a></li>
		<li> | <a href="/sf">San Francisco</a></li>
		<li> | <a href="/sanjose">San Jose</a></li>
		<li> | <a href="/seattle">Seattle</a></li>
		<li> | <a href="/dc">Washington, DC</a></li>
		<li> | <a href="/locations">More Cities</a></li>
	</ul>
</div>

<div class="directory">
	<ul>
		<li class="first"><strong>Review Directories</strong></li>
		<li> | 
				<a href="/reviews/12_Atlanta_GA.html">Atlanta</a></li>
		<li> | 
				<a href="/reviews/12_Austin_TX.html">Austin</a></li>
		<li> | 
				<a href="/reviews/12_Boston_MA.html">Boston</a></li>
		<li> | 
				<a href="/reviews/12_Chicago_IL.html">Chicago</a></li>
		<li> | 
				<a href="/reviews/12_Dallas_TX.html">Dallas</a></li>
		<li> | 
				<a href="/reviews/12_Denver_CO.html">Denver</a></li>
		<li> | 
				<a href="/reviews/12_Honolulu_HI.html">Honolulu</a></li>
		<li> | 
				<a href="/reviews/12_Houston_TX.html">Houston</a></li>
		<li> | 
				<a href="/reviews/12_Las_Vegas_NV.html">Las Vegas</a></li>
		<li> | 
				<a href="/sm/london-london-added">London</a></li>
		<li> | 
				<a href="/reviews/12_Los_Angeles_CA.html">Los Angeles</a></li>
		<li> | 
				<a href="/reviews/12_Miami_FL.html">Miami</a></li>
		<li> | 
				<a href="/reviews/12_New_York_NY.html">New York</a></li>
		<li> | 
				<a href="/reviews/12_Philadelphia_PA.html">Philadelphia</a></li>
		<li> | 
				<a href="/reviews/12_Phoenix_AZ.html">Phoenix</a></li>
		<li> | 
				<a href="/reviews/12_Portland_OR.html">Portland</a></li>
		<li> | 
				<a href="/reviews/12_Sacramento_CA.html">Sacramento</a></li>
		<li> | 
				<a href="/reviews/12_San_Diego_CA.html">San Diego</a></li>
		<li> | 
				<a href="/reviews/12_San_Francisco_CA.html">San Francisco</a></li>
		<li> | 
				<a href="/reviews/12_San_Jose_CA.html">San Jose</a></li>
		<li> | 
				<a href="/reviews/12_Seattle_WA.html">Seattle</a></li>
		<li> | 
				<a href="/reviews/12_Washington_DC.html">Washington, DC</a></li>
	</ul>
</div>

<div class="directory">
	<ul>
		<li class="first"><strong>Talk Directories</strong></li>
				<li> | <a href="/archived_topics/Austin_TX.html">Austin</a></li>
				<li> | <a href="/archived_topics/Boston_MA.html">Boston</a></li>
				<li> | <a href="/archived_topics/Chicago_IL.html">Chicago</a></li>
				<li> | <a href="/archived_topics/Los_Angeles_CA.html">Los Angeles</a></li>
				<li> | <a href="/archived_topics/New_York_NY.html">New York</a></li>
				<li> | <a href="/archived_topics/San_Diego_CA.html">San Diego</a></li>
				<li> | <a href="/archived_topics/San_Francisco_CA.html">San Francisco</a></li>
				<li> | <a href="/archived_topics/San_Jose_CA.html">San Jose</a></li>
				<li> | <a href="/archived_topics/Seattle_WA.html">Seattle</a></li>
				<li> | <a href="/archived_topics/Washington_DC.html">Washington, DC</a></li>
	</ul>
</div>

<div class="directory">
	<ul>
		<li class="first"><strong>Search Directories</strong></li>
				<li> | <a href="/topsearches/austin">Austin</a></li>
				<li> | <a href="/topsearches/boston">Boston</a></li>
				<li> | <a href="/topsearches/chicago">Chicago</a></li>
				<li> | <a href="/topsearches/london">London</a></li>
				<li> | <a href="/topsearches/la">Los Angeles</a></li>
				<li> | <a href="/topsearches/nyc">New York</a></li>
				<li> | <a href="/topsearches/sandiego">San Diego</a></li>
				<li> | <a href="/topsearches/sf">San Francisco</a></li>
				<li> | <a href="/topsearches/sanjose">San Jose</a></li>
				<li> | <a href="/topsearches/seattle">Seattle</a></li>
				<li> | <a href="/topsearches/dc">Washington, DC</a></li>
	</ul>
</div>

</div>









</body>
</html>