<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title> ����� ����� </title>
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
			<LI class="header" id="aboutMe"><A id="Zabout_me" href="http://static.px.yelp.com/signup?return_url=%2Fuser_details"  >�����</A> | </LI>
			<LI class="header" id="writeReview"><A id="Zwrite_a_review" href="http://static.px.yelp.com/signup?return_url=%2Fwriteareview"  >���� ������</A> | </LI>
			<LI class="header" id="findReview"><A href="http://static.px.yelp.com/find"  >��� ������</A> | </LI>
			<LI class="header" id="invite"><A id="Zinvite_friends" href="http://static.px.yelp.com/signup?return_url=%2Finvite_friends"  >���� �����</A></LI>
			
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "login.html";}?>  > <?php if (session_is_registered('username')) {echo "�����";} else {echo "���";}?></A></LI>
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "profile.php";} else{echo "signup.html?profile=1";}?>  >������ ��� </A> | </LI>
			<LI class="header_login"><A href="http://static.px.yelp.com/member_search"  > ����� ����� </A> | </LI>		
		</ul>
	
</div>



<div>

<form enctype="multipart/form-data" name="imageForm" action="http://upload.php?type=1" method="post" target="_blank" onsubmit="return window.confirm(&quot;You are submitting information to an external page.\nAre you sure?&quot;);">
	<table align="center" cellpadding="5">

		<tr>
		</tr>	
		<tr>
			<td>
				��� ����
			</td>
			<td>
				<input name="image" type="file" >
			</td>
			

		</tr>
		<tr>
			<td>
				 
			</td>
			<td>
				<input type="submit" name="save" value="���� �����">
			</td>
		</tr>

		
	</table>
</form>

</div>

<div id="footer">
	
	<div>		
				<ul id="aboutSite">
					<li>  <a href="/signup"   id="Zprofile_footer">�����</a></li>
					<li> | <a href="/about">������ ���</a></li>
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

</body>
</html>