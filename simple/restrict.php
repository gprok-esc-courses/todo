<?php
session_start();

if(!isset($_SESSION['todo_simple_user_id'])) {
	header("Location: login.php");
	die();
}

$user_id = $_SESSION['todo_simple_user_id'];
$user_name = $_SESSION['todo_simple_user_name'];