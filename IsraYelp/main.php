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
			<LI class="header" id="writeReview"><A href="./write_review.php" >���� ������</A> | </LI>
			<LI class="header" id="findReview"><A href="./find_review.php" >��� ������</A></LI>
			
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "login.html";}?> > <?php if (session_is_registered('username')) {echo "�����";} else {echo "���";}?></A></LI>
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "about_me.php";} else{echo "signup.html?profile=1";}?> >������ ��� </A> | </LI>
		</ul>
</div>
	
<div id="bodyContainer">
	<div id="locBar">
		<?php	
			$other_cities_query = "SELECT * FROM `test`.`cities` WHERE id!=$city_id ORDER BY id DESC";
			$other_cities_result = $mysqli->query($other_cities_query);
			
			$html = "<H1>".$city_name."</H1>";
			$html .= "<ul>";
			$html .= "<li><A href=\"\">���...</A></li>"; //todo: replace href 			
			while ($row = mysqli_fetch_assoc($other_cities_result)){
				$html .= "<li><A href=\"./main.php?city_id=".$row['id']."\">".$row['name']."</A> | </li>";
			}			
			$html .= "<li id=\"locBar_title\">���� �����:</li>";
			$html .= "</ul>";
			echo $html;
		?>
	</div>
 
 	<?php 
 		if (!session_is_registered('username')){
 			$html = "<h2 id=\"nonMemberWelcome\"><A href=\"signup.html\"></A></h2>";
 			echo $html;
 		}
 	?>
 	
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
					<h3>������� ������ ����� �<?php echo $city_name?>:</h3>			
					<div class="clearfix">
						<div class="bestCat">
							<h4 style="margin-bottom:0px;" title="������"><a href="./restaurants/restaurants.php?city_id=<?php echo $city_id?>">������</a></h4>
							<em>
								<?php 
									$query = "SELECT * FROM `test`.`reviews` WHERE city_id=$city_id";
									$result = $mysqli->query($query);
									$count = $result->num_rows;
									echo $count;
								?>  
								�������							
							</em>			
					
							<div class="clearStyles bizPhotoBox">
								<a  href="/biz/san-francisco-meats-and-delicatessen-san-francisco-2"><img src="http://static.px.yelp.com/bphoto/JfEZplImdPEBuE1BNc767A/m"  alt="San Francisco Meats &amp; Delicatessen, San Francisco"></a>
							</div>
							
							<?php 
								$query = "SELECT * FROM `test`.`restaurants` WHERE city_id=$city_id ORDER BY grading DESC LIMIT 5";
								$result = $mysqli->query($query);
								$first = 1;
								$html = "<ol>";			
								while ($rest = mysqli_fetch_assoc($result)){
									$html .= "<li>";
									if ($first){
										$html .= "<strong>";
									}
									$html .= "<a href=\"./restaurants/restaurant.php?rest_id=".$rest['id']."\">".$rest['name']."</a>";
									if ($first){
										$html .= "</strong>";
										$first = 0;
									}
									$html .= "</li>";
								}
								$html .= "</ol>";
								$html .= "<p><a href=\"./restaurants/restaurants.php?city_id=".$city_id."\">���...</a></p>";
								echo $html;
							?>														
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
							<li class="restaurants"><a href="./restaurants/restaurants.php?city_id=<?php echo $city_id?>">������</a>  										
								<?php 
									$query = "SELECT * FROM `test`.`restaurants` WHERE city_id=$city_id";
									$result = $mysqli->query($query);
									$count = $result->num_rows;
									echo $count;
								?>  
							</li>
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
					<br>
					<?php 						
						$query = "SELECT * FROM `test`.`users` ORDER BY RAND() LIMIT 6";
						$result = $mysqli->query($query);
						while ($user = mysqli_fetch_assoc($result)){
							$html = "<div>
									<P><A href=\"./about_me.php?user_id=".$user['id']."\">".$user['username']."</A></P>
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
					<?php 
						$query_reviews = "SELECT * FROM `test`.`reviews` WHERE city_id='$city_id' ORDER BY added DESC LIMIT 3"; //todo: same city or not?
						$result_reviews = $mysqli->query($query_reviews);
						while ($review = mysqli_fetch_assoc($result_reviews) ){
							$user_id = $review['user_id'];
							$query_user = "SELECT * FROM `test`.`users` WHERE id='$user_id'";
							$result_user = $mysqli->query($query_user);
							$user = mysqli_fetch_assoc($result_user);
							
							$rest_id = $review['restaurant_id'];
							$query_rest = "SELECT * FROM `test`.`restaurants` WHERE id='$rest_id'";
							$result_rest = $mysqli->query($query_rest);
							$rest = mysqli_fetch_assoc($result_rest);
							
							$html = "<div class=\"clearfix\">
										<DIV class=\"clearStyles photoBox\">
											<A href=\"../about_me.php?user_id=".$user['id']."\" rel=\"nofollow\"><IMG style=\"WIDTH: 40px; HEIGHT: 40px\" alt=\"������ �� " . $user['username'] ."\" src=\"".getUserPictureSrc($user['id'], "./")."\"></A>
										</div>								
										<p>
											<a href=\"./restaurants/restaurant.php?rest_id=".$rest['id']."\">".$rest['name']."</a> - ".$review['title'] ."
											<br/><em class=\"smaller grey\">". $user['username'] ."</em>
											<br/>".$review['review']."										
										</p>
									</div>";
							echo $html;	
						}
					?>							
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
			<li> | <a href="./main.php?city_id=1">��-����</a></li>
			<li> | <a href="./main.php?city_id=2">����� �����</a></li>
			<li> | <a href="./main.php?city_id=3">�������</a></li>
			<li> | <a href="./main.php?city_id=4">����</a></li>
			<li> | <a href="./main.php?city_id=5">��� ���</a></li>
			<li> | <a href="./main.php?city_id=6">������</a></li>
			<li> | <a href="./main.php?city_id=7">����</a></li>
			<li> | <a href="">���� ������</a></li>
		</ul>
	</div>
	
	<div>
		<p> ������ ������ </p>
	</div>
</div>


</body>
</html>