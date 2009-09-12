<?php
session_start();

include './utils/functions.php';

if (isset($_GET['logout'])){
	session_destroy();
	header("Location: main.php");
}

$error_msg = false;

if (isset($_POST['email']) && ('' != $_POST['email']) && 
	isset($_POST['password']) && ('' != $_POST['password'])) {

	$email = mysql_escape_string($_POST['email']);
	$password = $_POST['password'];
	
	$mysqli = getMysqliConnection();	
	
	$query = "SELECT * FROM `users` WHERE email='$email' and password=PASSWORD('$password')";
	$result = $mysqli->query($query);
	$count = $result->num_rows;	
	if ($count == 1){
		$user = mysqli_fetch_assoc($result);
		$_SESSION['user_id'] = $user['id'];	
		$_SESSION['username'] = $user['username'];
		$_SESSION['email'] = $email;
		
		if (isset($_GET['biz_id'])&&isset($_GET['biz_type'])){
			header("Location: login_success.php?biz_type=".$_GET['biz_type']."&biz_id=".$_GET['biz_id']);	
		} else {
			header("Location: login_success.php");	
		}
	} else {
		$error_msg = "דוא'ל או סיסמא לא נכונים.";
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
			
	<title>התחברות | IsraYelp</title>
</head>

<body>
<?php echo getHeadHTMLCode()?>


<div id="bodyContainer" dir="rtl">
	<div class="box" style="width:450px;margin-right:10px;float:right;margin-top:10px;text-align:right;border-left:#ccc 1px solid;margin-left:30px;">
			<H1>התחברות</H1>
			<form method="post" 
				action="login.php<?php 
						if (isset($_GET['biz_id'])&&isset($_GET['biz_type'])) 
						echo "?biz_type=".$_GET['biz_type']."&biz_id=".$_GET['biz_id']
						?>" >
				<p>אנא הכנס את הדוא"ל והסיסמא.<p/>
				<?php if ($error_msg) echo "<p style=\"color:red;\">$error_msg<p/>"?>
				<table  cellspacing="10" border="0">
						<tr>
							<td>דוא"ל:</td> 
							<td style="text-align:right;"><input name="email" size="35" <?php if (isset($_POST['email'])) echo "value=\"".$_POST['email']."\""?>></td>
							<?php if (isset($_POST['email']) && ('' == $_POST['email'])) echo "<td style=\"color:red;\">* שדה חובה</td>"?>
						</tr>
						<tr>
							<td>סיסמא:</td>
							<td> <input name="password" type="password" size="35" <?php if (isset($_POST['password'])) echo "value=\"".$_POST['password']."\""?>></td>
							<?php if (isset($_POST['password']) && ('' == $_POST['password'])) echo "<td style=\"color:red;\">* שדה חובה</td>"?>										
						</tr>
<!--						<tr>-->
<!--							<td></td>					-->
<!--							<td> <a href=forgot.php>שכחת את הסיסמא?</a></td>-->
<!--						</tr>-->
						<tr>
							<td></td>					
							<td style="text-align:left;"> <input type="submit" value="כניסה" /></td>
						</tr>
				</table>				
			</form>
		</div>
		
		<div class="box" style="text-align:center;">
				<H1 style="text-align:center">אין לך חשבון ?</H1>
				<p style="text-align:center">זה בסדר, אנחנו עדיין אוהבים אותך.</p>
				<br/>
				<p style="text-align:center"><a href="signup.php"><img src="image/signup.png" style="border:0px;"></a></p>
				<br/>
				<p style="text-align:center">IsraYelp היא דרך קלה ומהנה למצוא, לבקר ולדבר על כל מה שטוב ולא טוב באזוריך. <br> מדובר באנשים אמיתיים הנותנים ביקורת מהימנה על כל דבר, החל ממסעדות ועד למספרות...</p>
		</div>			
		<br style="clear:both;"/>
	</div>
</body>
</html>