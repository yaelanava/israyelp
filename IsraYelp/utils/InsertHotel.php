<?php

include './functions.php';

$mysqli = getMysqliConnection();

//$name = "��";
//$another_name = "Dan";
//$city_id = 1;
//$address = "������ 99 , �� ����";
//$phone = "03-5202525";
//$lat=32.079496;
//$lon=34.767931;
//$stars=5;

$query = "INSERT INTO `hotels` (`id`, `name`, `another_name`, `address`, `city_id`, `lat`, `lon`, `phone_number`, `category`, `grading`, `num_reviews`, `link`, `invalid_access`, `parking`, `spa`, `pool`, `kosher`, `kids_club`, `intranet`, `tv`, `mini_bar`, `jim`) VALUES
(NULL, '��', 'Dan', '������ 99 , �� ����', 1, 32.079496, 34.767931, '03-5202525', 'hotels', 0, 0, NULL, '��', '��', '��', '��', '��', '��', '��', '��', '��', '��');

";

$result = $mysqli->query($query);
if ($result) {
	echo "nice";
} else {
	echo "shit!";
}
?>