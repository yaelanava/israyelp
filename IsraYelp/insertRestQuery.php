<?php
$name = "мечас";
	$query = "INSERT INTO `test`.`restaurants` (
			`name` ,
			`city` ,
			`street` ,
			`type_food` ,
			`type_rest` ,
			`grading` ,
			`num_critiques` ,
			`id` 
			)
			VALUES (
			'$name', 'f', 'f', NULL , NULL , NULL , '0', NULL 
			);";
	$result = $mysqli->query($query);

?>