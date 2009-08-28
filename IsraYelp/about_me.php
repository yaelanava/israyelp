<?php 
session_start();

include './utils/functions.php';

$mysqli = getMysqliConnection();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>		
	<title> עליי </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body class= "us" id="IsraYelp_main_body" dir="rtl">
<?php
		//extracting the user information 
		$mysqli = new mysqli('localhost', 'administrator', '', 'test');
		$name=$_SESSION['username'];
		$email = $_SESSION['email'];
		//$my_query = "SELECT * FROM `test`.`users` WHERE username= '$name'";
		$user_query = "SELECT * FROM `test`.`users` WHERE email= '$email'";
		$user_result = $mysqli->query($user_query);
		$row=mysqli_fetch_assoc($user_result);
		/*$row = $user_result->fetch_row();   		
		$id=$row[0];
		$city=$row[3];
		$added=$row[4]; */
		$id=$row['id'];
		$city=$row['city'];
		$month=$row['month_added'];
		$year=$row['year_added'];
?>

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
				<li class="selected"><a href="./about_me.php">הפרופיל שלי</a></li> 
				<li><a href="./my_reviews.php">ביקורות</a></li> 
				<li><a href="./my_favs.php">מועדפים</a></li>
		</ul> 
	</div>
</div>
		
	<div id="user_details_wrapper">
		<div id="inner_container" class="clearfix">	
			<div id="about_user_column">
				
				<table cellspacing="0" cellpadding="0" border="0" id="user_table">
					<tr>
						<td valign="bottom">
							<div id="user_pic">
								<div class="clearStyles photoBox" >
									<?php $destination="./users_pics/".$id;
										if (!file_exists($destination))
											$destination="./users_pics/blank_user_medium.gif";
									?>
									<img src="<? echo $destination; ?>" height="100px" width="100px">
									<p id="photo_action_link">
					 					<a href="./upload_pic.php" class="small">העלה תמונה</a>
					 				</p>
								</div>
							</div>	
						</td>
						<td>
							<ul class="stripped" id="user_stats">
					
							<?php
		
								//counting how much reviews this user wrote
								$review_query = "SELECT * FROM `test`.`reviews` WHERE user_id='$id'";
								$rev_result = $mysqli->query($review_query);
								$rev_count = $rev_result->num_rows;
								echo $rev_count;
								$_SESSION['user_id']=$id;
		
							?>
						
							<a href="./my_reviews.php" >ביקורות שנכתבו על ידך</a>
							<br>
							<?php
								$fav_query = "SELECT * FROM `test`.`favorites` WHERE user_id='$id'";
								$fav_result = $mysqli->query($fav_query);
							
								//echo $name=$_SESSION['username'];
								//echo $email = $_SESSION['email']; 
								$fav_count = $fav_result->num_rows;
								echo $fav_count;
							?>
								<a href="./my_favs.php" >מקומות מועדפים</a>
					
							</ul>
						</td>
						<td>
							<span class="highlight2">מיקום:</span>
							<?php    					
		    					if (empty($city))
		    						echo 'עיר מגוריך אינה ידועה';
		    					else 
		    						echo  $city;
		    					
		    					echo "<br />";
		    					
		    					
							?>
							<p>					
								<span class="formLabel"><a href="edit_city.html">ערוך</a></span>
							</p>
						</td>
						<td>
							<span class="highlight2">רשום לאתר מ-</span>
							<?php
								echo "<br />";
								echo $month." , ".$year;
								echo "<br />";
								
							?>
						</td>
					</tr>
					
					
					
				</table>
			</div>
			</div>
			</div>	
			

				<!--<ul class="stripped" id="user_stats">
					
					<?php

						//counting how much reviews this user wrote
						$review_query = "SELECT * FROM `test`.`reviews` WHERE user_id='$id'";
						$rev_result = $mysqli->query($review_query);
						$rev_count = $rev_result->num_rows;
						echo $rev_count;
						$_SESSION['user_id']=$id;

					?>
				
					<a href="./my_reviews.php" >ביקורות שנכתבו על ידך</a>
			
				</ul>
	
 				<p id="photo_action_link">
 					<a href="./upload_pic.php" class="small">העלה תמונה</a>
 				</p>
 
 				<div id="profile_questions">
					<span class="highlight2">מיקום:</span>
					
					
					<?php    					
    					if (empty($city))
    						echo 'עיר מגוריך אינה ידועה';
    					else 
    						echo  $city;
    					
    					echo "<br />";
    					
    					
					?>
					<p>					<span class="formLabel"><a href="profile_location?return_url=%2Fuser_details">ערוך</a></span>
					</p>

					<span class="highlight2">רשום לאתר מ-</span>
					<?php
						echo "<br />";
						echo $added;
						echo "<br />";
						
					?>
					
					<p>					<span class="formLabel"><a href="profile_location?return_url=%2Fuser_details">ערוך</a></span>
					</p>
					<span class="highlight2">דברים שאני אוהב</span>
					
					<a href="/profile_bio" class="smaller">ערוך</a>
					
					<p>עדיין לא אמרת לנו... זה הזמן</p>
					<a href="/profile_bio">עדכן פרופיל</a><br/>
				</div>
 
		
		</div>
	</div>
</div>
	

--><div id="footer">	
	<div>		
		<ul id="aboutSite">
			<li>  <a href="http://localhost/IsraYelp/contact_us.html"   id="Zprofile_footer">עלינו</a></li>
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