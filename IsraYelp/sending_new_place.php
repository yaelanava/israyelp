<?php
	$new_name = $_POST['new_name'];
	$new_street = $_POST['new_street'];
	$new_city = $_POST['new_city'];
	$new_comment = $_POST['new_comment'];
	$new_email = $_POST['new_email'];
	
	$message .= "Place's name: \n";
	$message .= $new_name;
	$message .= "\n";
	$message .= "Place's street: \n";
	$message .= $new_street;
	$message .= "\n";
	$message .= "Place's city: \n";
	$message .= $new_city;
	$message .= "comment: \n";
	$message .= $new_comment;
	
	//echo $message;
	$to = "milaor@gmail.com";
	$subject = "new place: ".$new_name;
	$body = $message;
	if (mail($to, $subject, $body, $new_email)) {
 		 echo("<p>Message successfully sent!</p>");
 	} else {
 		 echo("<p>Message delivery failed..</p>");
 	}
?>