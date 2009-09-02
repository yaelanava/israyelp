<?php 
session_start();

include './utils/functions.php';

$mysqli = getMysqliConnection();

$username = $_SESSION['username'];
$user_id = $_SESSION['user_id'];

//extracting the user information 
$user_query = "SELECT * FROM `test`.`users` WHERE id= '$user_id'";
$user_result = $mysqli->query($user_query);
$user = mysqli_fetch_assoc($user_result);
$city = $user['city'];
$month = $user['month_added'];
$year = $user['year_added'];
$email=$user['email'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>		
	<title> ������ ��� | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
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
			<p><?php if (session_is_registered('username')) print("��� ����� �-" . $_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>

<div id="navContainer">
		<ul>			
			<LI class="header" id="writeReview"><A   href="./write_review.php" >���� ������</A> | </LI>
			<LI class="header" id="findReview"><A   href="./find_review.php" >��� ������</A></LI>
			
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "login.php";}?> > <?php if (session_is_registered('username')) {echo "�����";} else {echo "���";}?></A></LI>
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "about_me.php";} else{echo "signup.html?profile=1";}?> >������ ��� </A> | </LI>
		</ul>
</div>

<div id="bodyContainer">
	<div id="mainContent">
		<div id="user_header" class="ieSucks" align="right">
			<ul id="userTabs" >
					<li class="selected"><a href="./about_me.php">������� ���</a></li> 
					<li><a href="./my_reviews.php">�������</a></li> 
					<li><a href="./my_favs.php">�������</a></li>
			</ul> 
		</div>
	</div>
			
	<div id="user_details_wrapper">
		<div id="inner_container" class="clearfix">	
			
				<table cellspacing="50" cellpadding="10" border="0" >
					<tr>
						<td valign="bottom">
							<h1><?php echo $username?></h1>						
							<div id="user_pic">
								<div class="clearStyles photoBox" >
									<img src="<? echo getUserPictureSrc($user_id, "./") ?>" height="100px" width="100px">
									<p id="photo_action_link">
					 					<a href="./upload_pic.php" class="small">���� �����</a>
					 				</p>
								</div>
							</div>	
						</td>
						<td>
							<ul class="stripped" id="user_stats">					
							<?php		
								//counting how much reviews this user wrote
								$review_query = "SELECT * FROM `test`.`reviews` WHERE user_id='$user_id'";
								$rev_result = $mysqli->query($review_query);
								$rev_count = $rev_result->num_rows;
								echo $rev_count;	
							?>
						
							<a href="./my_reviews.php" >������� ������ �� ���</a>
							<br>
							<?php
								$fav_query = "SELECT * FROM `test`.`favorites` WHERE user_id='$user_id'";
								$fav_result = $mysqli->query($fav_query);
								$fav_count = $fav_result->num_rows;
								echo $fav_count;
							?>
								<a href="./my_favs.php" >������ �������</a>			
							</ul>
						</td>
						<td>
							<span class="highlight2">�����:</span>
							<?php    					
			    				if (empty($city))
			    				{
			    					echo "<br/>";
			    					echo '��� ������ ���� �����';
			    				}
			    				else 
			    				{
			    					echo "<br/>";
			    					echo  $city;			    					
			    					echo "<br />";
			    				}			    								    				
								?>
							<p>					
								<span class="formLabel"><a href="edit_city.php">����</a></span>
							</p>
						</td>
						<td>
							<span class="highlight2">������� ���: </span>
							<?php	
								echo "<br/>";
								echo  $email;
								echo "<br/>"; 
							?>
							<p>					
								<span class="formLabel"><a href="edit_email.php">����</a></span>
							</p>
						</td>
						<td>
							<span class="highlight2">���� ���� �-</span>
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


<?php echo getFooterHTMLCode()?>

</body>
</html>