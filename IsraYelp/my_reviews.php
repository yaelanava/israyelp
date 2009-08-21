<?php 
	session_start();
	
?>

<head>
	<title> עליי </title>
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
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "about_me.php";} else{echo "signup.html?profile=1";}?> >החשבון שלי </A> | </LI>
		</ul>
</div>

<div id="mainContent">
	<div id="user_header" class="ieSucks" align="right">
		<ul id="userTabs" >
				<li><a href="./about_me.php">הפרופיל שלי</a></li> 
				<li class="selected"><a href="./my_reviews.php">ביקורות</a></li> 
				<li><a href="./my_favs.php">מועדפים</a></li>
		</ul> 
	</div>
<?php
	echo $name=$_SESSION['username'];
	echo $email = $_SESSION['email']; 
	echo '</br>';
	echo $try=$_SESSION['try'];
		echo '</br>';
	$my_revs=$_POST['my_revs'];
	while($one_rev = $try->fetch_row())
	{
		echo 'res:';
		echo $one_rev[2];
		echo "<br />";
		echo 'grade';
		echo $one_rev[3];
		echo "<br />";
		echo 'the rev:';
		echo $one_rev[4];
		
	}
?>