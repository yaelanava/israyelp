<?php 
session_start();

include './utils/functions.php';
require_once './utils/Html_graph.php';

$mysqli = getMysqliConnection();

if (isset($_GET['user_id'])){
	$user_id = $_GET['user_id'];
} else {
	$user_id = $_SESSION['user_id'];
}

$same_user = false;
if (isset($_SESSION['user_id']) && ($user_id == $_SESSION['user_id'])) {
	$same_user = true;
}

//extracting the user information 
$user_query = "SELECT * FROM `users` WHERE id=$user_id";
$user_result = $mysqli->query($user_query);
$user = mysqli_fetch_assoc($user_result);
$city = $user['city'];
$register_since = $user['register_since'];
$email = $user['email'];
$username = $user['username'];

if (isset($_SESSION['user_id']) && !$same_user) {
	$current_user_id = $_SESSION['user_id'];
	$user_query = "SELECT * FROM `users` WHERE id=$current_user_id";
	$user_result = $mysqli->query($user_query);
	$current_user = mysqli_fetch_assoc($user_result);
}

//ratings graph
for ($i=1; $i < 6; $i++){
	$query = "SELECT * FROM `reviews` WHERE user_id=$user_id and grading=$i";
	$result = $mysqli->query($query);
	$ratings[$i] = $result->num_rows;
}

$text = array("5 כוכבים","4 כוכבים","3 כוכבים","2 כוכבים","1 כוכבים");
$value = array($ratings[5],$ratings[4],$ratings[3],$ratings[2],$ratings[1]);

$bar = new HTML_graph();
$bar->set($text, $value, 150, 10, 0, "FFB164", "E8E8D0",0);
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

$graph = $bar->horizontal();
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

<body dir="rtl">

<?php echo getHeadHTMLCode()?>
<?php echo getNavHTMLCode()?>

<div id="bodyContainer">			
		<div id="userTabs">
			<ul> 
				<?php
					if($same_user)
						$html = "<li class=\"selected\"><a href=\"./user_profile.php\"\">פרופיל</a></li>";
					else 
					 	$html = "<li class=\"selected\"><a href=\"./user_profile.php?user_id=".$user_id."\">פרופיל</a></li>"; 
					$html .="<li><a href=\"./user_reviews.php?user_id=".$user_id."\">ביקורות</a></li> ";
					if ($same_user){
						$html .= "<li><a href=\"./user_bookmarks.php\">מועדפים</a></li>";	
						$html .= "<li><a href=\"./user_messages.php\">הודעות</a></li>";							
					}
					echo $html;
				?>							
			</ul> 	
		</div>
		<div id="user_header" align="right">
			<h1>הפרופיל של <?php echo $username?></h1>			
		</div>
	<div id="user_details_wrapper">
		<div id="inner_container" class="clearfix">				
				<table cellspacing="20" cellpadding="1" border="0">					
					<tr width=300 style="vertical-align:top">
						<td>
							<div id="user_pic">
								<div class="clearStyles photoBox">
									<img src="<? echo getUserPictureSrc($user_id)?>" height="150px" width="150px">
									
										<?php 
											if($same_user){
												$html = "<p id=\"photo_action_link\">
														<a href=\"./uploadUserPictureForm.php\" class=\"small\">ערוך תמונה</a>
							 							</p>";
											} else if (isset($_SESSION['user_id'])) {
												$html = "<p id=\"photo_action_link\">
															<a href=\"./add_as_friend.php?user_id=$user_id\" class=\"small\">הוסף כחבר</a>
															<br>
															<a href=\"./send_message_to_user.php?recipient_id=$user_id&recipient_name=$username\" class=\"small\">שלח הודעה</a>
														</p>";
											}
											echo $html;											
										?>					 					
								</div>
							</div>	
						</td>
						<td width=300>
							<ul class="stripped" id="user_stats">					
							<?php		
								//counting how much reviews this user wrote
								$review_query = "SELECT * FROM `reviews` WHERE user_id='$user_id'";
								$rev_result = $mysqli->query($review_query);
								$rev_count = $rev_result->num_rows;
								
								$html = "<a href=\"./user_reviews.php?user_id=".$user_id."\">";
								$html .= $rev_count. " ";
								if($same_user)
									$html .= "ביקורות נכתבו על ידך </a>";
								else $html .= "ביקורות נכתבו על ידי $username </a>";
								echo $html;	

								if ($same_user){
									echo "<br></br>";
									$fav_query = "SELECT * FROM `favorites` WHERE user_id='$user_id'";
									$fav_result = $mysqli->query($fav_query);
									$fav_count = $fav_result->num_rows;
									
									$html = "<a href=\"./user_bookmarks.php\">יש לך $fav_count מקומות מועדפים </a>";
									echo $html;
								}
							?>		
							</ul>	
							<br></br>						
							<?php echo $graph;?>							
						</td>				
					</tr>	
					
					<tr>
						<td>
							<span id="highlight2">מיקום: </span>
							<?php    					
			    				if (empty($city)) {
		    						echo 'לא ידוע';			    				
			    				} else {
			    					echo  $city;			    					
			    				}
			    				
			    				if($same_user){
			    					$html = "<p><span class=\"formLabel\">
			    							<a href=\"edit_city.php\">ערוך</a></span></p>";	
			    					echo $html;		    								    				
			    				}
							?>
						</td>
					</tr>
						
					<?php
						if($same_user){
							$html = "<tr>
							<td>
							<span id=\"highlight2\"> כתובת הדואר שלך: </span>";
							echo $html;	
							echo  $email;
							echo "<br/>"; 
			    			$html = "<p><span class=\"formLabel\">
			    					<a href=\"edit_email.php\">ערוך</a></span></p></td></tr>";	
			    			echo $html;		    								    				
		    			}
					?>
					<tr>
						<td>
							<span id="highlight2">רשום לאתר מ:</span>
							<?php echo $register_since;?>
						</td>
					</tr>															
				</table>
		</div>
	</div>
</div>		

<?php echo getFooterHTMLCode()?>

</body>
</html>