<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>������ ���-���� </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body class= "us" id="IsraYelp_main_body" dir="rtl">

<div id="head">
		<div id="logo">
			<A href="main.php/"></A>
		</div>
		<div id="register">
			<p><?php if (session_is_registered('username')) print("��� ����� �-" . $_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>


<div id="navContainer">
		<ul>
			<LI class="header" id="welcome" ><A class="tabon" href="./">������ �����</A> | </LI>
			<LI class="header" id="aboutMe"><A id="Zabout_me" href="http://static.px.yelp.com/signup?return_url=%2Fuser_details" rel="nofollow">�����</A> | </LI>
			<LI class="header" id="writeReview"><A id="Zwrite_a_review" href="http://static.px.yelp.com/signup?return_url=%2Fwriteareview" rel="nofollow">���� ������</A> | </LI>
			<LI class="header" id="findReview"><A href="http://static.px.yelp.com/find" rel="nofollow">��� ������</A> | </LI>
			<LI class="header" id="invite"><A id="Zinvite_friends" href="http://static.px.yelp.com/signup?return_url=%2Finvite_friends" rel="nofollow">���� �����</A></LI>
			
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "login.html";}?> rel="nofollow"> <?php if (session_is_registered('username')) {echo "�����";} else {echo "���";}?></A></LI>
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "profile.php";} else{echo "signup.html?profile=1";}?> rel="nofollow">������ ��� </A> | </LI>
			<LI class="header_login"><A href="http://static.px.yelp.com/member_search" rel="nofollow"> ����� ����� </A> | </LI>		
		</ul>
	
</div>

<div id="mainContent" class="category_browse">
	<div class="ieSucks" id="locBar">
		<H1 >��-����</H1>
		<ul style="float:right;">
				 <LI><A id="locBoxToggle" onclick='Yelp.init_locBox(this, {"city_dir_depth":0,"return_url":"/home"});return false' href="http://www.yelp.com/locations?return_url=%2Fhome">���...</A> </LI>
				 <LI><A href="http://www.yelp.com/la">����</A> | </LI>
				 <LI><A href="http://www.yelp.com/sanjose">��� ���</A> | </LI>
				 <LI><A href="http://www.yelp.com/nyc">�������</A> | </LI>
				 <LI id="locBar_title">���� �����:</LI>
		</ul>
	</div>
	



	<div id="top_cat_biz">
		<div id="top_biz_lists" class="clearfix">
			<img src="./image/best_of_yelp.gif" width="101" height="25" class="alignmid" alt="Best of Yelp" id="BOY_logo" />
			<h1>������ ���-����</h1>
			<p id="breadcrumbs">�������: <a href="/sanjose">��-���� </a> 
				&raquo; ������
			</p>
		
			<div id="top_biz">
					<div class="clearStyles bizPhotoBox">
							<a  href="/biz/bakery-mexico-san-jose#hrid:rwiHbJYf8uQWOnSglosPgg"><img src="http://static.px.yelp.com/bphoto/CTZh-CDPji271JkSYxYuBA/ms" style="" alt="Bakery Mexico"></a>
					</div>
		
					<p class="biz_info">1. <a href="lukas.php" id="top_biz_name_1" title="lukas"> ����� </a> </p>
					<div class="top_biz_rating">
						<div class="rating"><img class="stars_4_half" width="83" height="325" title="4.5 star rating" alt="4.5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div> <em class="smaller">83 reviews</em>
					</div>
					<p class="smaller">Category: <a href="/c/sanjose/bakeries">Bakeries</a>, <a href="/c/sanjose/mexican">Mexican</a></p>
		
					<p>I&#39;m a white girl. &nbsp;I&#39;d never had a torta before and decided to try Bakery Mexico because of all the wonderful and helpful Yelp reviews. &nbsp;Wow, I am a torta fan! &nbsp;I had the Milanesa and it was huge and unbelievably tasty with lots of onions and avocado for less than 6 bucks! &nbsp;Why not 5 stars? &nbsp;Well, the place is kind of dirty, probably because they are so busy and there was no one there that spoke&#8230;</p>
			</div>
		
			<ul id="biz_list" class="stripped">
				<li>
					<div class="biz_info">
						2. <a href="/biz/international-food-bazaar-san-jose#hrid:xaAwZx0xd8eOXKIzWOTDIg" id="top_biz_name_2" class="biz_name" title="International Food Bazaar">International Food Bazaar</a>
					</div>
					<div class="biz_rating">
						<div class="rating-small"><img class="stars_4_half" width="83" height="325" title="4.5 star rating" alt="4.5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div> <em class="smaller">42 reviews</em>
					</div>
						<p class="smaller">Category: <a href="/c/sanjose/grocery">Grocery</a>, <a href="/c/sanjose/delis">Delis</a></p>
				</li>
				<li>
					<div class="biz_info">
						3. <a href="/biz/gulzaar-halaal-restaurant-and-bakery-san-jose#hrid:ZKvRBQVsZ4H6MQ7vcnYt9g" id="top_biz_name_3" class="biz_name" title="Gulzaar Halaal Restaurant &amp; Bakery">Gulzaar Halaal Restaurant &amp; Bakery</a>
					</div>
					<div class="biz_rating">
						<div class="rating-small"><img class="stars_4_half" width="83" height="325" title="4.5 star rating" alt="4.5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div> <em class="smaller">120 reviews</em>
					</div>
						<p class="smaller">Category: <a href="/c/sanjose/mideastern">Middle Eastern</a>, <a href="/c/sanjose/halal">Halal</a></p>
				</li>
				<li>
					<div class="biz_info">
						4. <a href="/biz/penguin-froyo-san-jose#hrid:Bzvz0k_z_KEeca0itRxY-w" id="top_biz_name_4" class="biz_name" title="Penguin Froyo">Penguin Froyo</a>
					</div>
					<div class="biz_rating">
						<div class="rating-small"><img class="stars_4_half" width="83" height="325" title="4.5 star rating" alt="4.5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div> <em class="smaller">189 reviews</em>
					</div>
						<p class="smaller">Category: <a href="/c/sanjose/icecream">Ice Cream &amp; Frozen Yogurt</a>, <a href="/c/sanjose/creperies">Creperies</a></p>
				</li>
				<li>
					<div class="biz_info">
						5. <a href="/biz/rose-donuts-and-cafe-san-jose-3#hrid:YRCSpDpA__N76eaWH9_o_A" id="top_biz_name_5" class="biz_name" title="Rose Donuts &amp; Cafe">Rose Donuts &amp; Cafe</a>
					</div>
					<div class="biz_rating">
						<div class="rating-small"><img class="stars_4_half" width="83" height="325" title="4.5 star rating" alt="4.5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div> <em class="smaller">93 reviews</em>
					</div>
						<p class="smaller">Category: <a href="/c/sanjose/donuts">Donuts</a>, <a href="/c/sanjose/burgers">Burgers</a></p>
				</li>
				<li id="top_more_link"><a href="/search?find_loc=San+Jose%2C+CA&amp;cflt=restaurants"><strong>More San Jose  Restaurants &raquo;</strong></a></li>
			</ul>
			
		</div>
		<div id="biz_map" style="float:right";>
		<h2>��� ��-���� </h2>
		    <iframe src="http://maps.freemap.co.il/api/openlayers/?zoom=6&lat=32.06711&lon=34.77177"
		        width="600px" height="400px"
		        scrolling="no"
		        marginwidth="0" marginheight="0" 
		        frameborder="1">
      		</iframe>
		</div>
	</div>
</div>
</body>
</html>

