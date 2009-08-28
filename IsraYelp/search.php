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
	if($kind =="מסעדה")	{
		$query = "SELECT * FROM `test`.`restaurants` WHERE name='$name' or another_name='$name'";
	}
	
	$result = $mysqli->query($query);
	$count = $result->num_rows;
	if ($count ==1){
		$biz = mysqli_fetch_assoc($result);
		$biz_id = $biz['id'];
		$biz_name = $biz['name'];		
		$city_id = $biz['city_id'];
		$city_name = getCityName($city_id);
		$biz_url = "./restaurants/restaurant.php?rest_id=".$biz_id;
		if ($city==$city_name){
			if ($source == "write_review"){
				if (!session_is_registered('username')) { 
							header("Location: ./login.php?returnUrl=".$biz_url);
						} else {
							header("Location: ./writeReviewForm.php?biz_id=".$biz_id."&biz_name=".$biz_name."&biz_type="."restaurants");			
						}					
			}
			if ($source == "main"){
				header("Location:./restaurants/restaurant.php?biz_id=".$biz_id);
			}
		}
		else {
			header("Location: ./new_place.php?place_name=".$name."&place_city=".$city."&place_type=".$kind);
		}
	}
	else {
		header("Location: ./new_place.php?place_name=".$name."&place_city=".$city."&place_type=".$kind);
	}
}


