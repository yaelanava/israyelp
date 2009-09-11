<?php 
session_start();

include './utils/functions.php';

$mysqli = getMysqliConnection();

$user_id = $_SESSION['user_id'];

$watched_user_name = $_SESSION['watched_user_name'];

//counting how much reviews this user wrote
$query = "SELECT * FROM `messages` WHERE recipient_id='$user_id'";
$result = $mysqli->query($query);
$count = $result->num_rows;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> ������� ��� | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css"> 
</head>

<body dir="rtl">
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
			
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "login.php?logout";} else{echo "login.php";}?> > <?php if (session_is_registered('username')) {echo "�����";} else {echo "���";}?></A></LI>
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "profile.php";} else{echo "signup.php?";}?> >������ ��� </A> | </LI>
		</ul>
</div>

<div id="bodyContainer">
		<div id="userTabs" >
			<ul>	
				<li><a href="./profile.php">������</a></li>		 
				<li><a href="./my_reviews.php">�������</a></li>
				<li><a href="./my_favs.php">�������</a></li>
				<li class="selected"><a href="./user_messages.php">������</a></li>										
			</ul> 
		</div>
		<div id="user_header" align="right">
			<h1>������� �� <?php echo $watched_user_name?></h1>			
		</div>
	<div id="user_details_wrapper">		
		<?php 
			$html = "<br/>
					<H1>�� �� $count ������</H1>
					<br/>";	
			echo $html;
			while ($msg = mysqli_fetch_assoc($result)){	
				$sender_id = $msg['sender_id'];
				
				$query_sender = "SELECT * FROM `users` WHERE id=$sender_id";
				$result_sender = $mysqli->query($query_sender);
				$sender = mysqli_fetch_assoc($result_sender);	
				$sender_name = $sender['username'];
				
				$html = "<div id=\"my_review\">					
							<table cellpadding=\"10\" cellspacing=\"1\" border=\"0\" >
								<tr>
									<td>
										<span><b><a href=\"./profile.php?user_id=$sender_id/.\">$sender_name</a></b></span>
									</td>
									 <td>".$msg['message']."
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