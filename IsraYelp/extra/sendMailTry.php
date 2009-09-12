<?php
date_default_timezone_set('Israel');

$to = "yael.amar@gmail.com";
$subject = "My subject1";
$txt = "Hello world!";
$headers = "From: webmaster@example.com";

if (mail($to,$subject,$txt,$headers)) {
	echo "yes!";
} else {
	echo "No :(";
}

echo "\n";

$message = "Line 1\nLine 2\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70);

date_default_timezone_set('Israel');
// Send
if (mail('yael.amar@gmail.com', 'My Subject2', $message, "From: webmaster@example.com")){
	echo "succeded :)";
} else {
	echo "No!!!";
}

?>