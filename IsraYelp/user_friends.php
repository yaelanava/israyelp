<?php 
session_start();

include './utils/functions.php';

$mysqli = getMysqliConnection();

if (isset($_GET['user_id'])){
	$user_id = $_GET['user_id'];
} else {
	$user_id = $_SESSION['user_id'];	
}

$same_user = false;
if (isset($_SESSION['user_id']) && ($user_id == $_SESSION['user_id'])){
	$same_user = true;
}

//getting user name
$user_query = "SELECT * FROM `users` WHERE id=$user_id";
$user_result = $mysqli->query($user_query);
$user = mysqli_fetch_assoc($user_result);
$username = $user['username'];

//counting how much confirmed friends this user has
$query_friends = "SELECT * FROM `friends` WHERE user_id=$user_id AND confirmed='1'";
$result_friends = $mysqli->query($query_friends);
$count_friends = $result_friends->num_rows;

//counting how much friend requests this user has
$query_friend_requests = "SELECT * FROM `friends` WHERE friend_id=$user_id AND confirmed='0'";
$result_friend_requests = $mysqli->query($query_friend_requests);
$count_friend_requests = $result_friend_requests->num_rows;

//counting how much new messages this user has
$count_new = getNewMessagesCount($user_id);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> החברים שלי | IsraYelp</title>
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
		<div id="userTabs" >
			<ul>	
				<?php
					$html = "<li><a href=\"./user_profile.php?user_id=$user_id\">פרופיל</a></li>"; 
					$html .= "<li><a href=\"./user_reviews.php?user_id=$user_id\">ביקורות</a></li>";
					if ($same_user){
						$html .= "<li><a href=\"./user_bookmarks.php\">מועדפים</a></li>";	
						$html .= "<li><a href=\"./user_messages.php\">הודעות ".($count_new>0 ? "($count_new)" : "")."</a></li>";	
					}
					$html .= "<li class=\"selected\"><a href=\"./user_friends.php?user_id=$user_id\"\">חברים</a></li>";																
					echo $html;
				?>										
			</ul> 
		</div>
		<div id="user_header" align="right">
			<h1>הפרופיל של <?php echo $username?></h1>			
		</div>
	<div id="user_details_wrapper">		
		<?php 
			if($same_user){
					$html = "<br/>
							<H1>יש לך $count_friends חברים</H1>
							<br/>";
			} else {
					$html = "<br/>
							<H1><span>ל-$username יש</span> $count_friends חברים</H1>
							<br/>";
			}
			echo $html;
			
			if ($same_user and $count_friend_requests>0){
				//display requests
				$html = "<br/>
						<b>	יש לך $count_friend_requests בקשות לחברות:</b>
						<br/>";
				while ($friend_request = mysqli_fetch_assoc($result_friend_requests)){	
					$friend_request_id = $friend_request['user_id'];
					
					$query_friend = "SELECT * FROM `users` WHERE id=$friend_request_id";
					$result_friend = $mysqli->query($query_friend);
					$friend = mysqli_fetch_assoc($result_friend);	
					$friend_name = $friend['username'];
					
					$html .= "<div id=\"my_review\">					
								<table cellpadding=\"10\" cellspacing=\"1\" border=\"0\" >
									<tr>
										<td>
											<span><b><a href=\"./user_profile.php?user_id=$friend_request_id\">$friend_name</a></b></span>
											<DIV class=\"clearStyles photoBox\">
												<A href=\"./user_profile.php?user_id=\"$friend_request_id\" rel=\"nofollow\"><IMG style=\"WIDTH: 40px; HEIGHT: 40px\" alt=\"התמונה של $friend_name\" src=\"".getUserPictureSrc($friend_request_id)."\"></A>
											</div>			
										</td>
									</tr>
								</table>";
					$html .= "<div style=\"padding-right:10px;\">
								<a style=\"color:red\" href=\"./addRemove_friend.php?confirm&friend_id=$friend_request_id\">מאשר</a>
								<a style=\"color:red\" href=\"./addRemove_friend.php?remove&friend_id=$friend_request_id\">לא מאשר</a>
							</div>";
					$html .="</div>";
				}
				echo $html;						
			}
			
			//display freinds
			if ($count_friend_requests>0) {
				$html = "<br></br>
						<br/>
						<b>והבאמת חברים...</b>
						<br/>";
			} else {
				$html = "";
			}
			while ($friend = mysqli_fetch_assoc($result_friends)){	
				$friend_id = $friend['friend_id'];
				
				$query_friend = "SELECT * FROM `users` WHERE id=$friend_id";
				$result_friend = $mysqli->query($query_friend);
				$friend = mysqli_fetch_assoc($result_friend);	
				$friend_name = $friend['username'];
				
				$html .= "<div id=\"my_review\">					
							<table cellpadding=\"10\" cellspacing=\"1\" border=\"0\" >
								<tr>
									<td>
										<span><b><a href=\"./user_profile.php?user_id=$friend_id\">$friend_name</a></b></span>
										<DIV class=\"clearStyles photoBox\">
											<A href=\"./user_profile.php?user_id=\"$friend_id\" rel=\"nofollow\"><IMG style=\"WIDTH: 40px; HEIGHT: 40px\" alt=\"התמונה של $friend_name\" src=\"".getUserPictureSrc($friend_id)."\"></A>
										</div>			
									</td>
								</tr>
							</table>";
				if ($same_user) {
					$html .= "<div style=\"padding-right:10px;\">
								<a href=\"./addRemove_friend.php?remove&friend_id=$friend_id\"><img src=\"./image/delete.png\" height=\"8px\" width=\"8px\"></a>
								<a style=\"color:red\" href=\"./addRemove_friend.php?remove&friend_id=$friend_id\">הסר חבר</a>
							</div>";
				}
				$html .="</div>";
			}
			echo $html;			
		?>			
	</div>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>