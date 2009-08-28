<?php 
session_start();

include './utils/functions.php';

if ((isset($_POST['place_name']) && ('' != $_POST['place_name'])))
	{
		search();
	} else {
		echo "חלק מהשדות היו ריקים. בבקשה נסה שנית";
	die(0);
	}

function search(){

	$name = $_POST['place_name'];
	$kind = $_POST['place_kind'];
	$city = $_POST['place_city'];
	$source = $_POST['source'];

	
	$mysqli = getMysqliConnection();	
	$query = "SELECT * FROM `test`.`restaurants` WHERE name='$name' or another_name='$name'";
	$result = $mysqli->query($query);
	$count = $result->num_rows;
	if ($count ==1){
		$rest = mysqli_fetch_assoc($result);
		$rest_id = $rest['id'];
		$rest_name = $rest['name'];		
		$city_id = $rest['city_id'];
		$city_name = getCityName($city_id);
		$rest_url = "./restaurants/restaurant.php?rest_id=".$rest_id;
		if ($city==$city_name && $kind=="מסעדה"){
			if ($source == "write_review"){
				if (!session_is_registered('username')) { 
							header("Location: ./login.php?returnUrl=".$rest_url);
						} else {
							header("Location: ./restaurants/writeRestaurantReview.php?rest_id=".$rest_id."&rest_name=".$rest_name);			
						}					
			}
			if ($source == "main"){
				header("Location:./restaurants/restaurant.php?rest_id=".$rest_id);
			}
		}
		else {
			header("Location: ./new_place.php?place_name=".$name."&place_city=".$city);
		}
	}
	else {
		header("Location: ./new_place.php?place_name=".$name."&place_city=".$city);
	}
}


