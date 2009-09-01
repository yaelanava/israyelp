<?php 
session_start();

include './utils/functions.php';

$kind = $_POST['place_kind'];
$city = $_POST['place_city'];
$city_id = getCityID($city);

if ($kind=="מסעדה"){
	if ('' == $_POST['place_name']){
		header("location: ./restaurants/restaurants.php?city_id=".$city_id);	
	}
	else{
		$name = $_POST['place_name'];
		$query = "SELECT * FROM `test`.`restaurants` WHERE  city_id='$city_id' and  name LIKE '%$name%' or another_name LIKE '%$name%'";
		$biz_url_prefix = "./restaurants/restaurant.php?biz_id=";
		$biz_type = "restauarants";		

		search($query,$biz_url_prefix,$biz_type);	
	}	
}
if ($kind=="אתר קניות"){
	if ('' == $_POST['place_name']){
		header("location: ./shopping/shopping.php?city_id=".$city_id);		}
	else{
		$name = $_POST['place_name'];		
		$query = "SELECT * FROM `test`.`shopping` WHERE city_id='$city_id' and name LIKE '%$name%' or another_name LIKE '%$name%' ";
		$biz_url_prefix = "./shopping/shop.php?biz_id=";
		$biz_type = "shopping";
		search($query,$biz_url_prefix,$biz_type);		
	}	
}


function search($query,$biz_url_prefix,$biz_type){
	$name = $_POST['place_name'];
	$kind = $_POST['place_kind'];
	$city = $_POST['place_city'];
	$source = $_POST['source'];
	
	$mysqli = getMysqliConnection();
	$result = $mysqli->query($query);
	$count = $result->num_rows;

	if ($count == 1){
		$biz = mysqli_fetch_assoc($result);
		$biz_id = $biz['id'];
		$biz_name = $biz['name'];		
		$biz_url = $biz_url_prefix.$biz_id;
		
		if ($source == "write_review"){
			if (!session_is_registered('username')) { 
						header("Location: ./login.php?returnUrl=".$biz_url);
					} else {
						header("Location: ./writeReviewForm.php?biz_id=".$biz_id."&biz_name=".$biz_name."&biz_type=".$biz_type);
								
					}					
		}
		if ($source == "main"){
			header("Location:./restaurants/restaurant.php?biz_id=".$biz_id);
		}
	}
	else if ($count > 1){
/*		$html="";
		while ($biz = mysqli_fetch_assoc($result)){		
		$html .= "	<table cellpadding=\"10\" cellspacing=\"1\" border=\"0\" >
						<tr>
							<td><span><b><a href=".$biz['biz_url']."\">".$biz['biz_name']."</a></b></span></td> 
						</tr>
					</table>";
		}		
		$_SESSION['local_html']=$html;*/
		header("Location: ./present_places.php?count=".$count);
	}

	else {
		header("Location: ./new_place.php?place_name=".$name."&place_city=".$city."&place_type=".$kind);
	}
}
?>

