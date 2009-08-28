<?php session_start();

include '../utils/functions.php';

$city_id = $_GET['city_id'];
$city_name = getCityName($city_id);

$mysqli = getMysqliConnection();

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
			
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "../login.html";}?> > <?php if (session_is_registered('username')) {echo "התנתק";} else {echo "כנס";}?></A></LI>
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
		
			<div id="top_biz">
					<div class="clearStyles bizPhotoBox">
							<a  href="/biz/bakery-mexico-san-jose#hrid:rwiHbJYf8uQWOnSglosPgg"><img src="http://static.px.yelp.com/bphoto/CTZh-CDPji271JkSYxYuBA/ms" style="" alt="Bakery Mexico"></a>
					</div>
		
					<p class="biz_info">1. <a href="restaurant.php?rest_id=1" id="top_biz_name_2" title="lukas"> לוקאס </a> </p>
					<div class="top_biz_rating">
						<div class="rating"><img class="stars_4_half" width="83" height="325" title="4.5 star rating" alt="4.5 star rating" src="../image/stars_map.png"/></div> <em class="smaller">83 ביקורות</em>
					</div>
					<p class="smaller">קטגוריה: <a href="./take-away.php">Take Away </a>, <a href="./bar-rest.php"> בר-מסעדה</a>, <a href="./bistro.php">ביסטרו</a>, <a href="./events.php">אירועים</a> </p>
		
					<p>"רבותי, חיפשתי מסעדה טובה עם סטייקים איכותיים, וכשראיתי את המחיר בלוקאס, חשבתי פעמיים אם ללכת כי זה נראה חשוד. אבל אנשים, קיבלתי שם את אחד הסטייקים הטובים שאכלתי אי פעם (ואכלתי בהרבה מסעדות שף בשריות). עשוי במידת צלייה מושלמת, בשר איכותי, מחיר מפתיע (600 גר' ב-90 ש"ח אל מול 500 גר' במחיר ממוצע של 120 ש"ח במקומות אחרים). בת זוגתי נהנתה מאוד ממנת כבד העוף שלהם. בקיצור, ממליץ בחום, ללכת וליהנות."</p>
			</div>
		
			<ul id="biz_list" class="stripped">
				<li>
					<div class="biz_info">
						2. <a href="/biz/international-food-bazaar-san-jose#hrid:xaAwZx0xd8eOXKIzWOTDIg" id="top_biz_name_2" class="biz_name" title="International Food Bazaar">בוקצ'ו</a>
					</div>
					<div class="biz_rating">
						<div class="rating-small"><img class="stars_4_half" width="83" height="325" title="4.5 star rating" alt="4.5 star rating" src="../image/stars_map.png"/></div> <em class="smaller">42 ביקורות</em>
					</div>
						<p class="smaller">קטגוריה: <a href="./meat.php">בשרים</a>, <a href="./events.php">אירועים</a>, <a href="./italian.php">איטלקי</a></p>
				</li>
				<li>
					<div class="biz_info">
						3. <a href="/biz/gulzaar-halaal-restaurant-and-bakery-san-jose#hrid:ZKvRBQVsZ4H6MQ7vcnYt9g" id="top_biz_name_3" class="biz_name" title="Gulzaar Halaal Restaurant &amp; Bakery">ברונו</a>
					</div>
					<div class="biz_rating">
						<div class="rating-small"><img class="stars_4_half" width="83" height="325" title="4.5 star rating" alt="4.5 star rating" src="../image/stars_map.png"/></div> <em class="smaller">120 ביקורות</em>
					</div>
						<p class="smaller">קטגוריה: <a href="./mideastern.php">ים תיכוני</a>, <a href="./gurme.php">גורמה</a>, <a href="./meat.php">בשרים</a>, <a href="./events.php">אירועים</a> 
						</p>
				</li>
				<li>
					<div class="biz_info">
						4. <a href="/biz/penguin-froyo-san-jose#hrid:Bzvz0k_z_KEeca0itRxY-w" id="top_biz_name_4" class="biz_name" title="Penguin Froyo">טורקיז</a>
					</div>
					<div class="biz_rating">
						<div class="rating-small"><img class="stars_4_half" width="83" height="325" title="4.5 star rating" alt="4.5 star rating" src="http://static.px.yelp.com/static/20090507a/i/new/ico/stars/stars_map.png"/></div> <em class="smaller">189 ביקורות</em>
					</div>
						<p class="smaller">קטגוריה: <a href="./fish.php">דגים</a>, <a href="./seafood.php">מאכלי ים</a></p> 
				</li>
				<li>
					<div class="biz_info">
						5. <a href="/biz/rose-donuts-and-cafe-san-jose-3#hrid:YRCSpDpA__N76eaWH9_o_A" id="top_biz_name_5" class="biz_name" title="Rose Donuts &amp; Cafe">גשן</a>
					</div>
					<div class="biz_rating">
						<div class="rating-small"><img class="stars_4_half" width="83" height="325" title="4.5 star rating" alt="4.5 star rating" src="../image/stars_map.png"/></div> <em class="smaller">93 ביקורות</em>
					</div>
						<p class="smaller">קטגוריה: <a href="./meat.php">בשרים </a>, <a href="./bar-rest.php"> בר-מסעדה</a>, <a href="./events.php">אירועים</a>, <a href="./chefrest.php">מסעדת-שף</a></p>
				</li>
				<li id="top_more_link"><a href="/search?find_loc=San+Jose%2C+CA&amp;cflt=restaurants"><strong>עוד מסעדות בתל-אביב &raquo;</strong></a></li>
			</ul>
			
		</div>
		<div id="biz_map" style="float:right";>
		<h2>מפת תל-אביב </h2>
		    <iframe src="http://maps.freemap.co.il/api/openlayers/?zoom=6&lat=32.06711&lon=34.77177"
		        width="600px" height="400px"
		        scrolling="no"
		        marginwidth="0" marginheight="0" 
		        frameborder="1">
      		</iframe>
		</div>
	</div>
	
	<div id="section_content" class="clearfix">
		<div id="main_column">
			<div id="sub_cat_lists" class="clearfix">
				<h2>מסעדות תל-אביב לפי קטגוריות<h2>
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

