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

	$data = $database->select("tb_usuarios", "*");
	echo count($data);
?>
<html>
	<head>
		<title>Listado de usuarios</title>
	</head>
	<body>
			<table>
				<tr>
					<td><h3>Nombre</h3></td>
					<td><h3>Usuario</h3></td>
					<td><h3>Opciones</h3></td>
				</tr>
				<?php
					$len = count($data);
					for($i=0; $i<$len; $i ++)
					{
						echo "<tr>
					<td>".$data[$i]["nombre"]."</td>
					<td>".$data[$i]["usr"]."</td>
					<td><a href='editar.php?id=".$data[$i]["id_usuario"]."'>Editar</a> <a href='eliminar.php?id=".$data[$i]["id_usuario"]."'>Eliminar</a></td>
					</tr>";
					}
				?>
				
			</table>
	</body>
</html>