<?php 

session_start();

include './utils/functions.php';

$user_id = $_SESSION['user_id'];											

//counting how much reviews this user wrote
$mysqli = getMysqliConnection();
$review_query = "SELECT * FROM `test`.`reviews` WHERE user_id='$user_id'";
$rev_result = $mysqli->query($review_query);
$rev_count = $rev_result->num_rows;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> �������� ��� | IsraYelp</title>
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
		<div id="user_header"  align="right">
			<ul id="userTabs" >	
				<li><a href="./about_me.php">������� ���</a></li> 
				<li class="selected"><a href="./my_reviews.php">�������</a></li> 
				<li><a href="./my_favs.php">�������</a></li>
			</ul> 
		</div>
	</div>
	
	<div id="user_details_wrapper">	
	
			<span><b> ���� ��� </b></span> 	<?php echo $rev_count?> <span ><b> ������� ���� </b></span>
			<br/>
			<br/>		
			<?php 
				while ($review = mysqli_fetch_assoc($rev_result)){		
					$biz_id = $review['biz_id'];
					$biz_type = $review['biz_type'];
					$grading = $review['grading'];
					$query = "SELECT * FROM `test`.`$biz_type` WHERE id='$biz_id'";
					$result = $mysqli->query($query);
					$biz = mysqli_fetch_assoc($result);
					$review_id=$review['id'];
					
					$sen="������� ����� ���� ";
					$html = "<div id=\"my_review\">						
								<table cellpadding=\"20\" cellspacing=\"1\" border=\"0\" >
									<tr>
										<td>
											<img src=\"./image/delete_rev.png\" height=\"20px\" width=\"20px\">
											<a href=\"./delete_reviwe.php?reviwe_id=".$review_id."\">��� ������ </a>
										</td>
										<td><span> <b> ".$sen.$biz['name']."</b>"."</span>
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
						</div>";
					echo $html;			
				}
			?>
		
	</div>
</div>

<?php echo getFootetHTMLCode()?>

</body>
</html>