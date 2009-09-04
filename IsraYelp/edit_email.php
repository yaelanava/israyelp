<?php 
	session_start();
	include './utils/functions.php';
	
	$error_msg = 0;
	
	if (isset($_POST['new_email']) && ('' != $_POST['new_email'])) {
		$new_email=mysql_real_escape_string($_POST['new_email']);
		if(check_email($new_email))
		{
			$id = $_SESSION['user_id'];
		
		$mysqli = getMysqliConnection();	
		$update_query="UPDATE `users` SET `email` = '$new_email' WHERE `users`.`id` =$id LIMIT 1 ;";
		$mysqli->query($update_query);
		header("location:edit_successes.php");	
		}
		else
			$error_msg="������� ������ ���� ����, ��� ���";
		
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
			
	<title>����� ������ | IsraYelp</title>

</head>
<body>
<div id="head">
		<div id="logo">
			<A href="./main.php">Yelp</A>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>
<div id="bodyContainer" dir="rtl">
	<div class="box" >
			
			<form method="post" action="edit_email.php" >
				<table  border="0" align="center">
						<tr>						
							<td>
								<H1 >����� �������</H1>
								<?php if ($error_msg) echo "<p style=\"color:red;\">$error_msg<p/>"?>
							</td> 
						</tr>
						<tr>
							<td>��� ���� �� <br>
							����� ������� ��������:
							</td> 
							<td><input name="new_email" size="35"></td>
							<?php if (isset($_POST['new_email']) && ('' == $_POST['new_email'])) echo "<td style=\"color:red;\">* ��� ����</td>"?>
						</tr>
						<tr>
							<td></td>
							<td style="text-align:right;"> <input type="submit" value="����" /></td>
												
						</tr>
						<tr>
							<td></td>
							<td>
								<br>
								<a href="./about_me.php"   id="Zprofile_footer">������? ���� ������ ���.</a>
							</td>
												
						</tr>
				</table>
			</form>
		</div>
	</div> 
</body>
</html>