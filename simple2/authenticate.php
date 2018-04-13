<?php
session_start();

require_once("dbconn.php");

$username = htmlentities($_POST['username']);
$password = htmlentities($_POST['password']);

$result = $pdo->query("SELECT id, username FROM users WHERE username='$username' AND password=MD5('$password')");

if($result->rowCount() > 0) {
	$row = $result->fetch();

	$_SESSION['todo_simple_user_id'] = $row['id'];
	$_SESSION['todo_simple_user_name'] = $row['username'];

	header("Location: todo.php");
	die();
}
else {
	$_SESSION['todo_simple_error_message'] = "username or password wrong";
	header("Location: login.php");
	die();
}
