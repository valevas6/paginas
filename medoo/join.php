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

$data = $database->select("tb_usuarios", [
	"[><]tb_deptos"=>["id_deptos"=>"id_deptos"]
	
	],[
	"tb_usuarios.nombre",
	"tb_usuarios.usr",
	"tb_usuarios.id_deptos",
	"tb_deptos.id_deptos",
	"tb_deptos.depto"



	],[
	"ORDER"=>["tb_usuarios.id_usuario"=>"DESC"]
	]);

echo count($data);
echo "</br>";
echo $data[0]["nombre"];
echo "</br>";
echo $data[0]["usr"];
echo "</br>";
echo $data[0]["depto"];

?>