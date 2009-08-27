<?php 
	session_start();
	include './utils/functions.php';
	
?>

<head>
	<title> ���� </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
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
			<p><?php if (session_is_registered('username')) print("��� ����� �-" . $_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>

<div id="navContainer">
		<ul>
			
			<LI class="header" id="writeReview"><A   href="./write_review.php" >���� ������</A> | </LI>
			<LI class="header" id="findReview"><A   href="./find_review.php" >��� ������</A></LI>
			
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "login.html";}?> > <?php if (session_is_registered('username')) {echo "�����";} else {echo "���";}?></A></LI>
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "about_me.php";} else{echo "signup.html?profile=1";}?> >������ ��� </A> | </LI>
		</ul>
</div>

<div id="mainContent">
	<div id="user_header"  align="right">
		<ul id="userTabs" >
			
				<li><a href="./about_me.php">������� ���</a></li> 
				<li class="selected"><a href="./my_reviews.php">�������</a></li> 
				<li><a href="./my_favs.php">�������</a></li>
		</ul> 
	</div>
</div>
	

	<div id="user_details_wrapper">	
	<div id="main_content">
	<div id="rev_fix">

	
	<?php
	$id=$_SESSION['user_id'];											
	//counting how much reviews this user wrote
	$mysqli = new mysqli('localhost', 'administrator', '', 'test');
	$review_query = "SELECT * FROM `test`.`reviews` WHERE user_id='$id'";
	$rev_result = $mysqli->query($review_query);

	//echo $name=$_SESSION['username'];
	//echo $email = $_SESSION['email']; 
	?>
	<span><b> ���� ��� </b></span>
	<?php 
	$rev_count = $rev_result->num_rows;
	echo $rev_count;
	?>
	<span ><b> ������� ���� </b></span>
	
	
	
	<?php 
	
	echo "<br />";
	echo "<br />";
	
	
	
	while ($review = mysqli_fetch_assoc($rev_result)){

		$rest_id=$review['restaurant_id'];
		$grading=$review['grading'];
		$query_rest = "SELECT * FROM `test`.`restaurants` WHERE id='$rest_id'";
		$result_rest = $mysqli->query($query_rest);
		$rest = mysqli_fetch_assoc($result_rest);
		$query_user = "SELECT * FROM `test`.`users` WHERE id='$id'";
		$result_user = $mysqli->query($query_user);
		$user = mysqli_fetch_assoc($result_user);
		
		$sen="������� ����� ���� ";
		$html = "<div id=\"my_review\">
			
			
			<table cellpadding=\"10\" cellspacing=\"1\" border=\"0\" >
				<tr>
					<td><span> <b> ".$sen.$rest['name']."</b>"."</span>
							<DIV class=\"ext_rating\">
								<DIV class=\"rating\">
									<IMG class=\"stars_". $grading."\" height=\"325\" alt=\"". $review['grading'] ."������\" src=\"./image/stars_map.png\" width=\"83\" />
								</DIV>
								<EM class=\"smaller\">". $review['added']."</EM> 
							</DIV>
					</td> 
					<td>
						<span><b>". $review['title']."</b><br>". $review['review']."</span>
					</td>
				</tr>
			</table>
			</div>
		";
		echo $html;
		
			
	}
?>
</div>	
</div>
</div>
</div>
<div id="footer">	
	<div>		
		<ul id="aboutSite">
			<li>  <a href="http://localhost/IsraYelp/contact_us.html"   id="Zprofile_footer">�����</a></li>
			<li> | <a href="/faq" >����� ������ </a></li>
		</ul>
	</div>

	<div class="directory">
		<ul>
			<li class="first"><strong>��� ����</strong></li>
			<li> | <a href="../restaurants.php">��-����</a></li>
			<li> | <a href="../../jerusalem/restaurants.php">�������</a></li>
			<li> | <a href="/boston">����</a></li>
			<li> | <a href="/chicago">��� ���</a></li>
			<li> | <a href="/dallas">������</a></li>
			<li> | <a href="/denver">�����</a></li>
			<li> | <a href="/locations">���� ������</a></li>
		</ul>
	</div>
	
	<div>
		<p> ������ ������ </p>
	</div>
</div>

	