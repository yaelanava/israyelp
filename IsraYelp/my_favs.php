<?php 
session_start();

include './utils/functions.php';

$mysqli = getMysqliConnection();

$user_id=$_SESSION['user_id'];											

//counting how much reviews this user wrote
$fav_query = "SELECT * FROM `test`.`favorites` WHERE user_id='$user_id'";
$fav_result = $mysqli->query($fav_query);
$fav_count = $fav_result->num_rows;

?>

<head>
	<title> המועדפים שלי | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
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
	<div id="mainContent">
		<div id="user_header" align="right">
			<ul id="userTabs" >
				<li><a href="./about_me.php">הפרופיל שלי</a></li> 
				<li><a href="./my_reviews.php">ביקורות</a></li> 
				<li class="selected"><a href="./my_favs.php">מועדפים</a></li>
			</ul> 
		</div>
	</div>
	
	<div id="user_details_wrapper">	
		<span><b> יש לך </b></span> <?php echo $fav_count;?> <span><b> מקומות מועדפים </b></span>
		<br/>
		<br/>	
		<?php 	
			while ($fav = mysqli_fetch_assoc($fav_result)){		
				$html = "<div id=\"my_review\">					
							<table cellpadding=\"10\" cellspacing=\"1\" border=\"0\" >
								<tr>
									<td><span><b><a href=".$fav['biz_url']."\">".$fav['biz_name']."</a></b></span></td> 
								</tr>
							</table>
						</div>";
				echo $html;				
			}
		?>			
	</div>
</div>

<div id="footer">	
	<div>		
		<ul id="aboutSite">
			<li>  <a href="http://localhost/IsraYelp/contact_us.html"   id="Zprofile_footer">עלינו</a></li>
			<li> | <a href="/faq" >שאלות נפוצות </a></li>
		</ul>
	</div>

	<div class="directory">
		<ul>
			<li class="first"><strong>מפת האתר</strong></li>
			<li> | <a href="../restaurants.php">תל-אביב</a></li>
			<li> | <a href="../../jerusalem/restaurants.php">ירושלים</a></li>
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
	