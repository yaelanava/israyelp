<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

<style type="text/css">	

#user_header{}
	
	ul#userTabs{
	margin:0px 0px 0px 15px;
	padding:0px;
	list-style:none;
	overflow:auto;
	margin:15px;
}
ul#userTabs li{
	background:url(../i/new/tabs2/round_left_off.gif) no-repeat #F38E5A;
	padding:0px 0px 0px 10px;
	margin:0px 2px 0px 0px;
	font-size:11px;
	float:right;
}
ul#userTabs li a{
	background:url(../i/new/tabs2/round_right_off.gif) no-repeat;
	background-position:top right;
	display:block;
	float:left;
	color:#fff;
	padding:4px 10px 4px 0px;
	outline:0px;
}

ul#userTabs li.selected{
	background-image:url(../i/new/tabs2/round_left_on.gif);
	background-color:#ED5100;
}

ul#userTabs li.selected a{
	background-image:url(../i/new/tabs2/round_right_on.gif);
}

#about_user_column{width:200px;float:right;}
#user_details_wrapper{border:1px solid #ccc;margin-top:5px;padding:5px 0px;}
#inner_container{background:url(../i/new/gfx/1x1.gif) repeat-y 205px 0px;}
			
</style>
		
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
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "profile.php";} else{echo "signup.html?profile=1";}?> >������ ��� </A> | </LI>
		</ul>
</div>

<div id="mainContent">
	<div id="user_header" class="ieSucks" align="right">
		<ul id="userTabs" >
				<li class="selected"><a href="/user_details?userid=231YbLWB6JcbHbWoV4EIcg">������� ���</a></li> 
				<li><a href="/user_details_lists?userid=231YbLWB6JcbHbWoV4EIcg">������</a></li> 
				<li><a href="/user_details_reviews_self?userid=231YbLWB6JcbHbWoV4EIcg">�������</a></li> 
				<li><a href="/user_details_thanx?userid=231YbLWB6JcbHbWoV4EIcg">������</a></li> 
				<li><a href="/user_details_friends?userid=231YbLWB6JcbHbWoV4EIcg">�����</a></li> 
				<li><a href="/user_details_following">������</a></li> 
				<li><a href="/user_details_bookmarks?userid=231YbLWB6JcbHbWoV4EIcg">Bookmarks</a></li>
				<li><a href="/user_details_events?userid=231YbLWB6JcbHbWoV4EIcg">�������</a></li>
		</ul> 
	</div>
		
	<div id="user_details_wrapper">
		<div id="inner_container" class="clearfix">	
			<div id="about_user_column">
				<table cellspacing="0" cellpadding="0" border="0" id="user_profile_photos">
					<tr><td valign="bottom">
						<div id="user_main_photo">
							<div class="clearStyles photoBox" >
								<a href="/user_photos?return_url=%2Fuser_details%3Fuserid%3D231YbLWB6JcbHbWoV4EIcg"><img src="http://static4.px.yelp.com/static/20090717/i/new/gfx/blank_user_medium.gif" style="" alt="user photo" /></a>
							</div>
	 
						</div>
					</td>
					<td valign="bottom">
						&nbsp;
					</td></tr>
				</table>	
 
				<ul class="stripped" id="user_stats">
					<li id="friendCount"><a href="/user_details_friends?userid=231YbLWB6JcbHbWoV4EIcg">0&nbsp;�����</a></li>
					<li id="reviewCount"><a href="/user_details_reviews_self?userid=231YbLWB6JcbHbWoV4EIcg">0&nbsp;�������</a></li>
			
				</ul>
				<div id="user_badges">
				</div>
 				<p id="photo_action_link">
 					<a href="/user_photos?return_url=%2Fuser_details" class="small">���� �����</a>
 				</p>
 
 				<div id="profile_questions">
					<span class="highlight2">�����</span>
					<span class="formLabel"><a href="profile_location?return_url=%2Fuser_details">����</a></span>
					<p>Great Neck, NY</p>
					<span class="highlight2">���� ���� �-</span>
					<p>May 2009</p>
					<span class="highlight2">����� ���� ����</span>
					<a href="/profile_bio" class="smaller">����</a>
					<p>����� �� ���� ���... �� ����</p>
					<a href="/profile_bio">���� ������</a><br/>
				</div>
 
			</div>
		</div>
	</div>
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