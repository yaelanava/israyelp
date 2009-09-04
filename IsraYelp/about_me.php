<?php 
session_start();

include './utils/functions.php';
require_once 'HTML_graph.php';

$mysqli = getMysqliConnection();

$user_id = $_SESSION['user_id'];
$external_user=$_GET['external_user'];

$same_user=0;
if($external_user-$user_id==0)
	$same_user=1;
$_SESSION['same_user']=$same_user;

//extracting the user information 
$user_query = "SELECT * FROM `users` WHERE id= $external_user";
$user_result = $mysqli->query($user_query);
$user = mysqli_fetch_assoc($user_result);
$city = $user['city'];
$register_since = $user['register_since'];
$email=$user['email'];
$username=$user['username'];

//ratings graph
for ($i=1; $i < 6; $i++){
	$query = "SELECT * FROM `reviews` WHERE user_id=$user_id and grading=$i";
	$result = $mysqli->query($query);
	$ratings[$i] = $result->num_rows;
}

$text = array("5","4","3","2","1");
$value = array($ratings[5],$ratings[4],$ratings[3],$ratings[2],$ratings[1]);

$bar = new HTML_graph();
$bar->set($text, $value, 200, 10, 0, "FFB164", "E8E8D0",0);
$bar->SetTitle("התפלגויות דירוגים");
$bar->SetBgColour("FFE4B5");
$bar->SetPercentage(false);
$bar->SetTextFontColor("000000");
$bar->SetTextFontSize("x-small");
$bar->SetNumberFontColor("CC0000");
$bar->SetNumberFontSize("x-small");
$bar->SetBorderStyle("outset");
$bar->SetBorderWidth("small");
$bar->SetBorderColor("E8E8D0");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>		
	<title> החשבון שלי | IsraYelp</title>
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
			
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "login.php";}?> > <?php if (session_is_registered('username')) {echo "התנתק";} else {echo "כנס";}?></A></LI>
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "about_me.php";} else{echo "signup.html?profile=1";}?> >החשבון שלי </A> | </LI>
		</ul>
</div>

<div id="bodyContainer">
	<div id="mainContent">
		<div id="user_header" class="ieSucks" align="right">
			<ul id="userTabs" >
					<?php 
						$html="
								<li class=\"selected\"><a href=\"./about_me.php?external_user=".$external_user."\">הפרופיל שלי</a></li>		 
								<li><a href=\"./my_reviews.php?external_user=".$external_user."\">ביקורות</a></li> ";
						if ($same_user){
							$html .= "<li><a href=\"./my_favs.php?external_user=".$external_user."\">מועדפים</a></li>";	
						}
						echo $html;
					?>
							
			</ul> 
		</div>
	</div>
			
	<div id="user_details_wrapper">
		<div id="inner_container" class="clearfix">	
			
				<table cellspacing="50" cellpadding="10" border="0" >
					<tr>
						<td valign="bottom">
							<h1><?php echo $username?></h1>						
							<div id="user_pic">
								<div class="clearStyles photoBox" >
									<img src="<? echo getUserPictureSrc($external_user, "./") ?>" height="100px" width="100px">
									<p id="photo_action_link">
					 					<a href="./upload_pic.php" class="small">ערוך תמונה</a>
					 				</p>
								</div>
							</div>	
						</td>
						<td>
							<ul class="stripped" id="user_stats">					
							<?php		
								//counting how much reviews this user wrote
								$review_query = "SELECT * FROM `test`.`reviews` WHERE user_id='$external_user'";
								$rev_result = $mysqli->query($review_query);
								$rev_count = $rev_result->num_rows;
								echo $rev_count. " ";
								$html = "<a href=\"./my_reviews.php?external_user=".$external_user."\">";
								if($same_user)
									$html .= "ביקורות שנכתבו על ידך </a>";
								else $html .= "ביקורות שנכתבו על ידי $username </a>";
								echo $html;	
							?>
						
							
							<br>
							<?php
								$fav_query = "SELECT * FROM `test`.`favorites` WHERE user_id='$external_user'";
								$fav_result = $mysqli->query($fav_query);
								$fav_count = $fav_result->num_rows;
								
								$html = "<a href=\"./my_favs.php?external_user=".$external_user."\">";
								if(!$same_user)
									$html .= "ל- $username $fav_count מקומות מועדפים</a>";
								else
								$html .= "מקומות מועדפים </a>";
								echo $html;
							?>		
							</ul>
						</td>
						<td>
							<span class="highlight2">מיקום:</span>
							<?php    					
			    				if (empty($city))
			    				{
			    					echo "<br/>";
			    					echo 'עיר מגוריך אינה ידועה';
			    				}
			    				else 
			    				{
			    					echo "<br/>";
			    					echo  $city;			    					
			    					echo "<br />";
			    				}			    								    				
								?>
							<p>					
								<span class="formLabel"><a href="edit_city.php">ערוך</a></span>
							</p>
						</td>
						<td>
							<span class="highlight2">האימייל שלך: </span>
							<?php	
								echo "<br/>";
								echo  $email;
								echo "<br/>"; 
							?>
							<p>					
								<span class="formLabel"><a href="edit_email.php">ערוך</a></span>
							</p>
						</td>
						<td>
							<span class="highlight2">רשום לאתר מ-</span>
							<?php
								echo "<br />";
								echo $register_since;
								echo "<br />";							
							?>
						</td>
					</tr>																
				</table>
				<?php echo $bar->horizontal();?>
		</div>
	</div>
</div>		


<?php echo getFooterHTMLCode()?>

</body>
</html>