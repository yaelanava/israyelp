<?php
session_start();

include './utils/functions.php';

$mysqli = getMysqliConnection();

$msg_id = $_GET['msg_id'];
$recipient_id = $_SESSION['user_id'];

$message = $_POST['message'];
	
$query = "DELETE FROM `messages` WHERE `messages`.`id`=$msg_id LIMIT 1;";
$mysqli->query($query);
header("Location: ./user_messages.php");

?>