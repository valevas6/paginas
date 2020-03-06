<?php

namespace Medoo;
require 'Medoo.php';

$database = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'db_sistema',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',

	]);


	if($_GET){

		$data=$database->select("tb_usuarios","*", ["id_usuario"=>$_GET["id"]

		]);

		$deptos=$database->select("tb_deptos","*");

	}

 	if($_POST){
 		//actualizar datos
		$database->update("tb_usuarios", [
			"nombre" => $_POST["nombre"],
			"usr" => $_POST["usr"],
			"pwd" => md5($_POST["pwd"])
			
		],[
			"id_usuario"=>$_POST["id"]
		]);
		
		header("location:listado.php");	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Usuarios</title>
</head>
<body>
		<form action="editar.php" method="post">
			<label for="">Nombre</label>
			<input type="text" value="<?php echo $data[0]["nombre"]; ?>" name="nombre">

			<select name="depto">
			<?php
			$len = count($deptos);
			for ($i=0; $i < $len; $i++) { 
				 if($data[0]["id_deptos"]==$deptos[$i]["id_deptos"]){
				 	echo "<option selected value '".$deptos[i]
				 	["id_deptos"]."'>".$deptos[$i]["depto"]."</option>";
				 }else{
				 	echo "<option value='".$deptos[$i]
				 	["id_deptos"]."'>".$deptos[$i]["depto"]."</option>";
				 }
			}
			?>
		</select>
			<label for="">Usuario</label>
			<input type="text" value="<?php echo $data[0]["usr"]; ?>" name="usr">
			<label for="">Password</label>
			<input type="password" name="pwd">
			<input type="hidden" value="<?php echo $data[0]["id_usuario"]; ?>" name="id">
			<input type="submit" value="EDITAR">
		</form>
</body>
</html>