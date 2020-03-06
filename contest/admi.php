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

$participantes=$database->select("tb_participantes","*");
$codigos=$database->select("tb_codigos","*");
$participantes_codigos=$database->select("tb_codigo_participante","*");


?>
<html>
<head>
<title>Contest</title>
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
	<div id="containerAdmi">
		<?php
					echo "</br></br><h1 id='containerAdministrator'>WELCOME ADMINITRATOR</h1></br>";
					echo "</br></br><h1 id='containerAdmiTitles'>User list</h1></br>";
					$len = count($participantes);
					for($i=0; $i<$len; $i ++)
					{
						echo "<tr>
					<td id='containerAdmiFont'>".$participantes[$i]["id_participante"]."</td>
					<td>".$participantes[$i]["nombre"]."</td>
					<td>".$participantes[$i]["apellido"]."</td>
					<td>".$participantes[$i]["email"]."</td>
					<td>".$participantes[$i]["password"]."</td>
					<td>".$participantes[$i]["telefono"]."</td>
					<td>".$participantes[$i]["id_provincia"]."</td>
					<td>".$participantes[$i]["puntaje_total"]."</td>
					<td>".$participantes[$i]["fecha"]."</td></br>
					</tr>";
					}

					echo "</br></br><h1 id='containerAdmiTitles'>Code list</h1></br>";
					$len1 = count($codigos);
					for($i=0; $i<$len1; $i ++)
					{
						echo "<tr>
					<td>".$codigos[$i]["id_codigo"]."</td>
					<td>".$codigos[$i]["codigo"]."</td>
					<td>".$codigos[$i]["estado"]."</td></br>
					</tr>";
					}

					echo "</br></br><h1 id='containerAdmiTitles'>Users and Codes list</h1></br>";
					$len2 = count($participantes_codigos);
					for($i=0; $i<$len2; $i ++)
					{
						echo "<tr>
					<td>".$participantes_codigos[$i]["id_codigo_participante"]."</td>
					<td>".$participantes_codigos[$i]["id_participante"]."</td>
					<td>".$participantes_codigos[$i]["id_codigo"]."</td>
					<td>".$participantes_codigos[$i]["fecha"]."</td></br>
					</tr>";
					}
					echo"</br></br></br></br>";

				?>

	</div>
</body>
</html>