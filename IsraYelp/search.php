<?php 
session_start();

include './utils/functions.php';

if ((isset($_POST['place_name']) && ('' != $_POST['place_name'])) &&
	(isset($_POST['place_kind']) && ('' != $_POST['place_kind'])) &&
	(isset($_POST['city']) && ('' != $_POST['city'])))
	{
		search();
	} else {
		echo "חלק מהשדות היו ריקים. בבקשה נסה שנית";
	die(0);
	}

function search(){
	$name = $_POST['place_name'];
	$kind = $_POST['place_kind'];
	$city = $_POST['city'];
	
	$_SESSION['place_name']= $name;
	$_SESSION['place_city']= $city;
	
	$mysqli = getMysqliConnection();	
	$query = "SELECT * FROM `test`.`restaurants` WHERE name='$name'";
	$result = $mysqli->query($query);
	$count = $result->num_rows;
		
		if ($count != 0 && $city=="תל-אביב" && $kind=="מסעדה") {
			//todo
			header("Location: ./tel-aviv/restaurants/lukas_writeReview.php");		
		}
		else {
			header("Location: ./new_place.php");
			//echo "המקום אינו נמצא במאגר";
			
		}

	}
