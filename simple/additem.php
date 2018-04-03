<?php
require_once("restrict.php");
require_once("dbconn.php");

$description = $_POST['description'];

$pdo->exec("INSERT INTO items (description, completed, users_id) 
			VALUES ('$description', 0, $user_id)");

header("Location: todo.php");
die();