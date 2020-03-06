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
	$data=$database->select("tb_usuarios","*",["id_usuario"=>$_GET["id"]

	]);

	echo count($data);
}


 	if($_POST){
 		//eliminar datos
		$database->delete("tb_usuarios", [
			"id_usuario"=>$_POST["id"]
		]);	
		
		header("location:listado.php");	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Usuario</title>
</head>
<body>
	<h1>Desea eliminar este usuario</h1>
	<?php  echo "<h3>".$data[0]["nombre"]."</h3>";?>

	<form action="eliminar.php" method="post">
		<input type="hidden" value="<?php echo $data[0]["id_usuario"]; ?>" name="id">

		<input type="button" onclick="history.back()" value="CANCELAR">
		<input type="submit" value="ELIMINAR">
	</form>
</body>
</html>