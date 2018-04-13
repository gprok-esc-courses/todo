<?php
session_start();
unset($_SESSION['todo_simple_user_name']);
unset($_SESSION['todo_simple_user_id']);
header("Location: login.php");