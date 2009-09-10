<?php session_start();
include './utils/functions.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>��� ������ | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
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
			
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "login.php?logout";} else{echo "login.php";}?> > <?php if (session_is_registered('username')) {echo "�����";} else {echo "���";}?></A></LI>
			<LI class="header_login"><A href=<?php if (session_is_registered('username')) {echo "profile.php";} else{echo "signup.php?";}?> >������ ��� </A> | </LI>		
		</ul>
</div>


<div id="bodyContainer">
<h1>����� ��� ����:</h1>
	<div id="external_search">
	<form method="post" action="./search.php" name="external_search"> 
		<p>
			<label for="find_desc_ext"> �� ����� <em> �� ����</em></label> 
			<input type="text" align="right" maxlength="64" id="find_desc_ext" name="place_name" tabindex="1" value="" >
			
		</p>
		<p>
			<label for="find_loc_ext">��� ����� <em> </em></label>
			<?php echo getTypesHTMLCode()?>
		</p>

		<p>
			<label for="find_loc_ext">��� <em> </em></label>
			<?php echo getCitiesHTMLCode();?>
			
			</p>
		<input type="hidden" name="source" value="main">

		<button type="submit" id="ex_submit_button" class="form_img_btn" tabindex="3"></button>

	</form>
	</div>

	<br>
	<h1>����� ��� ���� �������:</h1>
	<div id="external_search">
	<form method="post" action="./present_reviewers.php" name="external_search"> 
		<p>
			<label for="find_desc_ext">����� <em>���� �������</em></label> 
			<input type="text" maxlength="64" id="find_desc_ext" name="find_reviewer" tabindex="1" value="">	
		</p>

		<input type="hidden" name="source" value="find_review">

		<button type="submit" id="ex_submit_button" class="form_img_btn" tabindex="3"></button>
	</form>
	</div>
	
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>
