<?php

include './utils/functions.php';

$mysqli = getMysqliConnection();						

$password_error = false;
$mail_error = false;

if (isset($_POST['password']) && ('' != $_POST['password']) && 
	isset($_POST['confirmed_password']) && ('' != $_POST['confirmed_password'])) {

	$password = $_POST['password'];
	$confirmed_password = $_POST['confirmed_password'];
		
	if ($password !== $confirmed_password) {
		$password_error = "* סיסמאות לא תואמות";			
	}
}

if (isset($_POST['email']) && ('' != $_POST['email'])){
	$email = $_POST['email'];
	if (!check_email($email)) {
		$mail_error = "* דוא'ל לא תקין";
	} else {
		$query = "SELECT * FROM `users` WHERE email='$email'";
		$result = $mysqli->query($query);
		$count = $result->num_rows;			
		if ($count != 0) {
			$mail_error = "* דוא'ל כבר קיים במערכת";							
		}
	}			
}

if (!$password_error && !$mail_error &&
	isset($_POST['username']) && ('' != $_POST['username']) && 
	isset($_POST['email']) && ('' != $_POST['email']) &&
	isset($_POST['password']) && ('' != $_POST['password']) &&
	isset($_POST['confirmed_password']) && ('' != $_POST['confirmed_password'])) {
			
	//mysql_escape_string 
	$username = mysql_escape_string($_POST['username']);
	$email = mysql_escape_string($_POST['email']);
	$city = mysql_escape_string($_POST['city']);		
	$today = getdate();
	$register_since = getMonth($today['mon']).", ".$today['year'];
		
	$query = "INSERT INTO `users` (
				`id` ,
				`username` ,
				`email` ,
				`city` ,
				`register_since` ,
				`password`
				)
			VALUES (
				NULL , '$username', '$email', '$city', '$register_since', PASSWORD('$password')
			)";
			
	$result = $mysqli->query($query);
	if 	($result) {
		header("Location: signup_ssuccess.html");				
	} else {
		header("Location: signup_failure.html");				
	}
}	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">

	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css"> 
	
	<title>הרשמה | IsraYelp</title>

</head>

<body dir="rtl">
<div id="head">
		<div id="logo">
			<A href="./main.php">Yelp</A>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>
<div id="bodyContainer">
<H1>צור את הפרופיל שלך</H1>
<div class="box" id="signupForm">
	<form method="post" action="signup.php" >		
		<table cellpadding="5" cellspacing="5" border="0">
				<tr>
					<td>שם משתמש:</td> 
					<td><input name="username" size="40" <?php if (isset($_POST['username'])) echo "value=\"".$_POST['username']."\""?>></td>
					<?php if (isset($_POST['username']) && ('' == $_POST['username'])) echo "<td style=\"color:red;\">* שדה חובה</td>"?>
				</tr>
				<tr>
					<td>דוא"ל:</td>
					<td> <input name="email" size="40" <?php if (isset($_POST['email'])) echo "value=\"".$_POST['email']."\""?>></td>
					<?php 
						if ($mail_error) {
							echo "<td style=\"color:red;\">$mail_error<td/>";
						} else if (isset($_POST['email']) && ('' == $_POST['email'])) {
							echo "<td style=\"color:red;\">* שדה חובה</td>";
						}
					?>					
				</tr>
				<tr>
					<td>עיר:</td>
					<td> <input name="city"  size="40" <?php if (isset($_POST['city'])) echo "value=\"".$_POST['city']."\""?>></td>		
				</tr>
				<tr>
					<td>סיסמא:</td>
					<td> <input name="password" type="password" size="40" <?php if (isset($_POST['password'])) echo "value=\"".$_POST['password']."\""?>></td>
					<?php 
						if ($password_error) {
							echo "<td style=\"color:red;\">$password_error<td/>";
						} else if (isset($_POST['password']) && ('' == $_POST['password'])) {
							echo "<td style=\"color:red;\">* שדה חובה</td>";
						}
					?>
				</tr>
				<tr>
					<td>אשר סיסמא:</td>
					<td> <input name="confirmed_password" type="password" size="40" <?php if (isset($_POST['confirmed_password'])) echo "value=\"".$_POST['confirmed_password']."\""?>></td>
					<?php 
						if ($password_error) {
							echo "<td style=\"color:red;\">$password_error<td/>";
						} else if (isset($_POST['confirmed_password']) && ('' == $_POST['confirmed_password'])) {
							echo "<td style=\"color:red;\">* שדה חובה</td>";
						}
					?>
				</tr>
				<tr>
					<td></td>
					<td style="text-align:left;"> <br/> <input type="submit" value="הרשמה"></td>
				</tr>
				
		</table>		
	</form>
	<br style="clear:both;"/>
</div>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>
