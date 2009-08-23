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
			<A href="./main.php"></A>
		</div>
		<div id="register">
			<p><?php if (session_is_registered('username')) print("��� ����� �-" . $_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>
	
<div id="navContainer">
		<ul>
			
			<LI class="header" id="writeReview"><A   href="./write_review.php" >���� ������</A> | </LI>
			<LI class="header" id="findReview"><A   href="./find_review.php" >��� ������</A></LI>
			
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "login.html";}?> > <?php if (session_is_registered('username')) {echo "�����";} else {echo "���";}?></A></LI>
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "about_me.php";} else{echo "signup.html?profile=1";}?> >������ ��� </A> | </LI>
		</ul>
</div>
	
<div id="bodyContainer">
	<div class="ieSucks" id="locBar">
		<H1>��-����</H1>
		<ul>
				 <LI><A href="./haifa">����</A> | </LI>
				 <LI><A href="./beer_sheva">��� ���</A> | </LI>
				 <LI><A href="jerusalem.php">�������</A> | </LI>
				 <LI id="locBar_title">���� �����:</LI>
		</ul>
	</div>
 
 	<h2 id="nonMemberWelcome"><A href="signup.html"  >!����� ����� ���� ����� �� �� �� ����� - ��� ���� ��������  - IsraYelp</A> </h2>
 	
	<div id="external_search">
	<form method="get" action="/search" name="external_search"> 
		<p>
			<label for="find_desc_ext"> �� ����� <em> �� ����</em></label> 
			<input type="text" align="right" maxlength="64" id="find_desc_ext" name="name" tabindex="1" value="" >
			
		</p>
		<p>
			<label for="find_loc_ext">��� ����� <em> </em></label>
			<select name="kind">
 				 <option value="restaurant">�����</option>
				 <option value="cafe">���-���</option>
  				 <option value="hair_salon">�����</option>
                 <option value="cinema">��� ������</option>
			</select>
		</p>

		<p>
			<label for="find_loc_ext">��� <em> </em></label>
			<select name="city">
 				 <option value="tel-aviv">��-����</option>
				 <option value="jerusalem">�������</option>
  				 <option value="beer_sheva">��� ���</option>
                 <option value="haifa">����</option>
			</select>
		</p>
		<button type="submit" id="ex_submit_button" class="form_img_btn" tabindex="3" onclick="document.external_search.rpp.value=Yelp.readRppFromSearchPrefsCookie();">���</button>
	</form>
	</div>


	<div id="column_wrapper" class="clearfix">
	
<!--*******************************-->
		<div id="rightColumn">
		
			<div id="bestOfYelpModule" class="clearfix external" >
					
				<div id="best_cats">
				<h3>������� ������ ����� ���-����:</h3>			
				<div class="clearfix">
					<div class="bestCat">
						<h4 style="margin-bottom:0px;" title="������"><a href="./tel-aviv/restaurants.php">������</a></h4>
						<em>
									<?php 
											$mysqli = new mysqli('localhost', 'administrator', '', 'test');
											$query = "SELECT * FROM `test`.`critiques`";
											$result = $mysqli->query($query);
											$count = $result->num_rows;
											echo $count;
									?>  
						�������
						
						</em>			
				
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
							<p><a href="./tel-aviv/restaurants.php">���...</a></p>
					</div>
				
					<div class="bestCat">
						<h4 style="margin-bottom:0px;" title="���� �����"><a href="/c/sf/shopping">�����</a></h4>
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
						<h4 style="margin-bottom:0px;" title="������ �����"><a href="/c/sf/nightlife">��� ����</a></h4>
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
						<h4 style="margin-bottom:0px;" title="���� ��� �����"><a href="/c/sf/beautysvc">���� ����</a></h4>
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
							<li class="restaurants"><a href="./tel-aviv/restaurants.php">������</a>  										
									<?php 
											$mysqli = new mysqli('localhost', 'administrator', '', 'test');
											$query = "SELECT * FROM `test`.`restaurants`";
											$result = $mysqli->query($query);
											$count = $result->num_rows;
											echo $count;
									?>  </li>
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


				<div id="topYelpersModule" class="external">
					<h3>������ ������</h3>
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
					<a class="floatLink"><img src="./image/more_button.png" alt="Search lists"></a>
					<h3>��� ������...</h3>
					<p>�������� �������� �� ���� ����</p>
				
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