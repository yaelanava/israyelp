<?php
session_start();

include './utils/functions.php';

$mysqli = getMysqliConnection();

$msg_id = $_GET['msg_id'];
$recipient_id = $_SESSION['user_id'];

$read = isset($_GET['read']) ? 1 : 0;

$query = "UPDATE `messages` SET `read`='$read' WHERE `messages`.`id`=$msg_id LIMIT 1;";
$mysqli->query($query);
header("Location: ./user_messages.php");

?>