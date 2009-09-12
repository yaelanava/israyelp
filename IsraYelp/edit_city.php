<?php 
	
session_start();

include './utils/functions.php';
	
if (isset($_POST['new_city']) && ('' != $_POST['new_city'])) {
	$new_city = mysql_escape_string($_POST['new_city']);
	$id = $_SESSION['user_id'];
	
	$mysqli = getMysqliConnection();		
	$update_query="UPDATE `users` SET `city` = '$new_city' WHERE `users`.`id` =$id LIMIT 1 ;";
	if ($mysqli->query($update_query)) {
		header("location: edit_successes.php");
	}	
}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css"> 
			
	<title>עדכון עיר | IsraYelp</title>

</head>
<body>

<?php echo getHeadHTMLCode()?>


<div id="bodyContainer" dir="rtl">
	<div class="box" >
			
			<form method="post" action="edit_city.php" >
				
				<table  border="0" align="center">
						<tr>
							<td><H1 >עדכון עיר מגוריך</H1></td> 
						</tr>
						<tr>
							<td>אנא הכנס את <br>
							עיר מגוריך החדשה:
							</td> 
							<td><input name="new_city" size="35"></td>
							<?php if (isset($_POST['new_city']) && ('' == $_POST['new_city'])) echo "<td style=\"color:red;\">* שדה חובה</td>"?>
						</tr>
						<tr>
							<td></td>
							<td style="text-align:right;"> <input type="submit" value="עדכן" /></td>
												
						</tr>
						<tr>
							<td></td>
							<td>
								<br>
								<?php
									$html = "<A href=\"./user_profile.php\"> התחרטת? חזור לחשבון שלך.</A>"; 
									echo $html;
								?>
							</td>
												
						</tr>
				</table>
			</form>
		</div>
	</div> 
</body>
</html>