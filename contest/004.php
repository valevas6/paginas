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
?>
<?php 

if($_POST){
	
$data= $database->select('tb_participantes', [
	"email",
	"password",
	"nombre",
	"id_participante",
	"puntaje_total"
	],  [
	"AND"=>[
    'email' => $_POST["email"],
    'password'=> $_POST["password"]
    ]
    
  ]);
	
    $results = count($data);
   	if($results>0){
   		session_start();
   		$_SESSION["loggedin"]=true;
   		$_SESSION["email"]=$data[0]["email"];
   		$_SESSION["nombre"]=$data[0]["nombre"];
   		$_SESSION["id_participante"]=$data[0]["id_participante"];
   		$_SESSION["puntaje_total"]=$data[0]["puntaje_total"];
   		header("location: 002.php");
   	}
   	else{
   		echo"<script>alert('Incorrect Email or Password')</script>";
   	}

}


?>
<html>
<head>
<title>Contest</title>
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
	<div id="container">
		<nav>
			<ul id="positionSignUp">
				<li><a id="singcolor" href="004.php"><h1> SIGN UP </h1></a></li>
				<div id="slash1"><h1>/</h1></div>
				<li><a id="letra" href="003.php"><h1> SIGN IN </h1></a></li>
			</ul>
		</nav>
	

		<nav>
			<ul id="position2menu">
				<li><a id="noprizes" href="007.php"><h1> PRIZES </h1></a></li>
				<div id="slash2"><h1>/</h1></div>
				<li><a id="norules" href="001.php"><h1> RULES & REGULATION  </h1></a></li>
				<div id="slash3"><h1>/</h1></div>
				<li><a id="noplay" href="008.php"><h1> HOW TO PLAY </h1></a></li>
			</ul>
		</nav>
		
		
		<img src="imgs/win.png" alt"1"></br></img>
		<img id="positionxbox" src="imgs/xbox.png" alt"1"></br></img>
		<img id="positionconsola" src="imgs/consola.png" alt"1"></br></img>
		<img id="singUp" src="imgs/singup.png" alt"1"></br></img>

		<form action="004.php" method="post">
			<section id="floatleft">
				<img id="positionleft" src="imgs/email03.png" alt"1"></br></img>
				<input id="cuadroleft" type="text" name="email"></br>

			</section>
			
			<section id="floatright">
				<img id="positionright" src="imgs/Password.png" alt"1"></br></img>
				<input id="cuadroright" type="password" name="password"></br>
			</section>
			<input id="singUpbotton" alt="1" src="imgs/botonsingup.png" type="image" />
		</form>

			<a href="005.php"><img id="positionFPass" src="imgs/forgorpass.png" alt"1"></br></img></a>
			<a href="003.php"><img id="positionNewUser" src="imgs/newuser.png" alt"1"></br></img></a>
		

		</div>
	
	<div id="pie"></div>
</body>
</html>
