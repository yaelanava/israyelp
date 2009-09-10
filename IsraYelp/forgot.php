<?php 
session_start();

include './utils/functions.php';

$error_msg = false;

$mysqli = getMysqliConnection();	

if (isset($_POST['email']) && ('' != $_POST['email'])) {
	$email = $_POST['email'];
	if (check_email($email)) {
		$query = "SELECT * FROM `users` WHERE email='$email'";
		$result = $mysqli->query($query);
		if ($result) {
			if ($result->num_rows == 1) {
				$user = mysqli_fetch_assoc($result);
				$message = "����! ������ ��� ���� IsraYelp ���: ".$user['password'];
				$message .= "\n";
				$message .= "<a href=\"http://cs.tau.ac.il/~yaelamar\">��� ���� IsraYelp</a>";
				if (mail($email, "����� �����", $message, "From: israyelp.co.il@gmail.com")){
					header("Location: forgot_success.php");
				} else {
					header("Location: forgot_failure.php");					
				}		
			} else {
				$error_msg = "���'� �� ����.";
			}
		} else {
				$error_msg = "���'� �� ����.";
		}
	} else {
		$error_msg = "���'� �� ����.";	
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
	<link rel="stylesheet" type="text/css" href="mystyle.css">  	
	<title>����� ����� | IsraYelp</title>
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
	<div class="box" id="forgotForm">
		<form method="post" action="forgot.php">
			<H1>���� �� �����?</H1>
			<br/>
			<p>��� �� ���"� �������� ��� ����� ����.</p>
			<p>��� ���� �� ���"� �� ������.</p>
			<table cellpadding="5" cellspacing="5" border="0">
				<tr> 
					<td>���"�:</td>
					<td><input name="email" size="40" <?php if (isset($_POST['email'])) echo "value=\"".$_POST['email']."\""?>></td>
					<?php if (isset($_POST['email']) && ('' == $_POST['email'])) echo "<td style=\"color:red;\">* ��� ����</td>"?>
				</tr>
				<tr> 
					<td></td>
					<td> <input type="submit" value="���� �����"/></td>
				</tr>
				<tr>
					<td></td>				
				 	<td><a href="./main.php">����� ������? ����! ���� ��� �����.</a></td>
				</tr>
			</table>
		</form>	
	</div>
</div>

</body>
</html>