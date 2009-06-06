<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> כתיבת ביקורת | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../../mystyle.css">  	
</head>

<body dir="rtl">

<div id="head">
		<div id="logo">
			<A href="../../main.php"></A>
		</div>
		<div id="register">
			<p><?php if (session_is_registered('username')) print("אתה מחובר כ-" . $_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>

<div id="navContainer">
		<ul>
			<LI class="header" id="aboutMe"><A id="Zabout_me" href="http://static.px.yelp.com/signup?return_url=%2Fuser_details"  >עלינו</A> | </LI>
			<LI class="header" id="writeReview"><A id="Zwrite_a_review" href="http://static.px.yelp.com/signup?return_url=%2Fwriteareview"  >כתוב ביקורת</A> | </LI>
			<LI class="header" id="findReview"><A href="http://static.px.yelp.com/find"  >מצא ביקורת</A> | </LI>
			<LI class="header" id="invite"><A id="Zinvite_friends" href="http://static.px.yelp.com/signup?return_url=%2Finvite_friends"  >הזמן חברים</A></LI>
			
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "../../login.php?logout=1";} else{echo "../../login.html";}?>  > <?php if (session_is_registered('username')) {echo "התנתק";} else {echo "כנס";}?></A></LI>
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "../../profile.php";} else{echo "../../signup.html?profile=1";}?>  >החשבון שלי </A> | </LI>
			<LI class="header_login"><A href="http://static.px.yelp.com/member_search"  > חיפוש משתמש </A> | </LI>		
		</ul>
</div>

<div id="bodyContainer">
	<H1> כתוב את הביקורת שלך עבור לוקאס </H1>
	<form method="post" action="../../writeareview.php" name="review_rate_form" id="review_rate_form">
				<dl id="newBizForm">
					<dt>
						<strong>דירוג</strong><br/>
					</dt>
					<dd class="clearfix">
						<div id="starRating">
							<input type="radio" name="rating" value="1" /> 1
							<input type="radio" name="rating" value="2" /> 2
							<input type="radio" name="rating" value="3" /> 3
							<input type="radio" name="rating" value="4" /> 4
							<input type="radio" name="rating" value="5" /> 5
						</div>
						<p id="ratingDescription">לחץ על הכוכב כדי לדרג</p>
					</dd>

					<dt class="review"><strong>הביקורת שלך</strong><br/>		
			<!--		<br/><em class="smaller"><a href="/static?p=guide_pop" onclick="window.open('/static?p=guide_pop','guide_pop','width=450,height=500,status=no,toolbar=no,location=no,scrollbars=yes,menubar=no');return false">Read our review guidelines.</a></em>-->
					</dt>
					<dd class="review">
						<textarea cols="40" rows="8" class="form400"  name="comment"></textarea>
	<!--					<div id="default_text">
							Your review helps others learn about great local businesses.
						<br/><br/>
							If you happen to know the owner or have a conflict of interest, please don't review.
						</div> -->
					</dd>
				</dl>

		<input type="submit" name="action_select" value="שלח">
		<input type="button" name="" value="חזור" class="formButton">
		<input type="hidden" name="rest_name" value="lukas">
		<em class="smaller grey">* תמיד ניתן לשנות את הביקורת מאוחר יותר</em>
	</form>
</div>

</body>
</html>