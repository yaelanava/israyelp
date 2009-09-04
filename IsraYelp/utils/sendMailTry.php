<?php
date_default_timezone_set('Israel');

$to = "yael.amar@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
			"CC: yaelamar@post.tau.ac.il";

if (mail($to,$subject,$txt,$headers)) {
	echo "yes!";
}else {
	echo "No :(";
}

?>