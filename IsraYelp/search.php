<?php 
session_start();

include './utils/functions.php';

$name = $_POST['place_name'];
$kind = $_POST['place_kind'];
$city = $_POST['place_city'];
//$grading = $_POST['grading'];
//$grading_query = $grading=="all" ? "" : "and grading=$grading";

$source = $_POST['source'];
$city_id = getCityID($city);

if ('' == $_POST['place_name']){
	header ("location: ./".$kind.".php?city_id=".$city_id);
	
} else {
	$name = $_POST['place_name'];
	$query = "SELECT * FROM `$kind` WHERE  city_id=$city_id and  (name LIKE '%$name%' or another_name LIKE '%$name%')";
	$mysqli = getMysqliConnection();
	$result = $mysqli->query($query);
	$count = $result->num_rows;

	if ($count == 1){
		$biz = mysqli_fetch_assoc($result);
		$biz_id = $biz['id'];
		$biz_name = $biz['name'];		
		$biz_urli = getBizURL($kind, $biz_id);
		
		if ($source == "write_review"){
			if (!isset($_SESSION['username'])) { 
					header("Location: ./login.php?returnUrl=".$biz_urli);
				} 
			else {
					header("Location:./writeReviewForm.php?biz_type=".$kind."&biz_id=".$biz_id);				
				}					
		}
		else if ($source == "main"){
			header("Location:".$biz_urli);
		}

	} else if ($count > 1){
			$title = "<span><b> נמצאו </b></span>".$count."<span><b> מקומות מתאימים: </b></span>";
			$html = "<ul>";
			while ($biz = mysqli_fetch_assoc($result)){		
				$biz_id = $biz['id'];
				$biz_name = $biz['name'];
				$biz_urli = getBizURL($kind, $biz_id);				
				if ($source == "write_review"){
					if (!isset($_SESSION['username'])) { 
						header("Location: ./login.php?returnUrl=".$biz_urli);
					} else {				
						$url = "./writeReviewForm.php?biz_type=$kind&biz_id=".$biz_id;						
					}
				}
				else if ($source == "main"){
					$url = $biz_urli;
				}
				$biz_address = $biz['address'];
				$html .= "<li><span><b><a href=".$url.">$biz_name</a></b></span>".", $biz_address</li>" ;
			}	
			$html .= "</ul>";	
	
	} else {
		header("Location: ./new_place.php?place_name=$name&place_city=$city");	
	}	
}

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
	<?php echo $title;?>		
	<br/>
	<br/>	
	<?php 	echo $html;?>			
</div>

<?php echo getFooterHTMLCode()?>

</body>
</html>