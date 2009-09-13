<?php 
session_start();

include './utils/functions.php';

$mysqli = getMysqliConnection();

$user_id = $_SESSION['user_id'];

//getting user name
$user_query = "SELECT * FROM `users` WHERE id=$user_id";
$user_result = $mysqli->query($user_query);
$user = mysqli_fetch_assoc($user_result);
$username = $user['username'];

//counting how much messages this user has
$query = "SELECT * FROM `messages` WHERE recipient_id=$user_id ORDER BY added DESC";
$result = $mysqli->query($query);
$count = $result->num_rows;

//counting how much new messages this user has
$count_new = getNewMessagesCount($user_id);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> ההודעות שלי | IsraYelp</title>
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
				<li><a href="./user_profile.php">פרופיל</a></li>		 
				<li><a href="./user_reviews.php">ביקורות</a></li>
				<li><a href="./user_bookmarks.php">מועדפים</a></li>
				<li class="selected"><a href="./user_messages.php">הודעות <?php echo ($count_new>0 ? "($count_new)" : "")?></a></li>										
				<li><a href="./user_friends.php">חברים</a></li>										
			</ul> 
		</div>
		<div id="user_header" align="right">
			<h1>הפרופיל של <?php echo $username?></h1>			
		</div>
	<div id="user_details_wrapper">		
		<?php 
			$html = "<br/>
					<H1>יש לך $count הודעות ($count_new חדשות)</H1>
					<br/>";	
			echo $html;
			while ($msg = mysqli_fetch_assoc($result)){	
				$msg_id =  $msg['id'];
				$sender_id = $msg['sender_id'];
				
				$query_sender = "SELECT * FROM `users` WHERE id=$sender_id";
				$result_sender = $mysqli->query($query_sender);
				$sender = mysqli_fetch_assoc($result_sender);	
				$sender_name = $sender['username'];
				
				$html = "<div id=\"my_review\">					
							<table cellpadding=\"10\" cellspacing=\"1\" border=\"0\" >
								<tr>
									<td>
										<span><b><a href=\"./user_profile.php?user_id=$sender_id\">$sender_name</a></b></span>
										<DIV class=\"clearStyles photoBox\">
											<A href=\"./user_profile.php?user_id=\"$sender_id\" rel=\"nofollow\"><IMG style=\"WIDTH: 40px; HEIGHT: 40px\" alt=\"התמונה של $sender_name\" src=\"".getUserPictureSrc($sender_id)."\"></A>
										</div>			
									</td>
									 <td>".($msg['read']==0 ? "<b>" : "").$msg['message'].($msg['read']==0 ? "</b>" : "")."
								</tr>
							</table>
							<div id=\"msg_actions\">
								<A id=\"msg_action\" href=\"./mark_as_readUnread.php?read&msg_id=$msg_id\"><img src=\"./image/read.png\" height=\"10px\" width=\"10px\" alt=\"סמן כנקרא\"></A>
								<A id=\"msg_action\" href=\"./mark_as_readUnread.php?msg_id=$msg_id\"><img src=\"./image/unread.png\" height=\"10px\" width=\"10px\" alt=\"סמן כלא נקרא\"></A>
								<A id=\"msg_action\" href=\"./send_message_to_user.php?replay&recipient_id=$sender_id&recipient_name=$sender_name\"><img src=\"./image/replay.png\" height=\"10px\" width=\"10px\" alt=\"השב\"></A>
								<A id=\"msg_action\" href=\"./delete_message.php?msg_id=$msg_id\"><img src=\"./image/delete.png\" height=\"8px\" width=\"8px\" alt=\"מחק\"></A>
								</div>
						</div>";
				echo $html;				
			}
		?>			
	</div>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>