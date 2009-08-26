<?php

function getMysqliConnection(){
	static $mysqli;
	if (!$mysqli){
		$mysqli = new mysqli('localhost', 'administrator', '', 'test');
		
		/* check connection */
		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}
	}	
	return $mysqli;
}

function getUserPictureSrc($user_id, $prefix){
	$src = $prefix."users_pics/".$user_id;
	if (!file_exists($src)) {
		$src = $prefix."users_pics/blank_user_medium.gif";
	}
	return $src;
}

function getCityName($city_id){
	$city_query = "SELECT * FROM `test`.`cities` WHERE id=$city_id";
	$city_result = getMysqliConnection()->query($city_query);
	$city = mysqli_fetch_assoc($city_result);
	return $city['name'];
}

?>