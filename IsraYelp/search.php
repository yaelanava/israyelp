<?php 
session_start();

include './utils/functions.php';

if ((isset($_POST['place_name']) && ('' != $_POST['place_name'])))
	{
		search();
	} else {
		echo "��� ������ ��� �����. ����� ��� ����";
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
		$restaurant = mysqli_fetch_assoc($result);
		$restaurant_id = $restaurant['id'];
		$restaurant_name = $restaurant['name'];		
		$city_id = $restaurant['city_id'];
		$city_name = getCityName($city_id);
		if ($city==$city_name && $kind=="�����"){
			if ($source == "write_review"){
				header("Location: ./restaurants/writeRestaurantReview.php?rest_id=".$restaurant_id."&rest_name=".$restaurant_name);			
			}
			if ($source == "main"){
				header("Location:./restaurants/restaurant.php?rest_id=".$restaurant_id);
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


