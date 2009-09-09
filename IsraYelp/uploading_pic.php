<?php
	session_start();
	include './utils/functions.php';
	$error_msg=0;
	if (isset($_FILES['image']) && ('' != $_FILES['image'])) {
		$id = $_SESSION['user_id'];
		$temp_name = $_FILES['image']['tmp_name'];
		$real_namr= $_FILES['image']['name'];;
		$ending=end(explode(".",
            strtolower($real_namr)));
		$allowedExtensions = array("jpg","jpeg","gif","png");
		if(!in_array($ending, $allowedExtensions))
			$error_msg="הקובץ שהעלאת אינו בעל סיומת מתאימה, נסה שוב";
		else{
			$destination = "./users_pics/".$id;
			copy($temp_name, $destination);
		}
	}
	else {
		header("location:upload_failed.php");	
		die(0);
	}
?>

<html>
<head>
	<title>העלאת תמונה |IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body dir="rtl">
<div id="head">
		<div id="logo">
			<A href="./main.php">Yelp</A>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>
<div id="bodyContainer_Centered">
	<p> <?php
			if($error_msg){
				$html= "$error_msg
				<br><br>
				<A href=\"./upload_pic.php\"> נסה שוב </A>"; 
			}
			else{
				$html ="התמונה הועלתה בהצלחה.
				<br><br>
				<A href=\"./about_me.php?external_user=".$_SESSION['user_id']."\"> חזור לחשבון שלי </A>"; 
			}
			echo $html;
	?>
	</div>
</body>
</html>