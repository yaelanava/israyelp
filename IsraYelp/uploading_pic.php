<?php
session_start();

include './utils/functions.php';

$id = $_SESSION['user_id'];

$error_msg = 0;

if (isset($_FILES['image']) && ('' != $_FILES['image']['name'])) {
	$real_name = $_FILES['image']['name'];	
	$ending = end(explode(".", strtolower($real_name)));
	$allowedExtensions = array("jpg","jpeg","gif","png");
	if (!in_array($ending, $allowedExtensions)) {
		$error_msg="����� ������ ���� ��� ����� ������.";
	} else {
		$temp_name = $_FILES['image']['tmp_name'];		
		$destination = "./users_pics/".$id;
		if (copy($temp_name, $destination)) {
			header("Location: ./user_profile.php?user_id=$id");
		} else {
			$error_msg = "����� ������ �����.";				
		}
	}
} else {
	$error_msg = "���� ����� ����.";	
}

?>

<html>
<head>
	<title>����� ����� |IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User Reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel, review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css">  	
</head>

<body dir="rtl">
<?php echo getHeadHTMLCode()?>

<div id="bodyContainer_Centered">
	<p> 
		<?php
			$html= "$error_msg
					<br><br>
					<A href=\".//uploadUserPictureForm.php\">��� ���� </A> �� <A href=\"./user_profile.php?user_id=$id\">���� ������ ���.</A>"; 				
			echo $html;
		?>
	</p>
</div>
</body>
</html>