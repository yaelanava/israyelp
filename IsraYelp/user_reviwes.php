<?php 

session_start();

include './utils/functions.php';

$user_id_rev = $_GET['user_id_rev'];
											
//counting how much reviews this user wrote
$mysqli = getMysqliConnection();
$review_query = "SELECT * FROM `reviews` WHERE user_id='$user_id_rev'";
$rev_result = $mysqli->query($review_query);
$rev_count = $rev_result->num_rows;

$user_query = "SELECT * FROM `users` WHERE id='$user_id_rev'";
$user_result = $mysqli->query($user_query);
$user=mysqli_fetch_assoc($user_result);
$user_name=$user['username'];


?>

<head>
	<title> הביקורות של <?php echo $user_name ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
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
			
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "login.php";}?> > <?php if (session_is_registered('username')) {echo "התנתק";} else {echo "כנס";}?></A></LI>
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "about_me.php";} else{echo "signup.html?profile=1";}?> >החשבון שלי </A> | </LI>
		</ul>
</div>

<div id="bodyContainer">
	
	<div id="user_details_wrapper">	
	
			<span><b> <?php echo $user_name ?> כתב כבר </b></span> 	<?php echo $rev_count?> <span ><b> ביקורות לאתר </b></span>
			<br/>
			<br/>		
			<?php 
				while ($review = mysqli_fetch_assoc($rev_result)){		
					$biz_id = $review['biz_id'];
					$biz_type = $review['biz_type'];
					$grading = $review['grading'];
					$query = "SELECT * FROM `$biz_type` WHERE id='$biz_id'";
					$result = $mysqli->query($query);
					$biz = mysqli_fetch_assoc($result);
					
					$sen="הביקורת נכתבה עבור ";
					$html = "<div id=\"my_review\">						
								<table cellpadding=\"10\" cellspacing=\"1\" border=\"0\" >
									<tr>
										<td><span> <b> ".$sen.$biz['name']."</b>"."</span>
											<DIV class=\"ext_rating\">
												<DIV class=\"rating\">
													<IMG class=\"stars_". $grading."\" height=\"325\" alt=\"". $review['grading'] ."כוכבים\" src=\"./image/stars_map.png\" width=\"83\" />
												</DIV>
												<EM class=\"smaller\">". $review['added']."</EM> 
											</DIV>
										</td> 
										<td>
											<span><b>". $review['title']."</b><br>". $review['review']."</span>
										</td>
									</tr>
							</table>
						</div>";
					echo $html;			
				}
			?>
		
	</div>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>