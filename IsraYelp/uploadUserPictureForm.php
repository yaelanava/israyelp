<?php 
session_start();

include './utils/functions.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title> ����� ����� </title>
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

<div  id="bodyContainer">
	<form action="uploading_pic.php" method="post" enctype="multipart/form-data">
		<table align="center" cellpadding="5">
			<tr>
				<td> ��� ���� </td>
				<td> <input name="image" type="file"> </td>			
			</tr>
			<tr>
				<td></td>
				<td> <input type="submit" value="���� �����"> </td>
			</tr>
			<tr>
				<td></td>
				<td> 
					<br>
					<a href="./about_me.php?external_user=<?php echo $_SESSION['user_id']?>"> ������? ���� ������ ���.</a>				
				</td>							
			</tr>	
		</table>
	</form>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>