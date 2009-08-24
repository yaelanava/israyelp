<?php

function getUserPictureSrc($user_id, $prefix){
	$src = $prefix."users_pics/".$user_id.".gif";
	if (!file_exists($src)) {
		$src = $prefix."users_pics/blank_user_medium.gif";
	}
	return $src;
}

?>