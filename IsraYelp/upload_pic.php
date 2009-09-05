<?php session_start();
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title> העלאת תמונה </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body class= "us" id="IsraYelp_main_body" dir="rtl">

<div id="head">
		<div id="logo">
			<A href="./main.php"></A>
		</div>
		<div id="register">
			<p><?php if (session_is_registered('username')) print("אתה מחובר כ-" . $_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>

<div id="navContainer">
		<ul>
			
			<LI class="header" id="writeReview"><A   href="./write_review.php" >כתוב ביקורת</A> | </LI>
			<LI class="header" id="findReview"><A   href="./find_review.php" >חפש ביקורת</A></LI>
			
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "login.html";}?> > <?php if (session_is_registered('username')) {echo "התנתק";} else {echo "כנס";}?></A></LI>
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "about_me.php?external_user=".$_SESSION['user_id']."";} else{echo "signup.php?profile=1";}?> >החשבון שלי </A> | </LI>
		</ul>
</div>



<div  id="bodyContainer">
<form action="uploading_pic.php" method="post" enctype="multipart/form-data">
	<table align="center" cellpadding="5">

		<tr>
		</tr>	
		<tr>
			<td>
				בחר קובץ
			</td>
			<td>
				<input name="image" type="file" >
			</td>
			

		</tr>
		<tr>
			<td>
				 
			</td>
			<td>
				<input type="submit" value="העלה תמונה">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<br>
				<?php
					$html = "<A href=\"./about_me.php?external_user=".$_SESSION['user_id']."\"> התחרטת? חזור לחשבון שלך.</A>"; 
					echo $html;
				?>
			</td>
								
		</tr>

		
	</table>
</form>


</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>