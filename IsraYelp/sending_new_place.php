<?php

$new_name = $_POST['new_name'];
$new_street = $_POST['new_street'];
$new_city = $_POST['new_city'];
$new_comment = $_POST['new_comment'];
$new_email = $_POST['new_email'];
	
$message .= "\nPlace's name: ";
$message .= $new_name;
$message .= "\nPlace's street: ";
$message .= $new_street;
$message .= "\nPlace's city: ";
$message .= $new_city;
$message .= "\ncomment: ";
$message .= $new_comment;

$to = "israyelp.co.il@gmail.com";
$subject = "new place - $new_name";
if (mail($to, $subject, $message, "From: $new_email", $new_email)) {
	header("location:message_sent.php");
} else {
	 header("location:message_failed.php");
}
  	
?>