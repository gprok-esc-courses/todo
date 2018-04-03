<?php
require_once("restrict.php");
require_once("dbconn.php");
$result = $pdo->query("SELECT * FROM items WHERE users_id=$user_id AND completed=0");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Todo List</title>
</head>
<body>
	<h1>Todo - List</h1>
	<p>
		user: <?=$user_name;?> - <a href="logout.php">Logout</a>
	<p>
	<form method="post" action="additem.php">
		Add: <input type="text" name="description"> <input type="submit" name="submit">
	</form>
	</p>

	<p>
	<?php
		foreach ($result as $row) {
			$item_id = $row['id'];
			echo "<form method='post' action='complete.php'>";
			echo $row['description'];
			echo "<input hidden name='item_id' value='$item_id'> ";
			echo "<input type='submit' value='done'>";
			echo "</form>";
			echo "<br>";
		}
	?>
	</p>

</body>
</html>