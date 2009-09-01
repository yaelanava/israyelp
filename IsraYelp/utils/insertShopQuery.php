<?php

include './functions.php';

$mysqli = getMysqliConnection();

$name = "מרכז עזריאלי";
$another_name = "Azrieli";
$city_id = 1;
$address = "דרך מנחם בגין 132, תל אביב";
$phone = "03-6081199";
$type = "Shopping Centers";
$hours = "09:00-22:00";

$query = "INSERT INTO `test`.`shopping` (
			`id`, 
			`name`, 
			`another_name`, 
			`address`, 
			`city_id`, 
			`lat`, 
			`lon`, 
			`phone_number`, 
			`category`, 
			`grading`, 
			`num_critiques`, 
			`hours`, 
			`invalid_access`, 
			`parking`
		) VALUES (
			NULL, '$name', '$another_name', '$address', '$city_id', NULL, NULL, '$phone', '$type', '0', '0', '$hours', '1', '1'
		);";
		
$result = $mysqli->query($query);
if ($result) {
	echo "yes.";
} else {
	echo "No!";
}
?>