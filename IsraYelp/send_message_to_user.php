<?php
	$real_user_email = $_POST['real_user_email'];
	$ext_user_email = $_POST['ext_user_email'];
	$inner_message = $_POST['message'];
	$title = $_POST['title'];
	$real_name = $_POST['real_name'];
	
	$message .= $title;
	$message .= "\n";
	$message .= $inner_message;
	
	
	$to = "tehila.han@gmail.com";
	$subject = "Message By: ".$real_name;
	$body = $message;
	if (mail($ext_user_email, $subject, $body, $real_user_email)) {
		header("location:message_sent.php");
 	} else {
 		 header("location:message_failed.php");
 	}