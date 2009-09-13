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
if (isset($_SESSION['user_id']) && $user_id == $_SESSION['user_id']){
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

$text = array("5 ������","4 ������","3 ������","2 ������","1 ������");
$value = array($ratings[5],$ratings[4],$ratings[3],$ratings[2],$ratings[1]);

$bar = new HTML_graph();
$bar->set($text, $value, 150, 10, 0, "FFB164", "E8E8D0",0);
$bar->SetTitle("������� �������");
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

//counting how much new messages this user has
$count_new = getNewMessagesCount($user_id);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>		
	<title> ������ | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
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
				 	$html = "<li class=\"selected\"><a href=\"./user_profile.php?user_id=$user_id\">������</a></li>"; 
					$html .="<li><a href=\"./user_reviews.php?user_id=$user_id\">�������</a></li> ";
					if ($same_user){
						$html .= "<li><a href=\"./user_bookmarks.php\">�������</a></li>";	
						$html .= "<li><a href=\"./user_messages.php\">������ ".($count_new>0 ? "($count_new)" : "")."</a></li>";	
					}
					$html .= "<li><a href=\"./user_friends.php?user_id=$user_id\"\">�����</a></li>";																
					echo $html;
				?>							
			</ul> 	
		</div>
		<div id="user_header" align="right">
			<h1>������� �� <?php echo $username?></h1>			
		</div>
	<div id="user_details_wrapper">
		<div id="inner_container" class="clearfix">				
				<table cellspacing="30" cellpadding="1" border="0" >					
					<tr style="vertical-align:top">
						<td width=300>
							<div id="user_pic">
								<div class="clearStyles photoBox">
									<img src="<?php echo getUserPictureSrc($user_id);?>" height="150px" width="150px">																	
										<?php 
											if($same_user){
												$htmli = "<p id=\"photo_action_link\">
														<a href=\"./uploadUserPictureForm.php\" class=\"small\">���� �����</a>
							 							</p>";
											} else if (isset($_SESSION['user_id'])){
													$htmli = "<br>
															<p id=\"photo_action_link\">
																<a href=\"./addRemove_friend.php?friend_id=$user_id&friend_name=$username\" class=\"small\">���� ����</a>
																<br>
																<a href=\"./send_message_to_user.php?recipient_id=$user_id&recipient_name=$username\" class=\"small\">��� �����</a>
															</p>";
											}																							
											echo $htmli;											
										?>					 					
								</div>
							</div>
							<br></br>
							<span id="highlight2">�����: </span>
							<?php   
								echo (empty($city) ? "�� ����" : $city);						    				
			    				if ($same_user) {
			    					$html = "<p><span class=\"formLabel\">
			    								<a href=\"edit_city.php\">����</a></span>
			    							</p>";	
			    					echo $html;
			    				}		    								    				
								if ($same_user) {
									$html = "<br></br>
											<span id=\"highlight2\"> ����� ����� ���: </span>
											$email
			    							<p><span class=\"formLabel\">
			    								<a href=\"edit_email.php\">����</a></span>
			    							</p>";	
			    					echo $html;		    								    				
		    					}
							?>
							<br></br>
							<span id="highlight2">���� ���� �:</span>
							<?php echo $register_since?>							
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
									$html .= "������� ����� �� ��� </a>";
								else $html .= "������� ����� �� ��� $username </a>";
								echo $html;	

								echo "<br></br>";		
								echo $graph;
								
								if ($same_user){
									//counting how much bookmarks this user has
									echo "<br></br>";
									$fav_query = "SELECT * FROM `favorites` WHERE user_id='$user_id'";
									$fav_result = $mysqli->query($fav_query);
									$fav_count = $fav_result->num_rows;
									
									$html = "<a href=\"./user_bookmarks.php\">�� �� $fav_count ������ ������� </a>";
									echo $html;
									
									//counting how much friends this user has
									echo "<br></br>";
									$msg_query = "SELECT * FROM `messages` WHERE recipient_id='$user_id'";
									$msg_result = $mysqli->query($msg_query);
									$msg_count = $msg_result->num_rows;
									
									$html = "<a href=\"./user_messages.php\">�� �� $msg_count ������ ".($count_new>0 ? "($count_new �����)" : "")."</a>";
									echo $html;
								}
							?>		
							</ul>

						</td>
						
						<td>	
							<ul class="stripped" id="user_stats">																									
							<?php
								$friends_query = "SELECT * FROM `friends` WHERE user_id=$user_id";
								$friends_result = $mysqli->query($friends_query);
								$friends_count = $friends_result->num_rows;
								$html = "<a href=\"./user_friends.php?user_id=$user_id\"\" class=\"stripped\" id=\"user_stats\">";
								if($same_user) {
									if ($friends_count>0){
										$html .= "�� �� $friends_count ����� �������...</a>";
									}
									else {
										$html .= "�� �� $friends_count ����� </a>";
									}
								} else {
									if ($friends_count>0){
										$html .= "<span>�-$username ��</span> $friends_count �����  �������...</a>";			
									}
									else {
										$html .= "<span>�-$username ��</span> $friends_count ����� </a>";			
										
									}
								}
								echo $html;									
								if ($friends_count > 0) {
									$friends_query = "SELECT * FROM `friends` WHERE user_id=$user_id LIMIT 4";
									$friends_result = $mysqli->query($friends_query);
									$friends_count = $friends_result->num_rows;
									$html = "<table cellpadding=\"10\" cellspacing=\"1\" border=\"0\">";								
									while ($friends = mysqli_fetch_assoc($friends_result)){ 
										$friend_id = $friends['friend_id'];
										//getting friend name
										$friend_query = "SELECT * FROM `users` WHERE id=$friend_id";
										$friend_result = $mysqli->query($friend_query);
										$friend = mysqli_fetch_assoc($friend_result);
										$friend_name = $friend['username'];
										$html .= "<tr>
													<td>
														<p><b><a href=\"./user_profile.php?user_id=$friend_id\">$friend_name</a></b></p>
														<DIV class=\"clearStyles photoBox\">
															<A href=\"./user_profile.php?user_id=$friend_id\" rel=\"nofollow\"><IMG style=\"WIDTH: 40px; HEIGHT: 40px\" alt=\"������ �� $friend_name\" src=\"".getUserPictureSrc($friend_id)."\"></A>
														</div>
													</td>
												</tr>";
									}
									$html .= "</table>";									
									echo $html;		
								}									
							?>
							</ul>							
						</td>				
					</tr>	
				</table>																		
		</div>
	</div>
</div>		

<?php echo getFooterHTMLCode()?>

</body>
</html>