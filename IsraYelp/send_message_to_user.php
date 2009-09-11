<?php
	$real_user_email = $_POST['real_user_email'];
	$ext_user_email = $_POST['ext_user_email'];
	$inner_message = $_POST['message'];
	$title = $_POST['title'];
	$real_name = $_POST['real_name'];
	$ext_user=$_POST['ext_id'];
	
	$message .= $title;
	$message .= "\n";
	$message .= $inner_message;
	
	$message;
	$subject = "Message By: ".$real_name;
	$body = $message;
	
	$error_msg=0;
	
	if (!mail($ext_user_email, $subject, $body, $real_user_email)) {
		$error_msg="שליחת המייל נכשלה.";
 	}
 ?>
 
 <html>
<head>
	<title>שליחת הודעה |IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body dir="rtl">
<?php echo getHeadHTMLCode()?>

<div id="bodyContainer_Centered">
	<p> <?php
			if($error_msg){
				$html= "$error_msg
				<br><br>
				<A href=\"./about_me.php?external_user=".$ext_user."\"> נסה שוב </A>"; 
			}
			else{
				$html ="ההודעה נשלחה בהצלחה.
				<br><br>
				<A href=\"./about_me.php?external_user=".$ext_user."\"> חזור לחשבון שלי </A>"; 
			}
			echo $html;
	?>
	</div>
</body>
</html>