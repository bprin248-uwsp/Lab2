<?php
session_start();
unset($_SESSION['color']);
unset($_SESSION);
session_write_close();
//var_dump($_SESSION);
print'	
	<!DOCTYPE html>
	<html>
		<head>
			<title>My Page</title>
			<script src="hello.js"></script>
		</head>
		<body>
			<h1>Session Lab</h1>
			<form action="sessconfirm.php" method="POST">
				Choose a color:
				<select name = "color">
					<option value="Red">Red</option>
					<option value="Green">Green</option>
					<option value="Blue">Blue</option>
				</select>
				<input type = "submit" name="submit" value="Submit Query" />
			</form>
		</body>
	</html>
	';

?>

