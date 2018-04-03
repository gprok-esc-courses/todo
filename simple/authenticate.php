<?php
session_start();

require_once("dbconn.php");

$username = $_POST['username'];
$password = $_POST['password'];

$result = $pdo->query("SELECT id, username FROM users WHERE username='$username' AND password=MD5('$password')");

if($result->rowCount() > 0) {
	$row = $result->fetch();

	$_SESSION['todo_simple_user_id'] = $row['id'];
	$_SESSION['todo_simple_user_name'] = $row['username'];
	
	header("Location: todo.php");
	die();
}
else {
	header("Location: login.php");
	die();
}