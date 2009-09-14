<?php 
session_start();

include './utils/functions.php';

$mysqli = getMysqliConnection();

$reviewer = $_POST['reviewer_name'];		
$query = "SELECT * FROM `users` WHERE username='$reviewer'";
$result = $mysqli->query($query);	
$count = $result->num_rows;
$source = $_POST['source'];
$back_url = "$source.php";
		
if ($source == "find"){
	$prefix = "./user_reviews.php?user_id=";
} else if ($source =="find_user"){
	$prefix = "./user_profile.php?user_id=";	
}

if ($count == 0){
	$html = "<p><h5>"."�� ����� ������� ��� ��."."</h5></p>";			
	$html .= "<p><a href=".$back_url.">"."��� ��� ����� ��� �����."."</A>";
} else {
	$html = "<p><h5>"."�����"." ".$count." �������:"."</h5></p>";
	$html .= "<table>";
	while ($user = mysqli_fetch_assoc($result)){
		$html .= "<tr>
					<td>
						<P><div class=\"clearStyles bizPhotoBox\">
							<a href=".$prefix.$user['id']." rel=\"nofollow\"><IMG style=\"WIDTH: 40px; HEIGHT: 40px\" alt=\"������ �� " . $user['username'] ."\" src=\"".getUserPictureSrc($user['id'])."\"></a>
							</div>
						</P>
					</td>
					<td>
						<P><a href=".$prefix.$user['id']." rel=\"nofollow\">".$user['username']."</a>".", ".$user['city']."
						</P>
					</td>
				</tr>";
	}
	$html.="</table>";
}

?>

<html>
<head>
	<title> ��� ����� | IsraYelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
	<meta name="description" content="IsraYelp - User reviews and Recommendations of Top Restaurants, Shopping, Nightlife, Entertainment, Services and More">
	<meta name="keywords" content="Yelp,recommendation,Israel,review,friend,restaurant,dentist,doctor,salon,spa,shopping,store,share,community,massage,sushi,pizza,nails,������, ������, ��� ������, ������,������,��� ���,������">
	
	<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./mystyle.css"> 
</head>

<body dir="rtl">

<?php echo getHeadHTMLCode()?>
<?php echo getNavHTMLCode()?>

<div id="bodyContainer">
	<?php echo $html?>	
</div>	

<?php echo getFooterHTMLCode()?>

</body>
</html>