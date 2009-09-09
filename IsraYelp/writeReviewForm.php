<?php 

session_start();
include './utils/functions.php';

$error = false;
if (isset($_GET['error'])) {
	$error = true;
}

$biz_id = $_GET['biz_id'];
$biz_type = $_GET['biz_type'];

$mysqli = getMysqliConnection();
$query_biz = "SELECT * FROM `$biz_type` WHERE id=$biz_id";
$result_biz = $mysqli->query($query_biz);
$biz = mysqli_fetch_assoc($result_biz);
$biz_name = $biz['name'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> כתוב ביקורת | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,ביקורת, מסעדות, בתי קולנוע, מרפאות,מספרות,בתי קפה,חנויות">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body dir="rtl">

<div id="head">
		<div id="logo">
			<A href="./main.php"></A>
		</div>
		<div id="register">
			<p><?php if (session_is_registered('username')) print("אתה מחובר כ-".$_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>

<div id="navContainer">
		<ul>			
			<LI class="header" id="writeReview"><A href="./write_review.php" >כתוב ביקורת</A> | </LI>
			<LI class="header" id="findReview"><A href="./find_review.php" >חפש ביקורת</A></LI>
						
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "./login.php?logout=1";} else{echo "./login.php";}?> > <?php if (session_is_registered('username')) {echo "התנתק";} else {echo "כנס";}?></A></LI>
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "about_me.php?external_user=".$_SESSION['user_id']."";} else{echo "signup.php?profile=1";}?> >החשבון שלי </A> | </LI>
		</ul>
</div>

<div id="bodyContainer">
	<H1>כתוב את הביקורת שלך עבור <?php echo $biz_name?></H1>
	<?php if ($error) echo "<br/><p style=\"color:red\">* חובה למלא את כל השדות.</p>"?>
	<form method="post" action="./submitReview.php" name="review_rate_form" id="review_rate_form">
				<dl id="newBizForm">
					<dt><strong>דירוג</strong><br/></dt>
					<dd class="clearfix">
						<div id="starRating">
							<input type="radio" name="grading" value="1" /> 1
							<input type="radio" name="grading" value="2" /> 2
							<input type="radio" name="grading" value="3" /> 3
							<input type="radio" name="grading" value="4" /> 4
							<input type="radio" name="grading" value="5" /> 5
						</div>
<!--						<p id="ratingDescription">לחץ על הכוכב כדי לדרג</p>-->
					</dd>
					
					<dt class="review"><br/><strong>כותרת</strong></dt>
					<dd class="review"><input type="text" name="title" size=50></dd>			
					
					<dt class="review"><br/><strong>הביקורת שלך</strong></dt>
					<dd class="review"><textarea cols="40" rows="8" class="form400"  name="review"></textarea></dd>
				</dl>

		<input type="submit" name="action_select" value="שלח">
		<input type="hidden" name="biz_id" value="<?php echo $biz_id?>">
		<input type="hidden" name="biz_type" value="<?php echo $biz_type?>">
		<em class="smaller grey">* תמיד ניתן למחוק את הביקורת מאוחר יותר</em>
	</form>
</div>

</body>
</html>