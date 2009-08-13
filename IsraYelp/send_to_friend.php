<?php session_start();?>
<html>
<head>
	<title>אתר ביקורות הגולשים - IsraYelp </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>
<body dir="rtl">

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
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "profile.php";} else{echo "signup.html?profile=1";}?> >החשבון שלי </A> | </LI>
		</ul>
</div>

<script type="text/javascript">
	function submitToFriends(){
		$$('#lists_viewport input[type=checkbox]').invoke('disable');
		document.send_to_a_friend_form.submit();
	}
</script>

<div id="bodyContainer">
	<H1>שלח לחבר</H1>
		<div>
		<p> מלא את הפרטים הבאים כדי לשלוח את ההודעה: </p>
		<br/>
		<form method="post" action="send_to_friend.php" >
		<form method="post" action="" name="send_to_a_friend_form" id="send_to_a_friend_form" class="clearfix">
			<table align="right" cellpadding="5">
				<tr>
					<td>
					<p>אימייל החבר</p>
					</td>
					<td>
						<input type="text" name="emails" class="form200" />
					</td>
				</tr>
				<tr>
					<td>
						<p>תוכן ההודעה</p>
					</td>
					<td>
						<textarea id="STF_Note" name="note" rows="5" cols="50" class="form400">מה קורה?</textarea>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;					
					</td>
					<td>
						<p style="text-align:right;margin-top:15px;">
						<img src="./image/send2friend.png" 
						onclick="submitToFriends();" 
						style="cursor:pointer;" alt="Send"></p>
					
					</td>
				</tr>
			</table>
		</form>
		</div>
</div>

</body>
</html>