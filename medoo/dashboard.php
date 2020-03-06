<?php
	session_start();

	if($_SESSION["loggedin"]){
		echo "Session started";
		echo "<br>";
		echo $_SESSION["usr"];
	}else{
		header("location: login.php");//no loggedin, redirect
	}
?>

	<html>
	<head>
		<title>Dashboard</title>
	</head>
	<body>
	 	<h1>Dashboard</h1>
	 	<a href="longout.php">LOGOUT</a>
	 	<hr>
	</body>
	</html