<?php
session_start();

if(!isset($_POST['color'])){
	print 'Error';
	exit;
};

$choice = array();
	$choice['Red'] ='#FF0000';
	$choice['Green'] ='#008000';
	$choice['Blue'] ='#0000FF';
	

print"	
	<!DOCTYPE html>
	<html>
		<head>
			<title>Session lab Confirm</title>
		</head>
		<body>
			<h1>Session Lab Confirm</h1>";
			if(array_key_exists($_POST['color'], $choice)){
				print "You chose ".$_POST['color']." which is ".$choice[$_POST['color']];
				
			};
print"		<br />
			<a href='sessfinal.php'>Click to continue</a>
			<br />
			<a href='Lab2-index.php'>Click to start over</a>
		</body>
	
	</html>
	";
	
$colorSelection = $_POST['color'];
$_SESSION['color'] = $colorSelection;
$hexSelection = $choice[$colorSelection];
$_SESSION['hex'] = $hexSelection;
?>