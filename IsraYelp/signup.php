<?php

include './utils/functions.php';

$error_msg = 0;

if (isset($_POST['username']) && ('' != $_POST['username']) && 
	isset($_POST['email']) && ('' != $_POST['email']) &&
	isset($_POST['password']) && ('' != $_POST['password']) &&
	isset($_POST['confirmed_password']) && ('' != $_POST['confirmed_password'])) {
	
	if(check_email($_POST['email'])){		
		$username = mysql_real_escape_string($_POST['username']);
		//mysql_escape_string 
		$email = $_POST['email'];
		$city = mysql_real_escape_string($_POST['city']);
		$password = $_POST['password'];
		$confirmed_password = $_POST['confirmed_password'];

		if ($password !== $confirmed_password) {
			$error_msg = ".�������� �� ������";		
		} else {
			$mysqli = getMysqliConnection();						
			$query = "SELECT * FROM `users` WHERE email='$email'";
			$result = $mysqli->query($query);
			$count = $result->num_rows;			
			if ($count != 0) {
				header("Location: signup_user_exists.php");	
				die(0);
			}
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
	} else { 
		$error_msg="���'� �� ����.";
	}	
} 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">

	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css"> 
	
	<title>����� | IsraYelp</title>

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
<H1>��� �� ������� ���</H1>
<div class="box" id="signupForm">
	<form method="post" action="signup.php" >
		<?php if ($error_msg) echo "<p style=\"color:red;\">$error_msg<p/>"?>
		<table cellpadding="5" cellspacing="5" border="0">
				<tr>
					<td>* �� �����:</td> 
					<td><input name="username" size="40"></td>
					<?php if (isset($_POST['username']) && ('' == $_POST['username'])) echo "<td style=\"color:red;\">* ��� ����</td>"?>
				</tr>
				<tr>
					<td>* ���"�:</td>
					<td> <input name="email" size="40"></td>
					<?php if (isset($_POST['email']) && ('' == $_POST['email'])) echo "<td style=\"color:red;\">* ��� ����</td>"?>
				</tr>
				<tr>
					<td>���:</td>
					<td> <input name="city"  size="40"></td>					
				</tr>
				<tr>
					<td>* �����:</td>
					<td> <input name="password" type="password" size="40"></td>
					<?php if (isset($_POST['password']) && ('' == $_POST['password'])) echo "<td style=\"color:red;\">* ��� ����</td>"?>			
				</tr>
				<tr>
					<td>* ��� �����:</td>
					<td> <input name="confirmed_password" type="password" size="40"></td>
					<?php if (isset($_POST['confirmed_password']) && ('' == $_POST['confirmed_password'])) echo "<td style=\"color:red;\">* ��� ����</td>"?>					
				</tr>
				<tr>
					<td><em class="smaller grey">* ���� ���� </em></td>				
				</tr>
				<tr>
					<td style="text-align:right;"> <input type="submit" value="�����"></td>
					<td></td>
				</tr>
				
		</table>		
	</form>
	<br style="clear:both;"/>
</div>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>
