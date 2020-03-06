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
	
	if($_GET){
		$email=$_GET['mail'];

		
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
		<img id="newpass" src="imgs/newpass.png" alt="1" /></br>
			<?php
				function generaPass(){
					$cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
					$longitudCadena=strlen($cadena);
					$pass = "";
					$longitudPass=10;
					for($i=1 ; $i<=$longitudPass ; $i++){
						$pos=rand(0,$longitudCadena-1);
						$pass .= substr($cadena,$pos,1);
					}
					return $pass;
				}

			$password=generaPass();
			
			echo "<p id='pass' name='pass'>".$password."</p>";

				$database->update("tb_participantes", [
					"password" => $password
				],[
					"email"=>$email
				]);


			?>



		<a href="004.php"><img id="singUpbotton2" src="imgs/singup2.png" alt"1"></br></img></a>
	</div>	
	<div id="pie"></div>
</body>

</html>
