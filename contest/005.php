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
 
if($_POST){
	
$data= $database->select('tb_participantes', [
	"email"
	],  [
	"AND"=>[
    'email' => $_POST["email"]
    ]
    
  ]);

    $results = count($data);

   	if($results>0){
   		$email=$_POST["email"];
   		header("location: 006.php?mail=".$email);
   	}
   	else{
   		echo"<script>alert('Incorrect Email')</script>";
   	}
   	

}


?>

<html>
<head>
<title>Contest</title>
<link rel="stylesheet" href="css/style005.css" />
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
		<img id="forgotpassword" src="imgs/ForgotPassword.png" alt"1"></br></img>
		<img id="positionemailforgot" src="imgs/email.png" alt"1"></br></img></br>


		<form action="005.php" method="post">
			<input id="email" type="text" name="email" value="">
			<input id="reset" alt="1" src="imgs/reset.png" type="image" value="">
		</form>

		

	</div>
				
	<div id="pie"></div>
</body>
</html>

