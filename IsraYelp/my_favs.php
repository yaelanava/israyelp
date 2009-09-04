<?php 
session_start();

include './utils/functions.php';

$mysqli = getMysqliConnection();

$user_id=$_SESSION['user_id'];

$external_user=$_GET['external_user'];
$same_user=0;
if($external_user-$user_id==0)
	$same_user=1;

//counting how much reviews this user wrote
$fav_query = "SELECT * FROM `favorites` WHERE user_id='$user_id'";
$fav_result = $mysqli->query($fav_query);
$fav_count = $fav_result->num_rows;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> המועדפים שלי | IsraYelp</title>
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
			
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "login.php";}?> > <?php if (session_is_registered('username')) {echo "התנתק";} else {echo "כנס";}?></A></LI>
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "about_me.php";} else{echo "signup.html?profile=1";}?> >החשבון שלי </A> | </LI>
		</ul>
</div>

<div id="bodyContainer">
		<div id="user_header" align="right">
			<ul id="userTabs" >
				
				<?php 
					$html="
							<li><a href=\"./about_me.php?external_user=".$external_user."\">הפרופיל שלי</a></li>		 
							<li><a href=\"./my_reviews.php?external_user=".$external_user."\">ביקורות</a></li> ";
					if ($same_user){
						$html .= "<li class=\"selected\"><a href=\"./my_favs.php?external_user=".$external_user."\">מועדפים</a></li>";
					}
					echo $html;
				?>
			</ul> 
		</div>
	
	<div id="user_details_wrapper">		
		<?php 
			$html = "<br/>
					<H1>יש לך $fav_count מקומות מועדפים</H1>
					<br/>";	
			echo $html;
			while ($fav = mysqli_fetch_assoc($fav_result)){		
				$html = "<div id=\"my_review\">					
							<table cellpadding=\"10\" cellspacing=\"1\" border=\"0\" >
								<tr>
									<td><span><b><a href=".$fav['biz_url'].">".$fav['biz_name']."</a></b></span></td> 
								</tr>
							</table>
						</div>";
				/*$biz_address = $fav['address'];
				$html .= "<li><span><b><a href=".$url.">".$fav['biz_name']."</a></b></span>".", ".$biz_address."</li>" ;
		*/
				echo $html;				
			}
		?>			
	</div>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>