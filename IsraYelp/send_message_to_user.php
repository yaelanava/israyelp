<?php
session_start();

include './utils/functions.php';

$recipient_name = $_GET['recipient_name'];
$recipient_id = $_GET['recipient_id'];

if (isset($_POST['message']) && ('' != $_POST['message'])) {
	$mysqli = getMysqliConnection();
	
	$sender_id = $_SESSION['user_id'];
	
	$message = $_POST['message'];
	
	$query = "INSERT INTO `messages` (
				`sender_id`, 
				`recipient_id`, 
				`message`
			) VALUES (
				'$sender_id', '$recipient_id', '$message'
			);";
	$mysqli->query($query);
	header("Location: ./user_profile.php?user_id=$recipient_id");
}

?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>����� ����� ������ |IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body dir="rtl">
<?php echo getHeadHTMLCode()?>

<div id="bodyContainer_Centered">
	<h1> ���� �- <?php echo $recipient_name?> ����� </h1>
	<form method="post" action="send_message_to_user.php?recipient_id=<?php echo $recipient_id?>&recipient_name=<?php echo $recipient_name?>">
	<br/>
		<table cellpadding="5" cellspacing="5">
			<tr>
				<td valign="top"><strong><br>���� ������:</strong></td>
				<td><textarea cols="40" rows="8" class="form400" name="message"></textarea></td>
				<?php if (isset($_POST['message']) && ('' == $_POST['message'])) echo "<td style=\"color:red;\">* ��� ����</td>"?>				
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="���"></td>						
		</table>
	</form>
</div>

</body>
</html>