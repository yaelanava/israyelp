<?php 
	session_start();
	include './utils/functions.php';
				
?>

<html>
<head>
	<title> ������ </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css"> 
</head>

<body  dir="rtl">
<div id="head">
		<div id="logo">
			<A href="./main.php">Yelp</A>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>

<div id="navContainer">
		<ul>
			
			<LI class="header" id="writeReview"><A   href="./write_review.php" >���� ������</A> | </LI>
			<LI class="header" id="findReview"><A   href="./find_review.php" >��� ������</A></LI>
			
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "login.php";}?> > <?php if (session_is_registered('username')) {echo "�����";} else {echo "���";}?></A></LI>
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "about_me.php?external_user=".$_SESSION['user_id']."";} else{echo "signup.php?profile=1";}?> >������ ��� </A> | </LI>
		</ul>
</div>


<div id="bodyContainer">
	<?php 
		$reviewer = $_POST['find_reviewer'];
		
		$mysqli = getMysqliConnection();
		$query = "SELECT * FROM `users` WHERE username='$reviewer'";
		$result = $mysqli->query($query);	
		$count = $result->num_rows;
		
		if ($count == 0){
			$html = "<p><h5>"."�� ����� ������ ��� ��"."</h5></p>";
			$html .= "<p><a href=\"./find_review.php\">"."��� ��� ����� ��� �����"."</A>";
			echo $html;
		}
		else if ($count == 1){
			$user = mysqli_fetch_assoc($result);
			header("location:./my_reviews.php?user_id=".$user['id']);	
			die(0);			
		}
		else {
			$html = "<p><h5>"."�����"." ".$count." ������:"."</h5></p>";
			$html .= "<table>";
			while ($user = mysqli_fetch_assoc($result)){
				$html .= "<tr>
					<td>
						<P><div class=\"clearStyles bizPhotoBox\">
							<A href=\"./my_reviews.php?user_id=".$user['id']."\" rel=\"nofollow\"><IMG style=\"WIDTH: 40px; HEIGHT: 40px\" alt=\"������ �� " . $user['username'] ."\" src=\"".getUserPictureSrc($user['id'], "./")."\"></A>
							</div>
						</P>
					</td>
					<td>
						<P>
							<A href=\"./my_reviews.php?user_id=".$user['id']."\" rel=\"nofollow\">".$user['username']."</A>
						</P>						
					</td>
					</tr>";
			}
			$html.="</table>";
			echo $html;			
		}

	?>	
</div>	

<?php echo getFooterHTMLCode()?>

</body>
</html>