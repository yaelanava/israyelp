<?php session_start();
include './utils/functions.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>חפש | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">

	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	

</head>

<body dir="rtl">

<?php echo getHeadHTMLCode()?>
<?php echo getNavHTMLCode()?>


<div id="bodyContainer">
<h1>חיפוש מקום:</h1>
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
			<?php echo getCitiesHTMLCode()?>			
		</p>
		<!--<p>
			<label for="find_loc_ext">דירוג <em> </em></label>
			<?php echo getGradingHTMLCode()?>
		</p>-->
		<input type="hidden" name="source" value="main">

		<button type="submit" id="ex_submit_button" class="form_img_btn" tabindex="3"></button>

	</form>
	</div>

	<br>
	<h1>חיפוש לפי כותב הביקורת:</h1>
	<div id="external_search">
	<form method="post" action="./present_reviewers.php" name="external_search"> 
		<p>
			<label for="find_desc_ext">כינוי <em>כותב הביקורת</em></label> 
			<input type="text" maxlength="64" id="find_desc_ext" name="reviewer_name" tabindex="1" value="">	
		</p>

		<input type="hidden" name="source" value="find_review">

		<button type="submit" id="ex_submit_button" class="form_img_btn" tabindex="3"></button>
	</form>
	</div>
	
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>
