<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>��� ������� ������� - IsraYelp </title>
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
			<LI class="header" id="aboutMe"><A   id="Zabout_me" href="http://static.px.yelp.com/signup?return_url=%2Fuser_details" >�����</A> | </LI>
			<LI class="header" id="writeReview"><A   id="Zwrite_a_review" href="http://static.px.yelp.com/signup?return_url=%2Fwriteareview" >���� ������</A> | </LI>
			<LI class="header" id="findReview"><A   href="http://static.px.yelp.com/find" >��� ������</A> | </LI>
			<LI class="header" id="invite"><A   id="Zinvite_friends" href="http://static.px.yelp.com/signup?return_url=%2Finvite_friends" >���� �����</A></LI>
			
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "login.html";}?> > <?php if (session_is_registered('username')) {echo "�����";} else {echo "���";}?></A></LI>
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "profile.php";} else{echo "signup.html?profile=1";}?> >������ ��� </A> | </LI>
			<LI class="header_login"><A   href="member_search.php" > ����� ����� </A> | </LI>		
		</ul>
</div>
	
<div id="bodyContainer">
	<div class="ieSucks" id="locBar">
		<H1>�������</H1>
		<ul>
				 <LI><A id="locBoxToggle" onclick='Yelp.init_locBox(this, {"city_dir_depth":0,"return_url":"/home"});return false' href="http://www.yelp.com/locations?return_url=%2Fhome">���...</A> </LI>
				 <LI><A href="./israyelp/haifa.php">����</A> | </LI>
				 <LI><A href="./beer_sheva">��� ���</A> | </LI>
				 <LI><A href="main.php">��-����</A> | </LI>
				 <LI id="locBar_title">���� �����:</LI>
		</ul>
	</div>
 
 	<h2 id="nonMemberWelcome"><A href="signup.html"  >!����� ����� ���� ����� �� �� �� ����� - ��� ���� ��������  - IsraYelp</A> </h2>
 	
	<div id="external_search">
		<form method="get" action="/search" name="external_search"> 
			<p>
				<label for="find_desc_ext"> ��� <em>������: �����, �����, ����</em></label> 
				<input type="text" maxlength="64" id="find_desc_ext" name="find_desc" tabindex="1">
				
			</p>
			<p>
				<label for="find_loc_ext">����� <em>�����, ���</em></label>
				<input type="text" maxlength="64" name="find_loc" id="find_loc_ext" tabindex="2" value="���� �����">
				<input type="hidden" name="ns" value="1">
				<input type="hidden" name="rpp" value="10">
			</p>
	
			<button type="submit" id="ex_submit_button" class="form_img_btn" tabindex="3" onclick="document.external_search.rpp.value=Yelp.readRppFromSearchPrefsCookie();">���</button>
		</form>
	</div>

	<div id="column_wrapper" class="clearfix">
	
<!--*******************************-->
		<div id="rightColumn">
		
			<div id="bestOfYelpModule" class="clearfix external" >
					
				<div id="best_cats">
				<a   href="/find"><img src="./image/more_button2.png" alt="More Best Of" style="float: left; margin-left: 8px; margin-top: 5px;" /></a>
				<h3>������� ������ ����� ���-����</h3>
				
				<div class="clearfix">
					<div class="bestCat">
						<h4 style="margin-bottom:0px;" title="Best Restaurants in San Francisco"><a href="restaurants.php">������</a></h4>
						<em>3829 �������</em>			
				
						<div class="clearStyles bizPhotoBox">
							<a  href="/biz/san-francisco-meats-and-delicatessen-san-francisco-2"><img src="http://static.px.yelp.com/bphoto/JfEZplImdPEBuE1BNc767A/m"  alt="San Francisco Meats &amp; Delicatessen, San Francisco"></a>
						</div>
							<ol>
							<li><strong><a   href="/biz/san-francisco-meats-and-delicatessen-san-francisco-2">�����</a></strong></li>
							<li><a   href="/biz/petite-deli-san-francisco-2">���</a></li>
							<li><a   href="/biz/gary-danko-san-francisco-2">�����</a></li>
							<li><a   href="/biz/ikes-place-san-francisco">�����</a></li>
							<li><a   href="/biz/roxie-food-center-san-francisco">�����</a></li>
							</ol>
							<p><a href="restaurants.php">���...</a></p>
					</div>
				
					<div class="bestCat">
						<h4 style="margin-bottom:0px;" title="Best Shopping in San Francisco"><a href="/c/sf/shopping">�����</a></h4>
						<em>4115 �������</em>
						
						<div class="clearStyles bizPhotoBox">
						<a  href="/biz/diannes-old-and-new-estates-san-francisco-2"><img src="http://static.px.yelp.com/bphoto/Tm0CoFsSJrbe1wXWvTATwA/m" style="" alt=""></a>
						</div>
							<ol>
							<li><strong><a   href="/biz/diannes-old-and-new-estates-san-francisco-2">�����</a></strong></li>
							<li><a   href="/biz/not-just-flowers-san-francisco">���</a></li>
							<li><a   href="/biz/my-trick-pony-san-francisco">�����</a></li>
							<li><a   href="/biz/xapno-san-francisco">�����</a></li>
							<li><a   href="/biz/keetsa-mattress-san-francisco">�����</a></li>
							</ol>
							<p><a href="/c/sf/shopping">���...</a></p>
						</div>
				</div>
					
				<div class="clearfix">
					<div class="bestCat">
						<h4 style="margin-bottom:0px;" title="Best Nightlife in San Francisco"><a href="/c/sf/nightlife">��� ����</a></h4>
						<em>965 �������</em>
						<div class="clearStyles bizPhotoBox">
							<a  href="/biz/cairo-nights-san-francisco"><img src="http://static.px.yelp.com/bphoto/JWNZlCwcSOrLtvpll4Om0A/m" style="" alt="Cairo Nights, San Francisco"></a>
						</div>
							<ol>
							<li><strong><a   href="/biz/cairo-nights-san-francisco">�����</a></strong></li>
							<li><a rel="nofolzlow" href="/biz/the-sisters-of-perpetual-indulgence-inc-san-francisco">���</a></li>
							<li><a   href="/biz/sunshine-coast-san-francisco">�����</a></li>
							<li><a   href="/biz/great-american-music-hall-san-francisco">�����</a></li>
							<li><a   href="/biz/sedusa-studios-campbell">�����</a></li>
							</ol>
							<p><a href="/c/sf/nightlife">���...</a></p>
					</div>
						
					<div class="bestCat">
						<h4 style="margin-bottom:0px;" title="Best Beauty and Spas in San Francisco"><a href="/c/sf/beautysvc">���� ����</a></h4>
						<em>1843 �������</em>
						
						<div class="clearStyles bizPhotoBox">
							<a  href="/biz/urban-allure-san-francisco"><img src="http://static.px.yelp.com/bphoto/r4hH874MVyjpQ1vcNTWOow/m" style="" alt="Urban Allure, San Francisco"></a>
						</div>
							<ol>
							<li><strong><a   href="/biz/urban-allure-san-francisco">�����</a> </strong>  </li>
							<li><a   href="/biz/gentle-star-medspa-san-francisco">���</a> </li>
							<li><a   href="/biz/earthbody-advanced-therapies-san-francisco">�����</a></li>
							<li><a   href="/biz/nevas-beauty-san-francisco">�����</a></li>
							<li><a   href="/biz/alisha-valverde-skincare-medical-skin-aesthetics-san-francisco">�����</a></li>
							</ol>
							<p><a href="/c/sf/beautysvc">���...</a></p>
					</div>
				</div>				
				</div>	
					
					<div id="cat_list">	
						<h4 class="ieSucks">��� ��� �������</h4>
						<ul class="stripped ieSucks">								
							<li class="shopping"><a href="/c/sf/shopping">�����</a> 4165 </li>
							<li class="restaurants"><a href="restaurants.php">������</a>  3910  </li>
							<li class="health"><a href="/c/sf/health">����� ������� ������</a> 2511  </li>
							<li class="food"><a href="/c/sf/food">����</a> 2486  </li>
							<li class="beautysvc"><a href="/c/sf/beautysvc">���� ����</a>  1870 </li>
							<li class="homeservices"><a href="/c/sf/homeservices">������� �� ����</a> 1522  </li>
							<li class="localservices"><a href="/c/sf/localservices">������� �������</a>  1477 </li>
							<li class="eventservices"><a href="/c/sf/eventservices">�������</a> 1277  </li>
							<li class="arts"><a href="/c/sf/arts">�����</a> 1153  </li>
<!--							<li class="active"><a href="/c/sf/active">Active Life</a> 1114</li>-->
							<li class="nightlife"><a href="/c/sf/nightlife">��� ����</a> 977  </li>
<!--							<li class="auto"><a href="/c/sf/auto">Automotive</a> 829</li>-->
							<li class="hotelstravel"><a href="/c/sf/hotelstravel">������ ���� ����</a> 754  </li>
							<li class="professional"><a href="/c/sf/professional">������� ��������</a> 751  </li>
							<li class="education"><a href="/c/sf/education">�����</a> 608  </li>
<!--							<li class="realestate"><a href="/c/sf/realestate">Real Estate</a> 480</li>-->
							<li class="pets">  <a href="/c/sf/pets">���� ����</a> 367 </li>
							<li class="financialservices"><a href="/c/sf/financialservices">������� ��������</a> 359  </li>
							<li class="publicservicesgovt"><a href="/c/sf/publicservicesgovt">������� ��������</a> 336  </li>
<!--							<li class="localflavor"><a href="/c/sf/localflavor">Local Flavor</a> 319</li>-->
<!--							<li class="massmedia"><a href="/c/sf/massmedia">Mass Media</a> 199</li>-->
<!--							<li class="religiousorgs"> 149 <a href="/c/sf/religiousorgs">������� �����</a> </li>-->
						
						</ul>
						<p style="font-size:1px;clear:both;margin:0px;">&nbsp;</p>
					</div>
				</div> 

				<div id="hot_and_new" class="external">
					<h3>�� ����</h3>
					<p class="smaller"><em>����� ��� �� ����� ������</em></p>
							
					
					<div class="clearStyles bizPhotoBox">
							<a   href="/biz/shanghai-dumpling-king-san-francisco#hrid:ImF2RtPABGuiB9KlTUMXVg"><img src="http://static.px.yelp.com/bphoto/vfVo_W0bOOmZimf5Yh78Sw/m" style="" alt="Shanghai Dumpling King, San Francisco, CA"></a>
					</div>
					
						<div class="rating"><img class="stars_3" width="83" height="325" title="3 star rating" alt="3 star " src="./image/stars_map.png"/></div>
						<h4>1. <a   href="/biz/shanghai-dumpling-king-san-francisco#hrid:ImF2RtPABGuiB9KlTUMXVg">������</a></h4>
						<p>��� ���� ������� �� �����...</p>		
						<div id="hot_list" >
							<h4>��� ������ ����</h4>
							<ul class="stripped">
								<li>2. <a    href="/biz/the-corner-san-francisco">The Corner</a></li>
								<li>3. <a    href="/biz/borobudur-restaurant-san-francisco">Borobudur Restaurant</a></li>
								<li>4. <a    href="/biz/mescolanza-san-francisco">Mescolanza</a></li>
								<li>5. <a    href="/biz/farmerbrown-san-francisco">farmerbrown</a></li>
							<li><a href="/top?most=hot&find_loc=San+Francisco%2C+CA">��� >></a></li>
							</ul>
						</div>			
				</div>
		</div>
<!--*******************************-->
		
		
		<div id="leftColumn">
			<div class="clearfix" id="reviewPicksModule">
				<A class="floatLink" href="http://www.yelp.com/browse/reviews/picks">
				<IMG height="39"  width="74"  alt="Archive" src="./image/archive_button.png" ></A> 
				<H3>������ ����</H3>	
				<P> ����� �"� ���� ����! </P>
				
				<div id="reviewerInfo">
					<div class="clearStyles photoBox" >
					<a   href="/user_details?userid=FRSoGLPQI16pus03avyaSA"><img src="http://static.px.yelp.com/photo/30Ja3pPB0xdGxKviW0ChZw/m" style="" alt="Photo of Gill C." /></a></div>
					<p><a   href="/user_details?userid=FRSoGLPQI16pus03avyaSA">�� �����</a></p>
				</div>
				
				<div id="reviewPick">
					<div class="rating"><img class="stars_5" width="83" height="325" title="5 star rating" alt="5 star rating" src="./image/stars_map.png"/></div>
					<p><a   href="/biz/joanns-cafe-south-san-francisco#hrid:P2l_hXqjw900yLKb-5BGeQ">�� �����</a></p>
					<p style="padding-top:.3em;">��� ���� ������ ����� ���� �����, �� ��� ������ ����</p>
					<a   href="/biz/joanns-cafe-south-san-francisco#hrid:P2l_hXqjw900yLKb-5BGeQ" > ����&raquo; </a>
					
				</div>	
			</div>
			
			<div id="recent_offers">
				<a href="/specialoffers" class="floatLink"><img height="39"  width="74" src="./image/more_button.png" alt="More" ></a>
				<h3> ������ ������ </h3>
				<ul class="stripped">
					<li>
						<h4><a href="/biz/cary-lane-san-francisco"  >���� �������</a></h4>
						<p>  ���� �� ���� ������� </p>
						<p class="grey">������ �� ������ �������...</p>
					</li>
					<li>
						<h4><a href="/biz/amisha-indian-cuisine-san-francisco"  >���� ������</a></h4>
						<p>����' ��� ���� ����</p>
						<p class="grey">������ �� ������ �������...</p>
					</li>
				</ul>
			</div>
										
				<div id="freshListsModule">
					<a href="/list_search?q=&sort=time_updated&location=San+Francisco%2C+CA" class="floatLink"><img src="./image/more_button.png" alt="Search lists"></a>
					<h3>��� ������...</h3>
					<p>�������� �������� �� ���� ����</p>
				
					<div class="clearfix">
								<div class="clearStyles photoBox" >
							<a   href="/user_details?userid=0juzbrgcLHqobdK-OZAyiw"><img src="http://static.px.yelp.com/photo/sTLR3ZURk2-JwZRwnUREwA/ss" style="height:40px;width:40px;" alt="Photo ofDaniel L." /></a>
					</div>				
						<p>
							<a   href="/list/coffee-and-tea-berkeley">Coffee &amp; Tea</a>
							<br />Isn&#39;t it time to take a break from what you&#39;re doing?
						</p>
					</div>
					<div class="clearfix">
								<div class="clearStyles photoBox" >
							<a   href="/user_details?userid=yVtAUqcUaLV3PLRcCHaw5w"><img src="http://static.px.yelp.com/photo/1nrEbqCt1dvST083jXD3rw/ss" style="height:40px;width:40px;" alt="Photo ofJennifer C P." /></a>
					</div>
				
						<p>
							<a   href="/list/no-thank-you---never-again-san-francisco">No thank you - NEVER again!</a>
							<br />These are establishments that I will never again visit. Never. No, really, I insist because mean people suck and that&#39;s sad. My fellow elite buddy&#8230;
						</p>
					</div>
					<div class="clearfix">
								<div class="clearStyles photoBox" >
							<a   href="/user_details?userid=M_SxfmZjepJYxE_vNbWK4g"><img src="http://static.px.yelp.com/photo/rZrQob17DQ3qEjnbwanzaA/ss" style="height:40px;width:40px;" alt="Photo ofDeanna T." /></a>
					</div>
						<p>
							<a   href="/list/the-rich-san-francisco">The Rich</a>
							<br />The Inner and Outer Richmond! Sometimes it&#39;s nice to get away from the big city life.
						</p>
					</div>
					<div class="clearfix">
								<div class="clearStyles photoBox" >
							<a   href="/user_details?userid=Z2PeqEKL87UUG3vfMBRd4w"><img src="http://static.px.yelp.com/photo/S3PvXY3cr0ljiLWQL9hUmw/ss" style="height:40px;width:40px;" alt="Photo ofRobert S." /></a>
					</div>				
						<p>
							<a   href="/list/burger-fanatics-love-burgers-and-must-try-them-all-san-mateo">Burger Fanatics love burgers and must try them all!!!!</a>
							<br />If you love burgers you love to try out a new place and a good burger. &nbsp;Sometimes you will hit a bust but that is the fun in it. &nbsp;Go out and try a&#8230;
						</p>
					</div>
					<div class="clearfix">
								<div class="clearStyles photoBox" >
							<a   href="/user_details?userid=QxicE6c4zNxYYJh_aeywlA"><img src="http://static.px.yelp.com/photo/4__2w7AMiMNKqjyyqtuB6Q/ss" style="height:40px;width:40px;" alt="Photo ofMark B." /></a>
					</div>
				
						<p>
							<a   href="/list/best-breakfast-in-the-bay-berkeley">Best Breakfast in the Bay !</a>
							<br />Here&#39;s where I like to come to stuff my face full of bacon + eggs + pancakes + toast.
						</p>
					</div>				
				</div>			
		</div>
	</div>
</div>

<div id="pressLinks">
	<IMG height="84" alt="homepage footer ads" src="./image/ads_empty.png" width="950" useMap="#pressMap" /> 
	<MAP name="pressMap">
		<AREA alt="The Weekly Yelp" href="http://www.yelp.com/weekly"   />
		<AREA alt="Yelp Apparel Store" href="http://www.yelp.com/store"   />
		<AREA alt="The Yelp Blog" href="http://officialblog.yelp.com/"   />
		<AREA alt="In the News" href="http://www.yelp.com/press"   />
	</MAP>
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
			<li> | <a href="/atlanta">��-����</a></li>
			<li> | <a href="/austin">�������</a></li>
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