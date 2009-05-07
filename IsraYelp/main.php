<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>������� ������� ������ - IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
	<style>
	
	BODY {	
	FONT-SIZE: 12px;	
	MARGIN: 0px;	
	COLOR: #555;	
	FONT-FAMILY: arial,david, 'Lucida Grande', 'Bitstream Vera Sans', verdana, sans-serif;	
	BACKGROUND-COLOR: #fff;	
	TEXT-ALIGN: center
	}
	
	DIV {	
	FONT-SIZE: 12px;	
	COLOR: #555;	
	FONT-FAMILY: arial, david, times new roman, 'Lucida Grande', 'Bitstream Vera Sans', verdana, sans-serif;	
	TEXT-ALIGN: center
	}
	
	#head {	
	FONT-SIZE: 80%;	
	BACKGROUND: url("./image/back.png") repeat-x;	
	MARGIN: 0px auto;	
	OVERFLOW: hidden;	
	WIDTH: 950px;	
	POSITION: relative;	
	HEIGHT: 66px
	}
	
	#head #logo {
	BACKGROUND: url("./image/israLogo.png") #fff no-repeat;		
	RIGHT: 10px;
	HEIGHT: 66px;
	WIDTH: 160px;	
	POSITION: absolute;		
	TEXT-ALIGN: center} 
	
	#head #logo A {	
	DISPLAY: block;	
	WIDTH: 175px;	
	TEXT-INDENT: -9999px;	
	HEIGHT: 66px;	
	TEXT-DECORATION: none;	
	outline: 0px
	}
	
	#head #register P {
		TEXT-ALIGN: left;
		COLOR: #FFFFFF}
	}
	
	#head #rightEdge {	
	BACKGROUND: url("./image/back_right.gif") #fff no-repeat right bottom;	
	FLOAT: right;
	WIDTH: 6px;	
	HEIGHT: 66px
	}
	
	#head #leftEdge {	
	BACKGROUND: url("./image/back_left.gif") #fff no-repeat left bottom;	
	FLOAT: left;
	WIDTH: 6px;	
	HEIGHT: 66px
	}
	

	A {	
	COLOR: #66c;	
	TEXT-DECORATION: none
	}
	
	IMG {	
	BORDER-TOP-WIDTH: 0px;	
	BORDER-LEFT-WIDTH: 0px;	
	BORDER-BOTTOM-WIDTH: 0px;	
	BORDER-RIGHT-WIDTH: 0px
	}
	
	UL {	
	FONT-SIZE: 14px;
	MARGIN-TOP: 5px;
	LIST-STYLE-TYPE: disc
	}
	
	DIV {	
	FONT-SIZE: 12px;	
	COLOR: #555;	
	FONT-FAMILY: arial, 'Lucida Grande', 'Bitstream Vera Sans', verdana, sans-serif,david;	
	TEXT-ALIGN: right}
	
	
	#navContainer  {
	BACKGROUND: url("./image/navBg.gif") repeat-x;	
	MARGIN: 0px auto 10px;	
	WIDTH: 940px;	
	HEIGHT: 26px;	
	OVERFLOW: hidden
	}
	
	#navContainer   UL {	
	PADDING-RIGHT: 0px;	
	PADDING-LEFT: 0px;	
	FLOAT: center;	
	PADDING-BOTTOM: 0px;	
	MARGIN: 0px;	
	WIDTH: 100%;
	PADDING-TOP: 0px;	
	LIST-STYLE-TYPE: none}
	
	#navContainer  LI {	
	FLOAT: center;	
	MARGIN: 0px;	
	HEIGHT: 26px
	}

	#navContainer  LI.header_login {	
	DISPLAY: inline;	
	FONT-SIZE: 12px;	
	BACKGROUND: none transparent scroll repeat 0% 0%;	
	FLOAT: left;	
	OVERFLOW: hidden;		
	LINE-HEIGHT: 25px;	
	MARGIN: 0px 3px;	
	TEXT-INDENT: 3px;	
	WIDTH: auto;	
	HEIGHT: auto;
	}
	
	#navContainer  LI.header {	
	DISPLAY: inline;	
	FONT-SIZE: 12px;	
	BACKGROUND: none transparent scroll repeat 0% 0%;	
	FLOAT: right;	
	OVERFLOW: hidden;		
	LINE-HEIGHT: 25px;	
	MARGIN: 0px 3px;	
	TEXT-INDENT: 6px;	
	WIDTH: auto;	
	HEIGHT: auto;
	}
	
	UL LI {	MARGIN-TOP: 5px}

	#bodyContainer {	
	BORDER-RIGHT: #ccc 1px solid;	
	PADDING-RIGHT: 0px;	
	BORDER-TOP: #ccc 1px solid;	
	PADDING-LEFT: 0px;	
	PADDING-BOTTOM: 10px;	
	MARGIN-LEFT: auto;	
	BORDER-LEFT: #ccc 1px solid;	
	WIDTH: 930px;	
	MARGIN-RIGHT: auto;	
	PADDING-TOP: 10px;	
	BORDER-BOTTOM: #ccc 1px solid} 

	H1 {	
	FONT-FAMILY: arial, verdana, sans-serif, david;
	FONT-WEIGHT: bold;	
	COLOR: #c41200;	
	TEXT-ALIGN: right;
	FONT-SIZE: 18px;	
	MARGIN: 0px 0px 5px}
	
	#locBar {	
	OVERFLOW: visible;	
	POSITION: relative;
	PADDING-BOTTOM: 5px;	
	MARGIN-LEFT: 10px;	
	MARGIN-RIGHT: 10px;	
	BORDER-BOTTOM: #ccc 1px solid}
	
	#locBar H1 {	
	FONT-SIZE: 16px;	
	MARGIN: 0px 0px 5px;
	}

	#locBar UL {	
	PADDING-RIGHT: 0px;	
	PADDING-LEFT: 0px;	
	RIGHT: 5px;	
	PADDING-BOTTOM: 0px;	
	MARGIN: 0px;	
	PADDING-TOP: 0px;	
	LIST-STYLE-TYPE: none;	
	POSITION: absolute;	
	TOP: 0px;
	POSITION: right}
	
	#locBar UL LI {	
	PADDING-LEFT: 5px;	
	FLOAT: right;	
	MARGIN: 0px}
	
	H2 {	
	FONT-FAMILY: arial, verdana, sans-serif,david;	
	FONT-WEIGHT: bold;	
	COLOR: #c41200;	
	TEXT-ALIGN: left;
	FONT-SIZE: 16px;	
	MARGIN: 0px 0px 5px
	} 
	
	H2 A {	
	FONT-FAMILY: arial, 'Lucida Grande', 'Bitstream Vera Sans', verdana, sans-serif} 
	
	#nonMemberWelcome {
	PADDING-RIGHT: 0px;	
	PADDING-LEFT: 0px;	
	PADDING-BOTTOM: 4px;	
	MARGIN: 0px 10px;	
	PADDING-TOP: 4px;	
	BORDER-BOTTOM: #ccc 1px solid;	
	TEXT-ALIGN: center}
	
	#nonMemberWelcome A {	
	DISPLAY: block;	
	BACKGROUND: url("./image/signUpHeb.png") no-repeat;	
	MARGIN: 0px auto;	
	WIDTH: 871px;	
	TEXT-INDENT: -999em;	
	HEIGHT: 33px}
	
	#external_search {	
	BORDER-TOP: #fff 6px solid;	
	MARGIN: 0px 10px;	
	BORDER-BOTTOM: #ccc 1px solid;	
	HEIGHT: 70px}
	
	FORM {	
	PADDING-RIGHT: 0px;	
	PADDING-LEFT: 0px;	
	PADDING-BOTTOM: 0px;	
	MARGIN: 0px;	
	PADDING-TOP: 0px;	
	TEXT-ALIGN: right}
	
	#external_search FORM {	
	DISPLAY: block;	
	PADDING-LEFT: 100px;	
	BACKGROUND: #fdf3d5;	
	PADDING-TOP: 9px;	
	BORDER-BOTTOM: #fff 6px solid;	
	HEIGHT: 55px}
	
	.form_img_btn {	
	BORDER-TOP-WIDTH: 0px;	
	PADDING-RIGHT: 0px;	
	PADDING-LEFT: 0px;	
	BORDER-LEFT-WIDTH: 0px;	
	BORDER-BOTTOM-WIDTH: 0px;	
	PADDING-BOTTOM: 0px;	
	MARGIN: 0px;	
	OVERFLOW: hidden;	
	CURSOR: pointer;	
	TEXT-INDENT: -999em;	
	PADDING-TOP: 0px;	
	BORDER-RIGHT-WIDTH: 0px}
	
	#ex_submit_button {	
	DISPLAY: block;	
	BACKGROUND: url("./image/search_red.png") no-repeat;	
	FLOAT: left;	
	MARGIN: 18px 0px 0px 5px;	
	WIDTH: 78px;	
	HEIGHT: 23px}
	
	P {	
	PADDING-RIGHT: 0px;	
	PADDING-LEFT: 0px;	
	PADDING-BOTTOM: 0px;	
	MARGIN: 0px;	
	PADDING-TOP: 0px;	
	TEXT-ALIGN: right;
	FONT-SIZE: 12px;	
	MARGIN-BOTTOM: 10px;	
	COLOR: #555}
	
	#external_search FORM P {	
	FLOAT: right;	
	MARGIN: 0px 25px 0px 0px;	
	TEXT-ALIGN: right}
	
	#external_search FORM INPUT {	
	WIDTH: 295px;
	TEXT-ALIGN: right;}
	
	#external_search LABEL {	
	DISPLAY: block;	
	FONT-WEIGHT: bold;	
	FONT-SIZE: 16px;	
	COLOR: #c41200}
	
	#external_search LABEL EM {	
	FONT-WEIGHT: normal;	
	FONT-SIZE: 11px;	
	COLOR: #666}
	
	.pseudoLink {	
	CURSOR: pointer;	
	COLOR: #66c}
	
	</style>
	
	
	
</head>
<body class= "us" id="IsraYelp_main_body">
<div id="head">
		<div id="logo">
			<A href="main.php"></A>
		</div>
		<div id="register">
			<p><?php if (session_is_registered('username')) print($_SESSION['username'] . "-��� ����� �") ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>
	
<div id="navContainer">
		<ul>
			<LI class="header" id="welcome" ><A class="tabon" href="./">������ �����</A></LI>
			<LI class="header" id="aboutMe"><A id="Zabout_me" href="http://static.px.yelp.com/signup?return_url=%2Fuser_details" rel="nofollow">�����</A> |</LI>
			<LI class="header" id="writeReview"><A id="Zwrite_a_review" href="http://static.px.yelp.com/signup?return_url=%2Fwriteareview" rel="nofollow">���� ������</A> |</LI>
			<LI class="header" id="findReview"><A href="http://static.px.yelp.com/find" rel="nofollow">��� ������</A> |</LI>
			<LI class="header" id="invite"><A id="Zinvite_friends" href="http://static.px.yelp.com/signup?return_url=%2Finvite_friends" rel="nofollow">���� �����</A> |</LI>
			<LI class="header" id="messaging"><A id="Zmail" href="http://static.px.yelp.com/signup?return_url=%2Fmail" rel="nofollow">������</A> |</LI>
			<LI class="header" id="talk"><A href="http://static.px.yelp.com/talk"> ����� </A> |</LI>
			<LI class="header" id="events"><A href="http://static.px.yelp.com/events/sf"> ������� </A>|</LI>
			
			<LI class="header_login"> <A href=<?php if (session_is_registered('username')) {print("login.php?logout=1");} else{print("login.html");}?> rel="nofollow"> <?php if (session_is_registered('username')) {echo "�����";} else {echo "���";}?></A></LI>
			<LI class="header_login"> |<A id="Zprofile" href="http://static.px.yelp.com/signup?return_url=%2Fprofile" rel="nofollow"> ����� </A> </LI>
			<LI class="header_login"> |<A href="http://static.px.yelp.com/member_search" rel="nofollow"> ����� ����� </A> </LI>		
		</ul>
</div>
	
<div id="bodyContainer">
 <div class="ieSucks" id="locBar">
	 <H1>��-����</H1>
	 <UL >
	 <LI id="locBar_title"> : ���� �����</LI>
	 <LI> | <A href="http://www.yelp.com/nyc">�������</A></LI>
	 <LI> | <A href="http://www.yelp.com/sanjose">��� ���</A></LI>
	 <LI> | <A href="http://www.yelp.com/la">����</A></LI>
	 <LI><A id="locBoxToggle" onclick='Yelp.init_locBox(this, {"city_dir_depth":0,"return_url":"/home"});return false' href="http://www.yelp.com/locations?return_url=%2Fhome">  ...��� </A> </LI>
	 </UL>
 </div>
 
 <h2 id="nonMemberWelcome"><A href="signup.html" rel="nofollow">!����� ����� ���� ����� �� �� �� ����� - ��� ���� ��������  - IsraYelp</A> </h2>
 	
<div id="external_search">
	<form method="get" action="/search" name="external_search"> 
		<p>
			<label for="find_desc_ext">   ��� <em>������: �����, �����, ����</em></label> 
			<input type="text" maxlength="64" id="find_desc_ext" name="find_desc" tabindex="1">	
		</p>
		<p>
			<label for="find_loc_ext">��� <em>�����, ���</em></label>
			<input type="text" maxlength="64" name="find_loc" id="find_loc_ext" tabindex="2" value="���� �����">
			<input type="hidden" name="ns" value="1">
			<input type="hidden" name="rpp" value="10">
		</p>
		<button type="submit" id="ex_submit_button" class="form_img_btn" tabindex="3" onclick="document.external_search.rpp.value=Yelp.readRppFromSearchPrefsCookie();">���</button>
	</form>
</div>
</div>
</body>
</html>