<?php session_start();

include '../utils/functions.php';

$city_id = $_GET['city_id'];
$city_name = getCityName($city_id);

$mysqli = getMysqliConnection();

$query_restaurants = "SELECT * FROM `test`.`restaurants` WHERE city_id='$city_id' ORDER BY grading DESC LIMIT 5";
$result_restaurants = $mysqli->query($query_restaurants);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>מסעדות ב<?php echo $city_name?> | IsraYelp</title>
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
			<p><?php if (session_is_registered('username')) print("אתה מחובר כ-" . $_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>


<div id="navContainer">
		<ul>			
			<LI class="header" id="writeReview"><A   href="../write_review.php" >כתוב ביקורת</A> | </LI>
			<LI class="header" id="findReview"><A   href="../find_review.php" >חפש ביקורת</A></LI>
			
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "../login.php";}?> > <?php if (session_is_registered('username')) {echo "התנתק";} else {echo "כנס";}?></A></LI>
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "../about_me.php";} else{echo "../signup.html?profile=1";}?> >החשבון שלי </A> | </LI>
		</ul>
</div>

<div id="mainContent" class="category_browse">
	<div id="locBar">
		<?php echo getLocBarHtmlCode($city_id, $city_name, "./restaurants.php");?>		
	</div>

	<div id="top_cat_biz">
		<div id="top_biz_lists" class="clearfix">
			<br/>
			<h1>מסעדות ב<?php echo $city_name?> </h1>
			<p id="breadcrumbs">קטגוריה: <a href="../main.php"><?php echo $city_name?></a> 
				&raquo; מסעדות
			</p>
		
			<?php 
				$topRestaurant = mysqli_fetch_assoc($result_restaurants);
				$topRest_id = $topRestaurant['id'];
				$image_srs = "./image/$topRest_id.JPG";
				$query_restReview = "SELECT * FROM `test`.`reviews` WHERE biz_id=$topRest_id and biz_type='restaurants' ORDER BY added DESC";
				$result_restReview = $mysqli->query($query_restReview);
				$count_restReview = $result_restReview->num_rows;
				$restReview = mysqli_fetch_assoc($result_restReview);
				$html = "<div id=\"top_biz\">
							<div class=\"clearStyles bizPhotoBox\">
								<a  href=\"$image_srs\"><img src=\"$image_srs\" width=100 height=150 style=\"\" alt=\"".$topRestaurant['name']."\"></a>
							</div>
							<p class=\"biz_info\">1. <a href=\"./restaurant.php?biz_id=$topRest_id\" id=\"top_biz_name_1\" style=\"FONT-WEIGHT: bold;\">".$topRestaurant['name']."</a></p>							
							<div class=\"top_biz_rating\">
								<div class=\"rating\">
									<img class=\"stars_4_half\" width=\"83\" height=\"325\" title=\"4.5 star rating\" alt=\"4.5 star rating\" src=\"../image/stars_map.png\"/>
								</div> 
								<em class=\"smaller\">$count_restReview ביקורות</em>
							</div>
							<p class=\"smaller\">קטגוריה:".$topRestaurant['type_rest']."</p>
							<p>".$restReview['review']."</p>
						</div>";
				echo $html;
			?>
									
			<ul id="biz_list" class="stripped">
				<?php
					$html = "";
					$i=2;
					while ($rest = mysqli_fetch_assoc($result_restaurants)){
						$rest_id = $rest['id'];
						$query_restReview = "SELECT * FROM `test`.`reviews` WHERE biz_id=$rest_id and biz_type='restaurants' ORDER BY added DESC";
						$result_restReview = $mysqli->query($query_restReview);
						$count_restReview = $result_restReview->num_rows;
						$html .= "<li>
									<div class=\"biz_info\">
										$i. <a href=\"./restaurant.php?biz_id=".$rest_id."\" id=\"top_biz_name_$i\" class=\"biz_name\">".$rest['name']."</a>
									</div>
									<div class=\"biz_rating\">
										<div class=\"rating-small\">
											<img class=\"stars_4_half\" width=\"83\" height=325 title=\"4.5 star rating\" alt=\"4.5 star rating\" src=\"../image/stars_map.png\"/>
										</div> 
										<em class=\"smaller\">$count_restReview ביקורות</em>
									</div>
									<p class=\"smaller\">קטגוריה:".$rest['type_rest']."</p>
								</li>";
						$i++;
					}
					echo $html;
				?>	
			</ul>						
		</div>
	</div>
	
	<div id="biz_map"">
		<h1>מפת <?php echo $city_name?></h1>
		<iframe src="http://maps.freemap.co.il/api/openlayers/?
					zoom=9&
					lat=<?php echo $topRestaurant['lat']?>&
					lon=<?php echo $topRestaurant['lon']?>&
					marker=true"
		       	width="900px" height="300px"
		        scrolling="no"
		        marginwidth="10" marginheight="10" 
		        frameborder="1">
		 </iframe>
	</div>

		
	<div id="section_content" class="clearfix">
		<div id="main_column">
			<div id="sub_cat_lists" class="clearfix">
				<h2>מסעדות <?php echo $city_name?> לפי קטגוריות<h2>
				<ul class="stripped other_sub_cats">
					<li><a href="./events.php">אירועים</a></li>
					<li><a href="./bar-rest.php">בר-מסעדה</a></li>
					<li><a href="./meat.php">בשר</a></li>
					<li><a href="./gurme.php">גורמה</a></li>
					<li><a href="./fish.php">דגים</a></li>
					<li><a href="./mideastern.php">ים-תיכוני</a></li>
					<li><a href="./seafood">מאכלי ים</a></li>
					<li><a href="./chefrest.php">מסעדת שף</a></li>

				</ul>
			</div>	
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