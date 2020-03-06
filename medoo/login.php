<?php

 
namespace Medoo;
require 'Medoo.php';
 

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'db_sistema',
    'server' => 'localhost',
    'username' => 'root',
    'password' => ''
]);
 
// Enjoy
if($_POST){
	//select compare
	
$data= $database->select('tb_usuarios', [
	"usr",
	"pwd"
	],  [
	"AND"=>[
    'usr' => $_POST["usr"],
    'pwd' =>md5( $_POST["pwd"])
    //'pwd'=> $_POST["pwd"]
    ]
    
  ]);

//validacion de si hay un usuario con ese usuario y esa contrasenia
    $results = count($data);
    	echo $results;
   	if($results>0){
   		session_start();
   		$_SESSION["loggedin"]=true;//store session data
   		$_SESSION["usr"]=$data[0]["usr"];
   		header("location: dashboard.php");//redirect
   	}

}


?>

<html>

	<head>
		<title>Login</title>
	</head>

	<body>

		<form action="login.php" method="post">
			<label for=""><h1>Login</br></h1></label>

			<label for="">Username</label>  
			<input type="text" name="usr">
			<label for="">Password</label>
			<input type="text" name="pwd">
			
			<input type="submit" value="Registrar">
		</form>


	</body>	

</html>