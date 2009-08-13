<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">

	<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
	<title>כתוב ביקורת | IsraYelp</title>

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
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "profile.php";} else{echo "signup.html?profile=1";}?> >החשבון שלי </A> | </LI>
		</ul>
</div>


<div id="bodyContainer">
<h1>עבור איזה עסק תרצה לכתוב ביקורת?</h1>
	<div id="external_search">
	<form method="get" action="/search" name="external_search"> 
		<p>
			<label for="find_desc_ext"> חפש <em>לדוגמא: מסעדה, מרפאה, סלון</em></label> 
			<input type="text" maxlength="64" id="find_desc_ext" name="find_desc" tabindex="1" value="בית קפה">
			
		</p>
		<p>
			<label for="find_loc_ext">מיקום <em>כתובת, עיר</em></label>
			<input type="text" maxlength="64" name="find_loc" id="find_loc_ext" tabindex="2" value="חיים לבנון, תל-אביב">
			<input type="hidden" name="ns" value="1">
			<input type="hidden" name="rpp" value="10">
		</p>

		<button type="submit" id="ex_submit_button" class="form_img_btn" tabindex="3" onclick="document.external_search.rpp.value=Yelp.readRppFromSearchPrefsCookie();">חפש</button>
	</form>
	</div>
	
	
</div>
</body>
</html>
