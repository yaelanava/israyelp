<?php 
session_start();

include './utils/functions.php';

$name = $_POST['place_name'];
$kind = $_POST['place_kind'];
$city = $_POST['place_city'];
$source = $_POST['source'];
$city_id = getCityID($city);



if ('' == $_POST['place_name']){
	header ("location: ./".$kind.".php?city_id=".$city_id);
	die(0);
}
else {
	$name = $_POST['place_name'];
	$query = "SELECT * FROM `$kind` WHERE  city_id='$city_id' and  name LIKE '%$name%' or another_name LIKE '%$name%'";
	$mysqli = getMysqliConnection();
	$result = $mysqli->query($query);
	$count = $result->num_rows;

	if ($count == 1){
		$biz = mysqli_fetch_assoc($result);
		$biz_id = $biz['id'];
		$biz_name = $biz['name'];		
		$biz_urli = getBizURL($kind, $biz_id);
		
		if ($source == "write_review"){
			if (!session_is_registered('username')) { 
					header("Location: ./login.php?returnUrl=".$biz_urli);
					die(0);
				} 
			else {
					header("Location:./writeReviewForm.php?biz_type=".$kind."&biz_id=".$biz_id);				
					die(0);								
				}					
		}
		else if ($source == "main"){
			header("Location:".$biz_urli);
			die(0);
		}
	}
	else if ($count > 1){
		$title = "<span><b> ����� </b></span>".$count."<span><b> ������ �������: </b></span>";
		$html = "<ul>";
		while ($biz = mysqli_fetch_assoc($result)){		
			$biz_id = $biz['id'];
			$biz_name = $biz['name'];
			$biz_urli = getBizURL($kind, $biz_id);				
			if ($source == "write_review"){
				if (!session_is_registered('username')) { 
					header("Location: ./login.php?returnUrl=".$biz_urli);
					die(0);
				}
				else{
			
					$url = "./writeReviewForm.php?biz_type=".$kind."&biz_id=".$biz_id;
					
				}
			}
			else if ($source == "main"){
				$url = $biz_urli;
			}
			$biz_address = $biz['address'];
			$html .= "<li><span><b><a href=".$url.">".$biz_name."</a></b></span>".", ".$biz_address."</li>" ;
		}	
		$html .= "</ul>";	
	}
	else {
		header("Location: ./new_place.php?place_name=".$name."&place_city=".$city);
		die(0);
	}	
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title> ������ ����� | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
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
			<p><?php if (session_is_registered('username')) print("��� ����� �-" . $_SESSION['username']) ?></p>
		</div>
		<div id="leftEdge"></div>
		<div id="rightEdge"></div>
</div>

<div id="navContainer">
		<ul>
			
			<LI class="header" id="writeReview"><A   href="./write_review.php" >���� ������</A> | </LI>
			<LI class="header" id="findReview"><A   href="./find_review.php" >��� ������</A></LI>
			
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "login.php?logout=1";} else{echo "login.php";}?> > <?php if (session_is_registered('username')) {echo "�����";} else {echo "���";}?></A></LI>
			<LI class="header_login"><A   href=<?php if (session_is_registered('username')) {echo "about_me.php?external_user=".$_SESSION['user_id']."";} else{echo "signup.php?profile=1";}?> >������ ��� </A> | </LI>
		</ul>
</div>

<div id="bodyContainer">
		<?php echo $title;?>		
		<br/>
		<br/>	
		<?php 	echo $html;?>			
</div>

		<?php echo getFooterHTMLCode()?>

</body>
</html>
