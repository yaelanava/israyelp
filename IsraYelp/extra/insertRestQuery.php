<?php

include '../utils/functions.php';

$mysqli = getMysqliConnection();
	
$name = "�����";
$another_name = "Lucas";
$city_id = 1;
$address = "���\"� 5, �� ����";
$phone = "03-5252565, 03-5686820";
$delivery = "��";
$invalid_access = "��";
$events = "��";
$parking = "��";
$outside = "��";
$kosher = "��";
$child_friendly = "��";
$romantic = "��";
$smoking = "��";
//				NULL, '$name', '$address', '$city_id', '$phone', 'events,take_away', '0', '0', '1', '1', '1', '1', '1', '0', '1', '1', '1'

//$name = "Niho";
//$city_id = 2;
//$address = "��� ��� 9 - �.�. ���, ����� �����";
//$phone = "057-222-3333 (����� 4222)";
//				NULL, '$name', '$address', '$city_id', '$phone', 'events,take_away', '0', '0', '0', '1', '1', '1', '1', '0', '1', '1', '1'

//$name = "��� �����";
//$city_id = 1;
//$address = "����� 8 - ��� �� ����, �� ����";
//$phone = "077-2133007";
//				NULL, '$name', '$address', '$city_id', '$phone', 'events,take_away', '0', '0', '0', '1', '1', '1', '1', '0', '1', '1', '1'

//$name = "����";
//$another_name = "Pasha";
//$city_id = 1;
//$address = "������ 8, �� ����";
//$phone = "03-5617778";
//				NULL, '$name', '$another_name', '$address', '$city_id', NULL, NULL, '$phone', 'events,meat,mediterranean', '0', '0', '0', '1', '1', '1', '0', '1', '0', '1', '0'


//$name = "Black Bar 'n' Burger";
//$another_name = "���";
//$city_id = 1;
//$address = "����� 23 - ��� ����� , �� ����";
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