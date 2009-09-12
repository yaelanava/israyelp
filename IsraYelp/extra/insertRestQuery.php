<?php

include '../utils/functions.php';

$mysqli = getMysqliConnection();
	
$name = "לוקאס";
$another_name = "Lucas";
$city_id = 1;
$address = "מזא\"ה 5, תל אביב";
$phone = "03-5252565, 03-5686820";
$delivery = "כן";
$invalid_access = "כן";
$events = "כן";
$parking = "כן";
$outside = "כן";
$kosher = "לא";
$child_friendly = "כן";
$romantic = "כן";
$smoking = "כן";
//				NULL, '$name', '$address', '$city_id', '$phone', 'events,take_away', '0', '0', '1', '1', '1', '1', '1', '0', '1', '1', '1'

//$name = "Niho";
//$city_id = 2;
//$address = "משה בקר 9 - א.ת. ישן, ראשון לציון";
//$phone = "057-222-3333 (שלוחה 4222)";
//				NULL, '$name', '$address', '$city_id', '$phone', 'events,take_away', '0', '0', '0', '1', '1', '1', '1', '0', '1', '1', '1'

//$name = "קפה נמרוד";
//$city_id = 1;
//$address = "האנגר 8 - נמל תל אביב, תל אביב";
//$phone = "077-2133007";
//				NULL, '$name', '$address', '$city_id', '$phone', 'events,take_away', '0', '0', '0', '1', '1', '1', '1', '0', '1', '1', '1'

//$name = "פאשה";
//$another_name = "Pasha";
//$city_id = 1;
//$address = "הארבעה 8, תל אביב";
//$phone = "03-5617778";
//				NULL, '$name', '$another_name', '$address', '$city_id', NULL, NULL, '$phone', 'events,meat,mediterranean', '0', '0', '0', '1', '1', '1', '0', '1', '0', '1', '0'


//$name = "Black Bar 'n' Burger";
//$another_name = "בלק";
//$city_id = 1;
//$address = "הברזל 23 - רמת החייל , תל אביב";
//$phone = "03-6441000";

$query = "INSERT INTO `restaurants` (
				`id` ,
				`name` ,
				`another_name` ,
				`address` ,
				`city_id` ,
				`lat` ,
				`lon` ,
				`phone_number` ,
				`category` ,
				`grading` ,
				`num_reviews` ,
				`link` ,
				`delivery` ,
				`invalid_access` ,
				`events` ,
				`parking` ,
				`outside` ,
				`kosher` ,
				`child_friendly` ,
				`romantic` ,
				`smoking`  
			)
			VALUES (
				NULL, '$name', '$another_name', '$address', '$city_id', NULL, NULL, '$phone', 'events,take_away', '0', '0', NULL, '$delivery', '$invalid_access', '$events', '$parking', '$outside', '$kosher', '$child_friendly', '$romantic', '$smoking'
			);";

$result = $mysqli->query($query);
if ($result) {
	echo "nice";
} else {
	echo "shit!";
}
?>