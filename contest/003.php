<?php

namespace Medoo;
require 'Medoo.php';

$database = new Medoo([
	'database_type' => 'mysql',
	'database_name' => 'db_contest',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',

	]);
	
	$hoy = date("Y-m-d H:i:s");   
	$puntaje= 0;

	$provincias = $database->select("tb_provincias", "*");

	if($_POST)
	{
		$data1= $database->select('tb_participantes', [
		"email",
		],  [
		"AND"=>[
	    'email' => $_POST["email"],
	    ]
	    
	  ]);
		
	    $results = count($data1);
	   	if($results>0){
	   		echo"<script>alert('Alredy used email')</script>";
	   	}
	   	else{
	   		$mail=$_POST["email"];
   		$mailconf=$_POST["confemail"];
   		$pass=$_POST["password"];
   		$passconf=$_POST["confpass"];


   		if(($mail==$mailconf)&&($pass==$passconf)){
		$data=$database->insert("tb_participantes", [
			"nombre" => $_POST["nombre"],
			"apellido" => $_POST["apellido"],
			"email" => $_POST["email"],
			"telefono" => $_POST["telefono"],
			"id_provincia" => $_POST["provincia"],
			"password" => $_POST["password"],
			"puntaje_total" => $puntaje,
			"fecha" => $hoy
		]);
		$results = count($data);
   		if($results>0){
   		
   		header("location: 004.php");
   		}
			}else{
				echo"<script>alert('Wrong Information')</script>";
			}
	   	}	
	
	}

?>

<html>

<head>
<title>Contest</title>
<link rel="stylesheet" href="css/style.css" />
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>

</head>

<body>
	<div id="container">
		<nav>
			<ul id="positionSignUp">
				<li><a id="letra" href="004.php"><h1> SIGN UP </h1></a></li>
				<div id="slash1"><h1>/</h1></div>
				<li><a id="singcolor" href="003.php"><h1> SIGN IN </h1></a></li>
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
		<img id= "positionhey" src="imgs/hey.png" alt="1"></br></img>
		<img id="positionplease" src="imgs/please.png" alt="1"></br></img>

		<form method="POST" action="#">
			<section id="floatleft">
				<img id="positionleft" src="imgs/email03.png" alt="1"></br></img>
				<input id="email" type="mail" name="email" required></br>

				<img id="positionleft" src="imgs/FirstName.png" alt="1"></br></img>
				<input id="nombre" type="text" name="nombre" required></br>


				<img id="positionleft" src="imgs/Password03.png" alt="1"></br></img>
				<input id="password" type="password" name="password" required></br>
				

				<img id="positionleft" src="imgs/PhoneNumber.png" alt="1"></br></img>
				<input id="cuadroleft" type="tel" name="telefono" required></br>

			</section>

			<section id="floatright">
				<img id="positionright" src="imgs/ConfirmEmail.png" alt="1"></br></img>
				<input id="confemail" type="email" name="confemail" required/></br>

				<img id="positionright" src="imgs/LastName.png" alt="1"></br></img>
				<input id="cuadroright" type="text" name="apellido" required/></br>

				<img id="positionright" src="imgs/ConfirmPassword.png" alt="1"></br></img>
				<input id="confpass" type="password" name="confpass" required/></br>


				<img id="positionright" src="imgs/SelectProvince.png" alt="1"/></br></img>

			      <select name="provincia" id="cuadroright" type="text" name="provincia">
						<?php
						$len = count($provincias);
						for ($i=0; $i < $len; $i++) { 
							echo "<option value='".$provincias[$i]["id_provincia"]."'>".$provincias[$i]["provincia"]."</option>";
						}
						?>
				  </select>

				
			</section>
		<input id="positionregister" alt="1" src="imgs/register.png" type="image" />
	</form>

	<script type="text/javascript">
	$(function(){
	
		$('#password').keyup(function(){
				var _this = $('#password');
				var password = $('#password').val();
		        _this.attr('style', 'background:black');   
				if(password.charAt(0) == ' '){
					_this.attr('style', 'background:#FF4A4A');
				}
		 
				if(_this.val() == ''){
					_this.attr('style', 'background:#FF4A4A');
				}
			});
		 
			$('#confpass').keyup(function(){
				var password = $('#password').val();
				var confpass = $('#confpass').val();
				var _this = $('#confpass');
				_this.attr('style', 'background:black');
	        
				if(password != confpass && confpass != ''){
					_this.attr('style', 'background:#FF4A4A');
				}
			});

			$('#email').keyup(function(){
				var _this = $('#email');
				var _email = $('#email').val();
		 
				var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
				var valid = re.test(_email);
		 
				if(valid){
				_this.attr('style', 'background:black');	
			
				} else {
					_this.attr('style', 'background:#FF4A4A');
				}
		});

			$('#confemail').keyup(function(){
				var email = $('#email').val();
				var confemail = $('#confemail').val();
				var _this = $('#confemail');
				_this.attr('style', 'background:black');
	        
				if(email != confemail && confemail != ''){
					_this.attr('style', 'background:#FF4A4A');
				}
			});
	});
	</script>

		
	</div>
	<div id="pie"></div>
</body>


</html>