<?php 
session_start();

include './utils/functions.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title> העלאת תמונה </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body dir="rtl">

<?php echo getHeadHTMLCode()?>
<?php echo getNavHTMLCode()?>

<div  id="bodyContainer">
	<form action="uploading_pic.php" method="post" enctype="multipart/form-data">
		<table align="center" cellpadding="5">
			<tr>
				<td> בחר קובץ: </td>
				<td> <input name="image" type="file" size="30"> </td>			
			</tr>
			<tr>				
				<td colspan="2" align=center> <input type="submit" value="העלה תמונה"> </td>
			</tr>
			<tr>
				<td colspan="2" align=center> 
					<br>
					<a href="./user_profile.php"> התחרטת? חזור לחשבון שלך.</a>				
				</td>							
			</tr>	
		</table>
	</form>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>