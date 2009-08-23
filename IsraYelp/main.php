<?php session_start();?>
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
			<p><?php if (session_is_registered('username')) print("אתה מחובר כ-" . $_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>
	
<div id="navContainer">
		<ul>
			
			<LI class="header" id="writeReview"><A   href="./write_review.php" >כתוב ביקורת</A> | </LI>
			<LI class="header" id="findReview"><A   href="./find_review.php" >חפש ביקורת</A></LI>
			
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "login.html";}?> > <?php if (session_is_registered('username')) {echo "התנתק";} else {echo "כנס";}?></A></LI>
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "about_me.php";} else{echo "signup.html?profile=1";}?> >החשבון שלי </A> | </LI>
		</ul>
</div>
	
<div id="bodyContainer">
	<div class="ieSucks" id="locBar">
		<H1>תל-אביב</H1>
		<ul>
				 <LI><A href="./haifa">חיפה</A> | </LI>
				 <LI><A href="./beer_sheva">באר שבע</A> | </LI>
				 <LI><A href="jerusalem.php">ירושלים</A> | </LI>
				 <LI id="locBar_title">ערים אחרות:</LI>
		</ul>
	</div>
 
 	<h2 id="nonMemberWelcome"><A href="signup.html"  >!תוכלו בקלות לבקר ולדבר על כל מה שכדאי - ולא כדאי באזוריכם  - IsraYelp</A> </h2>
 	
	<div id="external_search">
	<form method="get" action="/search" name="external_search"> 
		<p>
			<label for="find_desc_ext"> שם המקום <em> שם העסק</em></label> 
			<input type="text" align="right" maxlength="64" id="find_desc_ext" name="name" tabindex="1" value="" >
			
		</p>
		<p>
			<label for="find_loc_ext">סוג המקום <em> </em></label>
			<select name="kind">
 				 <option value="restaurant">מסעדה</option>
				 <option value="cafe">בית-קפה</option>
  				 <option value="hair_salon">מספרה</option>
                 <option value="cinema">בית קולנוע</option>
			</select>
		</p>

		<p>
			<label for="find_loc_ext">עיר <em> </em></label>
			<select name="city">
 				 <option value="tel-aviv">תל-אביב</option>
				 <option value="jerusalem">ירושלים</option>
  				 <option value="beer_sheva">באר שבע</option>
                 <option value="haifa">חיפה</option>
			</select>
		</p>
		<button type="submit" id="ex_submit_button" class="form_img_btn" tabindex="3" onclick="document.external_search.rpp.value=Yelp.readRppFromSearchPrefsCookie();">חפש</button>
	</form>
	</div>


	<div id="column_wrapper" class="clearfix">
	
<!--*******************************-->
		<div id="rightColumn">
		
			<div id="bestOfYelpModule" class="clearfix external" >
					
				<div id="best_cats">
				<h3>המקומות הטובים ביותר בתל-אביב:</h3>			
				<div class="clearfix">
					<div class="bestCat">
						<h4 style="margin-bottom:0px;" title="מסעדות"><a href="./tel-aviv/restaurants.php">מסעדות</a></h4>
						<em>
									<?php 
											$mysqli = new mysqli('localhost', 'administrator', '', 'test');
											$query = "SELECT * FROM `test`.`critiques`";
											$result = $mysqli->query($query);
											$count = $result->num_rows;
											echo $count;
									?>  
						ביקורות
						
						</em>			
				
						<div class="clearStyles bizPhotoBox">
							<a  href="/biz/san-francisco-meats-and-delicatessen-san-francisco-2"><img src="http://static.px.yelp.com/bphoto/JfEZplImdPEBuE1BNc767A/m"  alt="San Francisco Meats &amp; Delicatessen, San Francisco"></a>
						</div>
							<ol>
							<li><strong><a   href="/biz/san-francisco-meats-and-delicatessen-san-francisco-2">ראשון</a></strong></li>
							<li><a   href="/biz/petite-deli-san-francisco-2">שני</a></li>
							<li><a   href="/biz/gary-danko-san-francisco-2">שלישי</a></li>
							<li><a   href="/biz/ikes-place-san-francisco">רביעי</a></li>
							<li><a   href="/biz/roxie-food-center-san-francisco">חמישי</a></li>
							</ol>
							<p><a href="./tel-aviv/restaurants.php">עוד...</a></p>
					</div>
				
					<div class="bestCat">
						<h4 style="margin-bottom:0px;" title="אתרי קניות"><a href="/c/sf/shopping">קניות</a></h4>
						<em>4115 ביקורות</em>
						
						<div class="clearStyles bizPhotoBox">
						<a  href="/biz/diannes-old-and-new-estates-san-francisco-2"><img src="http://static.px.yelp.com/bphoto/Tm0CoFsSJrbe1wXWvTATwA/m" style="" alt=""></a>
						</div>
							<ol>
							<li><strong><a   href="/biz/diannes-old-and-new-estates-san-francisco-2">ראשון</a></strong></li>
							<li><a   href="/biz/not-just-flowers-san-francisco">שני</a></li>
							<li><a   href="/biz/my-trick-pony-san-francisco">שלישי</a></li>
							<li><a   href="/biz/xapno-san-francisco">רביעי</a></li>
							<li><a   href="/biz/keetsa-mattress-san-francisco">חמישי</a></li>
							</ol>
							<p><a href="/c/sf/shopping">עוד...</a></p>
						</div>
				</div>
					
				<div class="clearfix">
					<div class="bestCat">
						<h4 style="margin-bottom:0px;" title="מקומות בילוי"><a href="/c/sf/nightlife">חיי לילה</a></h4>
						<em>965 ביקורות</em>
						<div class="clearStyles bizPhotoBox">
							<a  href="/biz/cairo-nights-san-francisco"><img src="http://static.px.yelp.com/bphoto/JWNZlCwcSOrLtvpll4Om0A/m" style="" alt="Cairo Nights, San Francisco"></a>
						</div>
							<ol>
							<li><strong><a   href="/biz/cairo-nights-san-francisco">ראשון</a></strong></li>
							<li><a rel="nofolzlow" href="/biz/the-sisters-of-perpetual-indulgence-inc-san-francisco">שני</a></li>
							<li><a   href="/biz/sunshine-coast-san-francisco">שלישי</a></li>
							<li><a   href="/biz/great-american-music-hall-san-francisco">רביעי</a></li>
							<li><a   href="/biz/sedusa-studios-campbell">חמישי</a></li>
							</ol>
							<p><a href="/c/sf/nightlife">עוד...</a></p>
					</div>
						
					<div class="bestCat">
						<h4 style="margin-bottom:0px;" title="אתרי ספא ויופי"><a href="/c/sf/beautysvc">יופי וספא</a></h4>
						<em>1843 ביקורות</em>
						
						<div class="clearStyles bizPhotoBox">
							<a  href="/biz/urban-allure-san-francisco"><img src="http://static.px.yelp.com/bphoto/r4hH874MVyjpQ1vcNTWOow/m" style="" alt="Urban Allure, San Francisco"></a>
						</div>
							<ol>
							<li><strong><a   href="/biz/urban-allure-san-francisco">ראשון</a> </strong>  </li>
							<li><a   href="/biz/gentle-star-medspa-san-francisco">שני</a> </li>
							<li><a   href="/biz/earthbody-advanced-therapies-san-francisco">שלישי</a></li>
							<li><a   href="/biz/nevas-beauty-san-francisco">רביעי</a></li>
							<li><a   href="/biz/alisha-valverde-skincare-medical-skin-aesthetics-san-francisco">חמישי</a></li>
							</ol>
							<p><a href="/c/sf/beautysvc">עוד...</a></p>
					</div>
				</div>				
				</div>	
					
					<div id="cat_list">	
						<h4 class="ieSucks">חפש לפי קטגוריה</h4>
						<ul class="stripped ieSucks">								
							<li class="shopping"><a href="/c/sf/shopping">קניות</a> 4165 </li>
							<li class="restaurants"><a href="./tel-aviv/restaurants.php">מסעדות</a>  										
									<?php 
											$mysqli = new mysqli('localhost', 'administrator', '', 'test');
											$query = "SELECT * FROM `test`.`restaurants`";
											$result = $mysqli->query($query);
											$count = $result->num_rows;
											echo $count;
									?>  </li>
							<li class="health"><a href="/c/sf/health">רפואה ושירותי בריאות</a> 2511  </li>
							<li class="food"><a href="/c/sf/food">מזון</a> 2486  </li>
							<li class="beautysvc"><a href="/c/sf/beautysvc">יופי וספא</a>  1870 </li>
							<li class="homeservices"><a href="/c/sf/homeservices">שירותים עד הבית</a> 1522  </li>
							<li class="localservices"><a href="/c/sf/localservices">שירותים מקומיים</a>  1477 </li>
							<li class="eventservices"><a href="/c/sf/eventservices">אירועים</a> 1277  </li>
							<li class="arts"><a href="/c/sf/arts">בידור</a> 1153  </li>
<!--							<li class="active"><a href="/c/sf/active">Active Life</a> 1114</li>-->
							<li class="nightlife"><a href="/c/sf/nightlife">חיי לילה</a> 977  </li>
<!--							<li class="auto"><a href="/c/sf/auto">Automotive</a> 829</li>-->
							<li class="hotelstravel"><a href="/c/sf/hotelstravel">טיולים ובתי מלון</a> 754  </li>
							<li class="professional"><a href="/c/sf/professional">שירותים מקצועיים</a> 751  </li>
							<li class="education"><a href="/c/sf/education">השכלה</a> 608  </li>
<!--							<li class="realestate"><a href="/c/sf/realestate">Real Estate</a> 480</li>-->
							<li class="pets">  <a href="/c/sf/pets">חיות מחמד</a> 367 </li>
							<li class="financialservices"><a href="/c/sf/financialservices">שירותים פיננסיים</a> 359  </li>
							<li class="publicservicesgovt"><a href="/c/sf/publicservicesgovt">שירותים ציבוריים</a> 336  </li>
<!--							<li class="localflavor"><a href="/c/sf/localflavor">Local Flavor</a> 319</li>-->
<!--							<li class="massmedia"><a href="/c/sf/massmedia">Mass Media</a> 199</li>-->
<!--							<li class="religiousorgs"> 149 <a href="/c/sf/religiousorgs">ארגונים דתיים</a> </li>-->
						
						</ul>
						<p style="font-size:1px;clear:both;margin:0px;">&nbsp;</p>
					</div>
				</div> 


				<div id="topYelpersModule" class="external">
					<h3>מבקרים נבחרים</h3>
					<div class="divider">
						<div>
							<div class="clearStyles photoBox">
							<?php 
							
										$mysqli = new mysqli('localhost', 'administrator', '', 'test');
										$query = "SELECT username FROM `test`.`users`";
										$result = $mysqli->query($query);
										$count = $result->num_rows;
										$num1 = rand(1,$count);
										$num2 = 0; 
										while ($num2==0) { 
											$num2 = rand(1,$count); 
											if ($num2 == $num1) $num2 = 0; 
										}
										$num3 = 0; 
										while ($num3==0) { 
											$num3 = rand(1,$count); 
											if ($num3 == $num1 || $num3 == $num2) $num3 = 0; 
										}
										$num4 = 0; 
										while ($num4==0) { 
											$num4 = rand(1,$count); 
											if ($num4 == $num1 || $num4 == $num2 || $num4 == $num3) $num4 = 0; 
										}							
							           	$destination="./users_pics/".$num1;
										if (!file_exists($destination))
										$destination="./users_pics/blank_user_medium.gif";
							?>	
										<img src="<? echo $destination; ?>" >
							</div>
							<P>
								<A href="http://www.yelp.com/user_details?userid=3viH_SSb9QhrCbifTbx0Ng">
									<?php 

											$query = "SELECT username FROM `test`.`users` WHERE id=$num1";
											$result = $mysqli->query($query);
											$row = mysqli_fetch_assoc($result);
											echo $row['username'];										
											?>
								</A> 
							</P>
						</div>
						<div>
							<div class="clearStyles photoBox">
							<?php 
							           	$destination="./users_pics/".$num2;
										if (!file_exists($destination))
										$destination="./users_pics/blank_user_medium.gif";
							?>	
										<img src="<? echo $destination; ?>" >
							
							</div>
							<P>
								<A href="http://www.yelp.com/user_details?userid=3viH_SSb9QhrCbifTbx0Ng">
								<?php 
									$query = "SELECT username FROM `test`.`users` WHERE id=$num2";
									$result = $mysqli->query($query);
									$row = mysqli_fetch_assoc($result);
									echo $row['username'];	
								?>
								
								
								</A> 
							</P>
						</div>
					</div>
		
					<div class="divider">
						<div>
							<div class="clearStyles photoBox">
							<?php 
							           	$destination="./users_pics/".$num3;
										if (!file_exists($destination))
										$destination="./users_pics/blank_user_medium.gif";
							?>	
										<img src="<? echo $destination; ?>" >
							
							</div>
							<P>
								<A href="http://www.yelp.com/user_details?userid=3viH_SSb9QhrCbifTbx0Ng">
								<?php 
									$query = "SELECT username FROM `test`.`users` WHERE id=$num3";
									$result = $mysqli->query($query);
									$row = mysqli_fetch_assoc($result);
									echo $row['username'];	
								?>
								</A> 
							</P>
						</div>
						<div>
							<div class="clearStyles photoBox">
							<?php 
							           	$destination="./users_pics/".$num4;
										if (!file_exists($destination))
										$destination="./users_pics/blank_user_medium.gif";
							?>	
										<img src="<? echo $destination; ?>" >
							
							</div>
							<P>
								<A href="http://www.yelp.com/user_details?userid=3viH_SSb9QhrCbifTbx0Ng">
								<?php 
									$query = "SELECT username FROM `test`.`users` WHERE id=$num4";
									$result = $mysqli->query($query);
									$row = mysqli_fetch_assoc($result);
									echo $row['username'];		
								?>
										
								</A> 
							</P>
						</div>
					</div>
		
		
				</div>
		</div>
<!--*******************************-->
		
		
		<div id="leftColumn">
			<div class="clearfix" id="reviewPicksModule">
				<A class="floatLink" href="http://www.yelp.com/browse/reviews/picks">
				<IMG height="39"  width="74"  alt="Archive" src="./image/archive_button.png" ></A> 
				<H3>ביקורת היום</H3>	
				<P> נבחרה ע"י חברי האתר! </P>
				
				<div id="reviewerInfo">
					<div class="clearStyles photoBox" >
					<a   href="/user_details?userid=FRSoGLPQI16pus03avyaSA"><img src="http://static.px.yelp.com/photo/30Ja3pPB0xdGxKviW0ChZw/m" style="" alt="Photo of Gill C." /></a></div>
					<p><a   href="/user_details?userid=FRSoGLPQI16pus03avyaSA">שם המבקר</a></p>
				</div>
				
				<div id="reviewPick">
					<div class="rating"><img class="stars_5" width="83" height="325" title="5 star rating" alt="5 star rating" src="./image/stars_map.png"/></div>
					<p><a   href="/biz/joanns-cafe-south-san-francisco#hrid:P2l_hXqjw900yLKb-5BGeQ">שם המקום</a></p>
					<p style="padding-top:.3em;">כאן תהיה ביקורת שתבחר בדרך כלשהי, כל יום ביקורת אחרת</p>
					<a   href="/biz/joanns-cafe-south-san-francisco#hrid:P2l_hXqjw900yLKb-5BGeQ" > המשך&raquo; </a>
					
				</div>	
			</div>
			
			<div id="recent_offers">
				<a href="/specialoffers" class="floatLink"><img height="39"  width="74" src="./image/more_button.png" alt="More" ></a>
				<h3> מבצעים והנחות </h3>
				<ul class="stripped">
					<li>
						<h4><a href="/biz/cary-lane-san-francisco"  >פיצה דומינוס</a></h4>
						<p>  הנחה על פיצה משפחתית </p>
						<p class="grey">ההתחלה של ההודעה המקורית...</p>
					</li>
					<li>
						<h4><a href="/biz/amisha-indian-cuisine-san-francisco"  >מרכז הטיפוח</a></h4>
						<p>מסאז' שני בחצי מחיר</p>
						<p class="grey">ההתחלה של ההודעה המקורית...</p>
					</li>
				</ul>
			</div>
										
				<div id="freshListsModule">
					<a class="floatLink"><img src="./image/more_button.png" alt="Search lists"></a>
					<h3>ישר מהתנור...</h3>
					<p>הביקורות האחרונות של חברי האתר</p>
				
					<div class="clearfix">
								<div class="clearStyles photoBox" >
								<?php 
										$mysqli = new mysqli('localhost', 'administrator', '', 'test');
										$query = "SELECT * FROM `test`.`critiques`";
										$result = $mysqli->query($query);
										$count = $result->num_rows;
										$query = "SELECT * FROM `test`.`critiques` WHERE id=$count";
										$result = $mysqli->query($query);
										$row_from_critiques = mysqli_fetch_assoc($result);
										$user_id=$row_from_critiques['user_id'];//user_id
										
							           	$destination="./users_pics/".$user_id;
										if (!file_exists($destination))
										$destination="./users_pics/blank_user_medium.gif";
								?>
										<img src="<? echo $destination; ?>" >
								</div>				
								<p>
									<a   href="/list/coffee-and-tea-berkeley">
									<?php echo $row_from_critiques['title'];?></a>
									<br />
									
									<em class="smaller grey">
									<?php 
										$query = "SELECT * FROM `test`.`users` WHERE id=$user_id";
										$result = $mysqli->query($query);
										$row_from_users = mysqli_fetch_assoc($result);
										echo $row_from_users['username'];										
									?>
									</em>
									<br />
										<?php echo $row_from_critiques['comment'];?>
								</p>
					</div>
					<div class="clearfix">
								<div class="clearStyles photoBox" >
								<?php 									
										$query = "SELECT * FROM `test`.`critiques` WHERE id=($count-1)";
										$result = $mysqli->query($query);
										$row_from_critiques = mysqli_fetch_assoc($result);
										$user_id=$row_from_critiques['user_id'];//user_id
										
							           	$destination="./users_pics/".$user_id;
										if (!file_exists($destination))
										$destination="./users_pics/blank_user_medium.gif";
								?>
										<img src="<? echo $destination; ?>" >
								</div>				
								<p>
									<a   href="/list/coffee-and-tea-berkeley">
									<?php echo $row_from_critiques['title'];?></a>
									<br />
									
									<em class="smaller grey">
									<?php 
										$query = "SELECT * FROM `test`.`users` WHERE id=$user_id";
										$result = $mysqli->query($query);
										$row_from_users = mysqli_fetch_assoc($result);
										echo $row_from_users['username'];										
									?>
									</em>
									<br />
										<?php echo $row_from_critiques['comment'];?>
								</p>
					</div>
					<div class="clearfix">
								<div class="clearStyles photoBox" >
								<?php 									
										$query = "SELECT * FROM `test`.`critiques` WHERE id=($count-2)";
										$result = $mysqli->query($query);
										$row_from_critiques = mysqli_fetch_assoc($result);
										$user_id=$row_from_critiques['user_id'];//user_id
										
							           	$destination="./users_pics/".$user_id;
										if (!file_exists($destination))
										$destination="./users_pics/blank_user_medium.gif";
								?>
										<img src="<? echo $destination; ?>" >
								</div>				
								<p>
									<a   href="/list/coffee-and-tea-berkeley">
									<?php echo $row_from_critiques['title'];?></a>
									<br />
									
									<em class="smaller grey">
									<?php 
										$query = "SELECT * FROM `test`.`users` WHERE id=$user_id";
										$result = $mysqli->query($query);
										$row_from_users = mysqli_fetch_assoc($result);
										echo $row_from_users['username'];										
									?>
									</em>
									<br />
										<?php echo $row_from_critiques['comment'];?>
								</p>
					</div>
					<div class="clearfix">
								<div class="clearStyles photoBox" >
								<?php 									
										$query = "SELECT * FROM `test`.`critiques` WHERE id=($count-3)";
										$result = $mysqli->query($query);
										$row_from_critiques = mysqli_fetch_assoc($result);
										$user_id=$row_from_critiques['user_id'];//user_id
										
							           	$destination="./users_pics/".$user_id;
										if (!file_exists($destination))
										$destination="./users_pics/blank_user_medium.gif";
								?>
										<img src="<? echo $destination; ?>" >
								</div>				
								<p>
									<a   href="/list/coffee-and-tea-berkeley">
									<?php echo $row_from_critiques['title'];?></a>
									<br />
									
									<em class="smaller grey">
									<?php 
										$query = "SELECT * FROM `test`.`users` WHERE id=$user_id";
										$result = $mysqli->query($query);
										$row_from_users = mysqli_fetch_assoc($result);
										echo $row_from_users['username'];										
									?>
									</em>
									<br />
										<?php echo $row_from_critiques['comment'];?>
								</p>
					</div>
					<div class="clearfix">
								<div class="clearStyles photoBox" >
								<?php 									
										$query = "SELECT * FROM `test`.`critiques` WHERE id=($count-4)";
										$result = $mysqli->query($query);
										$row_from_critiques = mysqli_fetch_assoc($result);
										$user_id=$row_from_critiques['user_id'];//user_id
										
							           	$destination="./users_pics/".$user_id;
										if (!file_exists($destination))
										$destination="./users_pics/blank_user_medium.gif";
								?>
										<img src="<? echo $destination; ?>" >
								</div>				
								<p>
									<a   href="/list/coffee-and-tea-berkeley">
									<?php echo $row_from_critiques['title'];?></a>
									<br />
									
									<em class="smaller grey">
									<?php 
										$query = "SELECT * FROM `test`.`users` WHERE id=$user_id";
										$result = $mysqli->query($query);
										$row_from_users = mysqli_fetch_assoc($result);
										echo $row_from_users['username'];										
									?>
									</em>
									<br />
										<?php echo $row_from_critiques['comment'];?>
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
					<li>  <a href="/signup"   id="Zprofile_footer">עלינו</a></li>
					<li> | <a href="/about">החשבון שלי</a></li>
					<li> | <a href="/faq" >שאלות נפוצות </a></li>
				</ul>
	</div>

	<div class="directory">
		<ul>
			<li class="first"><strong>מפת האתר</strong></li>
			<li> | <a href="/atlanta">תל-אביב</a></li>
			<li> | <a href="/austin">ירושלים</a></li>
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