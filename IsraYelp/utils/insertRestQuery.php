<?php

include '../utils/functions.php';

$mysqli = getMysqliConnection();
	
//$name = "�����";
//$city_id = 1;
//$address = "���\"� 5, �� ����";
//$phone = "03-5252565, 03-5686820";
//				NULL, '$name', '$address', '$city_id', '$phone', 'events,take_away', '0', '0', '1', '1', '1', '1', '1', '0', '1', '1', '1'

//$name = "Niho";
//$city_id = 2;
//$address = "��� ��� 9 - �.�. ���, ����� �����";
//$phone = "057-222-3333 (����� 4222)";
//				NULL, '$name', '$address', '$city_id', '$phone', 'events,take_away', '0', '0', '0', '1', '1', '1', '1', '0', '1', '1', '1'

$name = "��� �����";
$city_id = 1;
$address = "����� 8 - ��� �� ����, �� ����";
$phone = "077-2133007";
//				NULL, '$name', '$address', '$city_id', '$phone', 'events,take_away', '0', '0', '0', '1', '1', '1', '1', '0', '1', '1', '1'

$query = "INSERT INTO `test`.`restaurants` (
				`id` ,
				`name` ,
				`address` ,
				`city_id` ,
				`phone_number` ,
				`type_rest` ,
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
				NULL, '$name', '$address', '$city_id', '$phone', 'events,take_away', '0', '0', '0', '1', '1', '1', '1', '0', '1', '1', '1'
			);";

$result = $mysqli->query($query);
?>