<?php 
session_start();

include './utils/functions.php';


$user_id=$_SESSION['user_id'];											
$result = $_GET['result'];
$count = $_GET['count'];

$local_html=$_SESSION['local_html'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> תוצאות חיפוש | IsraYelp</title>
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

<div id="bodyContainer">
		<span><b> נמצאו </b></span> <?php echo $count;?> <span><b> מקומות מתאימים </b></span>
		<br/>
		<br/>	
		<?php 	
			echo $_SESSION['local_html'];
		?>			
</div>

<?php //echo getFooterHTMLCode()?>

</body>
</html>