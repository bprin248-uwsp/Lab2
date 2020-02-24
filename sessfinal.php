<?php
session_start();
var_dump($_SESSION);
if(!isset($_SESSION['color'])){
	print"Error";
	exit;
};
print"<!doctype html>
	<html lang='en'>
		<head><title>Confirmed</title>
		</head>
		<body>
			<h1>Session Lab</h1>
			Confirmed; ";
			print "You chose: ".$_SESSION['color'] . " which is ". $_SESSION['hex'];
print"		<br /><a href='Lab2-index.php'>Back to beginning</a>
		</body>
	</html>
";
?>