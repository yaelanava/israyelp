<?php 

session_start();

include './utils/functions.php';

$city_id = $_GET['city_id'];
$city_name = getCityName($city_id);

$biz_type="shopping";

$category = isset($_GET['category']) ? $_GET['category'] : 0;
$categoryQureyOrNull = $category ? " and category LIKE ('%$category%')" : "";

$mysqli = getMysqliConnection();

$query_top_bizs = "SELECT * FROM `$biz_type` WHERE city_id=$city_id $categoryQureyOrNull
 					  ORDER BY grading DESC LIMIT 5";
$result_top_bizs = $mysqli->query($query_top_bizs);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>מסעדות ב<?php echo $city_name?> | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body dir="rtl">

<div id="head">
		<div id="logo">
			<A href="./main.php?city_id=<?php echo $city_id?>"></A>
		</div>
		<div id="register">
			<p><?php if (session_is_registered('username')) print("אתה מחובר כ-".$_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>


<div id="navContainer">
		<ul>			
			<LI class="header" id="writeReview"><A   href="/write_review.php" >כתוב ביקורת</A> | </LI>
			<LI class="header" id="findReview"><A   href="/find_review.php" >חפש ביקורת</A></LI>
			
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "login.php?logout";} else{echo "login.php";}?> > <?php if (session_is_registered('username')) {echo "התנתק";} else {echo "כנס";}?></A></LI>
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "profile.php";} else{echo "signup.php?";}?> >החשבון שלי </A> | </LI>
		</ul>
</div>

<div id="mainContent" class="category_browse">
	<div id="locBar">
		<?php echo getLocBarHtmlCode($city_id, $city_name, $biz_type.".php?");?>		
	</div>

	<div id="top_cat_biz">
		<div id="top_biz_lists" class="clearfix">
			<br/>
			<h1>אתרי קניות ב<?php echo $city_name?> </h1>
			<p id="breadcrumbs">קטגוריה: 
				<a href="./main.php?city_id=<?php echo $city_id?>"><?php echo $city_name?></a> 
				&raquo;		
				<?php 
					if ($category) {
						echo "<a href=\"?city_id=$city_id\">קניות</a>
								&raquo; $category"; 
					} else {
						echo "קניות";
					}
				?>					
			</p>
		
			<?php 
				if ($result_top_bizs->num_rows > 0) {
					$topBiz = mysqli_fetch_assoc($result_top_bizs);
					$topBiz_id = $topBiz['id'];
					$query_BizReview = "SELECT * FROM `reviews` WHERE biz_id=$topBiz_id and biz_type='$biz_type' ORDER BY added DESC LIMIT 1";
					$result_BizReview = $mysqli->query($query_BizReview);
					if ($result_BizReview) {						
						$BizReview = mysqli_fetch_assoc($result_BizReview);
						$biz_url = getBizURL($biz_type, $topBiz_id);
						$image_srs = "./biz_pics/$biz_type/$topBiz_id.jpg";
						$html = "<div id=\"top_biz\">
									<div class=\"clearStyles bizPhotoBox\">
										<a  href=\"$image_srs\"><img src=\"$image_srs\" width=100 height=150 style=\"\" alt=\"".$topBiz['name']."\"></a>
									</div>
									<p class=\"biz_info\">1. <a href=\"$biz_url\" id=\"top_biz_name_1\" style=\"FONT-WEIGHT: bold;\">".$topBiz['name']."</a></p>							
									<div class=\"top_biz_rating\">
										<div class=\"rating\">
											<img class=\"stars_".$topBiz['grading']."\" width=\"83\" height=\"325\" src=\"./image/stars_map.png\"/>
										</div> 
										<em class=\"smaller\">".$topBiz['num_reviews']." ביקורות</em>
									</div>
									<p class=\"smaller\">קטגוריה:".$topBiz['category']."</p>
									<p>".$BizReview['review']."</p>
								</div>";
						echo $html;
					}
	
					$html = "<ul id=\"biz_list\" class=\"stripped\">";
					$i=2;
					while ($biz = mysqli_fetch_assoc($result_top_bizs)){
						$biz_url = getBizURL($biz_type, $biz['id']);
						$html .= "<li>
									<div class=\"biz_info\">
										$i. <a href=\"$biz_url\" id=\"top_biz_name_$i\" class=\"biz_name\">".$biz['name']."</a>
									</div>
									<div class=\"biz_rating\">
										<div class=\"rating-small\">
											<img class=\"stars_".$biz['grading']."\" width=\"83\" height=325 src=\"./image/stars_map.png\"/>
										</div> 
										<em class=\"smaller\">".$biz['num_reviews']." ביקורות</em>
									</div>
									<p class=\"smaller\">קטגוריה:".$biz['category']."</p>
								</li>";
							$i++;						}
					$html .= "</ul>";
					echo $html;
					
					if ($result_top_bizs->num_rows > 5) {
						$html = "<div style=\"text-align: left\">
									<a href=\"./all_biz_list.php?biz_type=$biz_type&city_id=$city_id".(($category) ? "&category=$category" : "")."\">לרשימה המלאה...</a>
								</div>";
						echo $html;
					}					
				} else {
					echo "<b>לא נמצאו מקומות.</b>";
					echo "<br></br>";					
				}
			?>
		</div>
		
		<div id="biz_map"">
			<h2>מפת <?php echo $city_name?></h2>
			<iframe src="http://maps.freemap.co.il/api/openlayers/?
						zoom=9&
						lat=<?php echo $topBiz['lat']?>&
						lon=<?php echo $topBiz['lon']?>&
						marker=true"
					width="900" height="350"		       	
			        scrolling="no"
			        marginwidth="10" marginheight="10" 
			        frameborder="1">
			 </iframe>
		</div>	
	</div>	

	<div id="sub_cat_lists" class="clearfix">
		<h2>אתרי קניות ב<?php echo $city_name?> לפי קטגוריות<h2>
		<ul class="stripped other_sub_cats">
			<li><a href="?city_id=<?php echo $city_id?>&category=Shopping Centers">מרכזי קניות</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Antiques">עתיקות</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Fashion">אופנה</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Electronics">אלקטרוניקה</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Jewelry">תכשיטים</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Flowers & Gifts">פרחים ומתנות</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Computers">מחשבים</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Home & Garden">בית וגינה</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Toy Stores">חנויות צעצועים</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Drugstores">בתי מרקחת</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Books&Music&Video">ספרים, מוזיקה ווידאו</a></li>
			<li><a href="?city_id=<?php echo $city_id?>&category=Office Equipment">ציוד משרדי</a></li>
		</ul>
	</div>	
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>