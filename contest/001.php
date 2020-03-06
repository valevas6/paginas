<?php

 
namespace Medoo;
require 'Medoo.php';
 

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'db_contest',
    'server' => 'localhost',
    'username' => 'root',
    'password' => ''
]);


session_start();

	if(isset ($_SESSION["loggedin"])){
		$email=$_SESSION["email"];
		$id_participante=$_SESSION["id_participante"];
		$nombre=$_SESSION["nombre"];
		$puntaje_total=$_SESSION["puntaje_total"];
		}


 
if($_POST){


	if(isset($_SESSION["loggedin"])){
		header("location: 002.php");
	}else{
		header("location: 004.php");//no loggedin, redirect
	}

}

?>

<html>
<head>
<title>Contest</title>
<link rel="stylesheet" href="css/style.css" />
</head>

<body>

	
	<div id="container3">
		<nav>
			<?php
			if(isset ($_SESSION["loggedin"])){
				echo"<ul id='positionLogOut'>
				<li><a id='letra'><h1> $nombre </h1></a></li>
				<li><a href='logout.php' id='letra'><h1>Cerrar Sesion</h1></a></li>
				</ul>";	
				}else{
				echo"
				<ul id='positionSignUp'>
				<li><a id='singcolor' href='004.php'><h1> SIGN UP </h1></a></li>
				<div id='slash1'><h1>/</h1></div>
				<li><a id='letra' href='003.php'><h1> SIGN IN </h1></a></li>
				</ul>
				";	
				}		
			?>
		</nav>
	

		<nav>
			<ul id="position2menu">
				<li><a id="noprizes" href="007.php"><h1> PRIZES </h1></a></li>
				<div id="slash2"><h1>/</h1></div>
				<li><a id="rules" href="001.php"><h1> RULES & REGULATION  </h1></a></li>
				<div id="slash3"><h1>/</h1></div>
				<li><a id="noplay" href="008.php"><h1> HOW TO PLAY </h1></a></li>
			</ul>
		</nav>


		<img src="imgs/win.png" alt"1"></br></img>
	</div>
	<img id="ima007" src="imgs/001.png" alt"1"></img>

	<form action="001.php" method="post">
		<input maxlength="10" id="codigo1" type="text" name="codigo">
		<input id="enterposition" alt="1" src="imgs/enter.png" type="image" />
	</form>

	<div id="pie2"></div>
</body>