<?php

$mysqli = new mysqli('localhost', 'administrator', '', 'test');

$name = "����� �����";
$english_name = "Rishon Le Zion";

$query = "INSERT INTO `test`.`cities` (
			`id` ,
			`name` ,
			`english_name 
		)
		VALUES (
			NULL , '$name', '$english_name'
		);";

$result = $mysqli->query($query);

?>