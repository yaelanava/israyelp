<?php
session_start();

include './utils/functions.php';

$recipient_name = $_GET['recipient_name'];
$recipient_id = $_GET['recipient_id'];

$replay = isset($_GET['replay']) ? "replay&" : "";

if (isset($_POST['message']) && ('' != $_POST['message'])) {
	$mysqli = getMysqliConnection();
	
	$sender_id = $_SESSION['user_id'];
	
	$message = $_POST['message'];
	
	$query = "INSERT INTO `messages` (
				`id`,
				`sender_id`, 
				`recipient_id`, 
				`message`,
				`read`,
				`added`
			) VALUES (
				NULL, '$sender_id', '$recipient_id', '$message', '0', NULL
			);";
	
	$mysqli->query($query);
	
	if ($replay) {
		header("Location: ./user_messages.php");
	} else {
		header("Location: ./user_profile.php?user_id=$recipient_id");
	}
}

?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>שליחת הודעה למשתמש |IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body dir="rtl">

<?php echo getHeadHTMLCode()?>
<?php echo getNavHTMLCode()?>

<div id="bodyContainer_Centered">
	<h1> כתוב ל- <?php echo $recipient_name?> הודעה </h1>
	<form method="post" action="send_message_to_user.php?<?php echo $replay?>recipient_id=<?php echo $recipient_id?>&recipient_name=<?php echo $recipient_name?>">
	<br/>
		<table cellpadding="5" cellspacing="5">
			<tr>
				<td valign="top"><strong><br>תוכן ההודעה:</strong></td>
				<td><textarea cols="40" rows="8" class="form400" name="message"></textarea></td>
				<?php if (isset($_POST['message']) && ('' == $_POST['message'])) echo "<td style=\"color:red;\">* שדה חובה</td>"?>				
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="שלח"></td>						
		</table>
	</form>
</div>

<?php getFooterHTMLCode()?>

</body>
</html>