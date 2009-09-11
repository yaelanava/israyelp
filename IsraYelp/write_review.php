<?php 
session_start();
include './utils/functions.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>כתוב ביקורת | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">

	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body class= "us" id="IsraYelp_main_body" dir="rtl">

<?php echo getHeadHTMLCode()?>
<?php echo getNavHTMLCode()?>


<div id="bodyContainer">
<h1>עבור איזה עסק תרצה לכתוב ביקורת?</h1>
	<div id="external_search">
	<form method="post" action="./search.php" name="external_search"> 
		<p>
			<label for="find_desc_ext"> שם המקום <em> שם העסק</em></label> 
			<input type="text" align="right" maxlength="64" id="find_desc_ext" name="place_name" tabindex="1" value="" >
			
		</p>
		<p>
			<label for="find_loc_ext">סוג המקום <em> </em></label>
			<?php echo getTypesHTMLCode()?>
		</p>

		<p>
			<label for="find_loc_ext">עיר <em> </em></label>
			<?php echo getCitiesHTMLCode();?>
		</p>
		<input type="hidden" name="source" value="write_review">
		<button type="submit" id="ex_submit_button" class="form_img_btn" tabindex="3"></button>

	</form>
	</div>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>