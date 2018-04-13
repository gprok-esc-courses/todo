<?php
require_once("restrict.php");
require_once("dbconn.php");

$item_id = $_POST['item_id'];

$pdo->exec("UPDATE items SET completed=1 WHERE id=$item_id");

header("Location: todo.php");
die();