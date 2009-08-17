<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">

	<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
	<title>���� ������ | IsraYelp</title>

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


<div id="bodyContainer">
<h1>���� ���� ��� ���� ����� ������?</h1>
	<div id="external_search">
	<form method="get" action="/search" name="external_search"> 
		<p>
			<label for="find_desc_ext"> �� ����� <em> �� ����</em></label> 
			<input type="text" align="right" maxlength="64" id="find_desc_ext" name="find_desc" tabindex="1" value="" >
			
		</p>
		<p>
			<label for="find_loc_ext">��� ����� <em> </em></label>
			<select>
 				 <option value="restaurant">�����</option>
				 <option value="cafe">���-���</option>
  				 <option value="hair_salon">�����</option>
                 <option value="cinema">��� ������</option>
			</select>
		</p>

		<p>
			<label for="find_loc_ext">��� <em> </em></label>
			<select>
 				 <option value="tel-aviv">��-����</option>
				 <option value="jerusalem">�������</option>
  				 <option value="beer_sheva">��� ���</option>
                 <option value="haifa">����</option>
			</select>
		</p>
		<button type="submit" id="ex_submit_button" class="form_img_btn" tabindex="3" onclick="document.external_search.rpp.value=Yelp.readRppFromSearchPrefsCookie();">���</button>
	</form>
	</div>
	
	
</div>
</body>
</html>
