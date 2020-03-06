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

	$deptos = $database->select("tb_deptos", "*");

	if($_POST)
	{
		$database->insert("tb_usuarios", [
			"nombre" => $_POST["nombre"],
			"usr" => $_POST["usr"],
			"pwd" => md5($_POST["pwd"]),
			"id_deptos" => $_POST["depto"]
		]);
	}

?>

<html>
<head>
	<title>Registrar usuarios</title>
</head>
<body>
	<form action="insertar.php" method="post">
		<label for="">Nombre</label>
		<input type="text" name="nombre">

		<label for="">Usuario</label>
		<input type="text" name="usr">

		<select name="depto">
			<?php
			$len = count($deptos);
			for ($i=0; $i < $len; $i++) { 
				echo "<option value='".$deptos[$i]["id_deptos"]."'>".$deptos[$i]["depto"]."</option>";
			}
			?>
		</select>


		<label for="">Contrasenia</label>
		<input type="password" name="pwd">

		<input type="submit" value="REGISTRAR">
	</form>
</body>
</html>