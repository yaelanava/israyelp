<?php
$name = "דן";
$another_name = "Dan";
$city_id = 1;
$address = "הירקון 99 , תל אביב";
$phone = "03-5202525";
$lat=32.079496;
$lon=34.767931;
$stars=5;

$query = "INSERT INTO `test`.`restaurants` (
				`id` ,
				`name` ,
				`another_name` ,
				`address` ,
				`city_id` ,
				`lat` ,
				`lon` ,
				`phone_number` ,
				`grading` ,
				`num_critiques` ,
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
				NULL, '$name', '$another_name', '$address', '$city_id', NULL, NULL, '$phone', 'events,meat', '0', '0', '1', '1', '1', '1', '0', '0', '1', '1', '0'
			);";

$result = $mysqli->query($query);
?>