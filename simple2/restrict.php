<?php
session_start();

if(!isset($_SESSION['todo_simple_user_id'])) {
	$_SESSION['todo_simple_error_message'] = "authentication required";
	header("Location: login.php");
	die();
}

$user_id = $_SESSION['todo_simple_user_id'];
$user_name = $_SESSION['todo_simple_user_name'];
