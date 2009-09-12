<?php 

session_start();

include './utils/functions.php';

$error_msg = false;

if (isset($_POST['email']) && ('' != $_POST['email'])) {
	if (check_email($_POST['email'])) {
		$mysqli = getMysqliConnection();
	
		$username = $_SESSION['username'];
		$email = $_SESSION['email'];
		
		$message = $_POST['message'];
		$message .= "\n\n".(isset($_POST['note']) ? $_POST['note'] : "");
		
		$url = $_POST['url'];
				
		mail($_POST['email'], "$username ממליצ/ה לך לבקר ב-IsraYelp", $message, "From: $email");
		header("Location: ".$url);
	} else {
		$error_msg = "דוא'ל לא תקין";
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>אתר ביקורות הגולשים - IsraYelp </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="israyelp,Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body dir="rtl">

<?php echo getHeadHTMLCode()?>
<?php echo getNavHTMLCode()?>

<div id="bodyContainer">
	<H1>שלח לחבר</H1>
		<div>
			<p> מלא את הפרטים הבאים כדי לשלוח את ההודעה: </p>
			<br/>
			<form method="post" action="send_to_friend.php">
				<table align="right" cellpadding="5">
					<tr valign="top">
						<td><p>דוא'ל החבר:</p></td>
						<td>
							<input type="text" name="email" size="50" <?php if (isset($_POST['email'])) echo "value=\"".$_POST['email']."\""?>>
							<br></br>
						</td>
						<?php 
							if ($error_msg) {
								echo "<td style=\"color:red;\">$error_msg<td/>";
							} else if (isset($_POST['email']) && ('' == $_POST['email'])) {
								echo "<td style=\"color:red;\">* שדה חובה</td>";
							}
						?>							
					</tr>					
					<tr valign="top">
						<td width=80><p>תוכן ההודעה:</p></td>
						<?php 
							$url = $_SERVER['HTTP_REFERER'];
							$message = "היי!";
							$message .= " \nאני ממליצ/ה לך להיכנס לאתר IsraYelp ולצפות בדף של המקום הבא:";  
							$message .= "\n";
							$message .= $url;
						?>
						<td width=350><?php echo $message?><br></br></td>											
					</tr>
					<tr valign="top">
						<td><p>תוכן נוסף:</p></td>
						<td><textarea id="STF_Note" name="note" rows="5" cols="40" class="form400"></textarea></td>					
					</tr>
					<tr>				
						<td>&nbsp;</td>
						<td><input type="submit" value="שלח"></td>
					</tr>
				</table>
				<input type="hidden" name="url" value="<?php echo $url?>">
				<input type="hidden" name="message" value="<?php echo $message?>">
			</form>
		</div>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>