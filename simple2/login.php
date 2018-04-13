<?php
session_start();

$error_msg = "";
if(isset($_SESSION['todo_simple_error_message'])) {
	$error_msg = $_SESSION['todo_simple_error_message'];
	unset($_SESSION['todo_simple_error_message']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Todo login</title>
</head>
<body>
	<h1>To Do - Login</h1>
	<p style="color: red"><?= $error_msg; ?></p>
	<form method="post" action="authenticate.php" onsubmit="return verifyForm()">
		Username: <input type="text" name="username" id="username"><br>
		Password: <input type="password" name="password" id="password"><br>
		<input type="submit" name="submit">
	</form>

	<script type="text/javascript">
		function verifyForm() {
			var username = document.getElementById('username').value;
			var password = document.getElementById('password').value;
    	if(!username.match(/\S/)) {
        	alert ('Username required');
        	return false;
    	}
			if(!password.match(/\S/)) {
        	alert ('Password required');
        	return false;
    	}

			return true;

		}

	</script>
</body>
</html>
