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

<?php echo getHeadHTMLCode()?>
<?php echo getNavHTMLCode()?>

<div  id="bodyContainer">
	<form action="uploading_pic.php" method="post" enctype="multipart/form-data">
		<table align="center" cellpadding="5">
			<tr>
				<td> ��� ����: </td>
				<td> <input name="image" type="file" size="30"> </td>			
			</tr>
			<tr>				
				<td colspan="2" align=center> <input type="submit" value="���� �����"> </td>
			</tr>
			<tr>
				<td colspan="2" align=center> 
					<br>
					<a href="./user_profile.php"> ������? ���� ������ ���.</a>				
				</td>							
			</tr>	
		</table>
	</form>
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>