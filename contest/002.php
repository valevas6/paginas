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
$hoy = date("Y-m-d H:i:s");  
$estado="1";


session_start();

	if(isset ($_SESSION["loggedin"])){
		$email=$_SESSION["email"];
		$id_participante=$_SESSION["id_participante"];
		$nombre=$_SESSION["nombre"];
		$puntaje_total=$_SESSION["puntaje_total"];
	
		if($nombre=="ADMINISTRADOR"){
			header("location: admi.php");
		}
	}else{
		header("location: 004.php");//no loggedin, redirect
	}

if($_POST){
$data= $database->select('tb_codigos', [
	"codigo",
	"id_codigo",
	"estado"
	],  [
	"AND"=>[
    'codigo' => $_POST["codigo"],
    'estado' => "0",
    ]
    
  ]);

$id_puntaje= $database->select('tb_participantes', [
			"email",
			"puntaje_total"
			],  [
			"AND"=>[
		    'email' => $email,
		    ]
		    
		  ]);
		   
		   $puntaje_total= $id_puntaje[0]["puntaje_total"];

	
    $results = count($data);
   	if($results>0){
   		$id_codigo_dataselect= $database->select('tb_codigos', [
	"codigo",
	"id_codigo",
	"estado"
	],  [
	"AND"=>[
    'codigo' => $_POST["codigo"],
    ]
    
  ]);
   		$id_codigo= $id_codigo_dataselect[0]["id_codigo"];


   		echo"<script>alert('Registred code')</script>";
   		$database->update("tb_codigos", [
						"estado" => $estado
					],[
						"codigo" => $_POST["codigo"]
					]);

   		$database->insert("tb_codigo_participante", [
			"id_participante" => $id_participante,
			"id_codigo" => $id_codigo,
			"fecha" => $hoy
		]);

   			$suma='20';
   			$puntaje_total= $puntaje_total+$suma;

		   $database->update("tb_participantes", [
				"puntaje_total" => $puntaje_total
			],[
					"email"=>$email
			]);

		   


		   
   	}
 	else{
 		echo"<script>alert('Unregistred or alredy used code')</script>";
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
			<?php
				echo"<ul id='positionLogOut'>
				<li><a id='letra'><h1> $nombre </h1></a></li>
				<li><a href='logout.php' id='letra'><h1>Cerrar Sesion</h1></a></li>
				</ul>";			
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
		<img id="positionxbox" src="imgs/xbox.png" alt"1"></br></img>
		<img id="positionconsola" src="imgs/consola.png" alt"1"></br></img>

		    <p id="earned">You've earned</p>
		    <?php
		    echo "<p id='earned2' >".$puntaje_total." Entries</p>";

		    ?>
		<img id="enterMaginStores" src="imgs/enter&store.png" alt"1"></br></img>
		<div>
			<form action="002.php" method="post">
				<input id="codigo" axlength="10" type="text" name="codigo">
				<input id="positionEnter2" src="imgs/enter.png" alt"1" type="image">
				<img id="positionEntriesSaved" src="imgs/entriersaved.png" alt"1">
			</form>
		</div>
	</div>
	<div id="pie"></div>
</body>
</html>
