<?php

include './utils/functions.php';
$error_msg=0;

if (isset($_POST['username']) && ('' != $_POST['username']) && 
	isset($_POST['email']) && ('' != $_POST['email']) &&
	isset($_POST['password']) && ('' != $_POST['password']) &&
	isset($_POST['confirmed_password']) && ('' != $_POST['confirmed_password'])) {
	if(check_email($_POST['email'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$city = $_POST['city'];
		$password = $_POST['password'];
		$confirmed_password = $_POST['confirmed_password'];

		if ($password !== $confirmed_password) {
			$error_msg = "הסיסמאות לא תואמות";		
		} else {
			$mysqli = getMysqliConnection();						
			$query = "SELECT * FROM `test`.`users` WHERE email='$email'";
			$result = $mysqli->query($query);
			$count = $result->num_rows;
			
			if ($count != 0) {
				header("location:signup_user_exists.php");	
				die(0);
			}
			$today = getdate();
			$month_added=$today['mon'];
			
			if ($month_added==1)
				$month_added='ינואר';
			elseif ($month_added==2)
				$month_added='פברואר';
			elseif ($month_added==3)
				$month_added='מרץ';
			elseif ($month_added==4)
				$month_added='אפריל';
			elseif ($month_added==5)
				$month_added='מאי';
			elseif ($month_added==6)
				$month_added='יוני';
			elseif ($month_added==7)
				$month_added='יולי';
			elseif ($month_added==8)
				$month_added='אוגוסט';
			elseif ($month_added==9)
				$month_added='ספטמבר';
			elseif ($month_added==10)
				$month_added='אוקטובר';
			elseif ($month_added==11)
				$month_added='נובמבר';		
			else $month_added='דצמבר';
			
			$year_added=$today['year'];
			$query="INSERT INTO `test`.`users` (
						`id` ,
						`username` ,
						`email` ,
						`city` ,
						`year_added` ,
						`month_added` ,
						`password`
						)
						VALUES (
						NULL , '$username', '$email', '$city', '$year_added', '$month_added', PASSWORD( '$password' )
						)";
					
					
			$result = $mysqli->query($query);
			if 	($result) {
				header("Location: signup_ssuccess.html");				
			} else {
				header("Location: signup_failure.html");				
			}
		}
	}
		//createUser();
	else 
		$error_msg="האימייל שהכנסת אינו תקין, נסה שוב";	
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
		<?php if ($error_msg) echo "<p style=\"color:red;\">$error_msg<p/>"?>
		<table cellpadding="5" cellspacing="5" border="0">
				<tr>
					<td>* שם משתמש:</td> 
					<td><input name="username" size="40"></td>
					<?php if (isset($_POST['username']) && ('' == $_POST['username'])) echo "<td style=\"color:red;\">* שדה חובה</td>"?>
				</tr>
				<tr>
					<td>* דוא"ל:</td>
					<td> <input name="email" size="40"></td>
					<?php if (isset($_POST['email']) && ('' == $_POST['email'])) echo "<td style=\"color:red;\">* שדה חובה</td>"?>
				</tr>
				<tr>
					<td>עיר:</td>
					<td> <input name="city"  size="40"></td>					
				</tr>
				<tr>
					<td>* סיסמא:</td>
					<td> <input name="password" type="password" size="40"></td>
					<?php if (isset($_POST['password']) && ('' == $_POST['password'])) echo "<td style=\"color:red;\">* שדה חובה</td>"?>			
				</tr>
				<tr>
					<td>* אשר סיסמא:</td>
					<td> <input name="confirmed_password" type="password" size="40"></td>
					<?php if (isset($_POST['confirmed_password']) && ('' == $_POST['confirmed_password'])) echo "<td style=\"color:red;\">* שדה חובה</td>"?>					
				</tr>
				<tr>
					<td><em class="smaller grey">* שדות חובה </em></td>				
				</tr>
				<tr>
					<td style="text-align:right;"> <input type="submit" value="הרשמה"></td>
					<td></td>
				</tr>
				
		</table>		
	</form>
	<br style="clear:both;"/>
</div>
</div>

<div id="footer">
	
	<div>		
				<ul id="aboutSite">
					<li>  <a href="/signup"   id="Zprofile_footer">עלינו</a></li>
					<li> | <a href="/about">החשבון שלי</a></li>
					<li> | <a href="/faq" >שאלות נפוצות </a></li>
				</ul>
	</div>

	<div class="directory">
		<ul>
			<li class="first"><strong>מפת האתר</strong></li>
			<li> | <a href="../restaurants.php">תל-אביב</a></li>
			<li> | <a href="../../jerusalem/restaurants.php">ירושלים</a></li>
			<li> | <a href="/boston">חיפה</a></li>
			<li> | <a href="/chicago">באר שבע</a></li>
			<li> | <a href="/dallas">הרצליה</a></li>
			<li> | <a href="/denver">אשדוד</a></li>
			<li> | <a href="/locations">ערים נוספות</a></li>
		</ul>
	</div>
	
	<div>
		<p> זכויות יוצרים </p>
	</div>
</div>
</body>
</html>
