<?php 
	session_start();
	include './utils/functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>הוספת מקום חדש - IsraYelp </title>
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
<H1>המקום אינו מופיע במאגר שלנו.</H1>
<H3>ספר לנו על המקום החדש!</H3>
<div class="box" id="signupForm">
	<form method="post" action="sending_new_place.php" >
		<table cellpadding="5" cellspacing="5" border="0">
		
				<tr>
					<td>שם המקום:</td> 
					<td><input name="new_name" size="40" value=" <?php echo $_GET['place_name'] ?> "></td>
				</tr>
				<tr>
					<td>רחוב:</td>
					<td> <input name="new_street" size="40"></td>	
				</tr>
				<tr>
					<td>עיר:</td>
					<td> <input name="new_city" size="40" value="<?php echo $_GET['place_city'] ?>"></td>	
				</tr>
				<tr>
					<td>ביקורת:</td>
					<td> <textarea  name="new_comment" rows="5" cols="50" class="form400"></textarea>
				</tr>
				<tr>
					<td>דוא"ל כותב הביקורת:</td> 
					<td><input name="new_email" size="40" value=""></td>
				</tr>
				<tr>
					<td style="text-align:right;"> <input type="submit" value="שלח"></td>
					<td></td>
				</tr>
				
		</table>		
	</form>
</div>
</div>
	<?php echo getFooterHTMLCode()?>
</body>
</html>
