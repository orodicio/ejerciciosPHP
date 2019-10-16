<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>04</title>
<style type="text/css">
table {
	width: 28%;
	font-size: 15px;
	font-family: sans-serif;
}

table, th {
	border: 1px solid black;
	border-collapse: collapse;
}

th {
	text-align: center;
	color: white;
	background-color: blue;
	padding: 3%;
	font-size: 25px;
}

td {
	text-align: left;
	color: grey;
	padding-left: 3%;
	padding-top: 1%;
}

hr {
	border: 1.5px solid grey;
	width: 96%;
	margin-left: 0%;
	background-color: grey;
	border-radius: 20%;
}

#bottom {
	margin-bottom: 5%;
}

.round {
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding: 1% 2% 1% 2%;
}

#arriba {
	padding-top: 5%;
}

.abajo {
	padding-bottom: 3%
}
</style>
</head>
<body>
<?php
$nombre = recoge("nombre");
$contraseña = recoge("contraseña");
$semaforo = recoge("semaforo");
$quieroPublicidad = recoge("publicidad");
$idiomas = recogeMatriz("idiomas");
$finDeEstudios = recoge("añoDeCarrera");
$codProvincia = recogeMatriz("codProvincia");
$comentarios = recoge("comentarios");

function recoge($var)
{
    $tmp = (isset($_REQUEST[$var])) ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8")) : "";
    return $tmp;
}

function recogeMatriz($var)
{
    $tmpMatriz = [];
    if (isset($_REQUEST[$var]) && is_array($_REQUEST[$var])) {
        foreach ($_REQUEST[$var] as $indice => $valor) {
            $indiceLimpio = trim(htmlspecialchars($indice, ENT_QUOTES, "UTF-8"));
            $valorLimpio = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
            $tmpMatriz[$indiceLimpio] = $valorLimpio;
        }
    }
    return $tmpMatriz;
}

$confirmacion = "no";
if ($quieroPublicidad) {
    $confirmacion = "si";
}

echo <<<foo
		<table>
			<tr>
				<th>Procesando formulario</th>
			</tr>
			<tr>
				<td id="arriba">Nombre: $nombre </td>
			</tr>
			<tr>
				<td>Contraseña: $contraseña</td>
			</tr>
			<tr>
				<td>Semaforo: $semaforo</td>
			</tr>
			<tr>
				<td>Publicidad: $confirmacion publicidad</td>
			</tr>
			<tr>
            <td>Idiomas: 
foo;

foreach ($idiomas as $valor) {
    echo "$valor" . ",";
}

echo <<<fooo2
			</td>
			</tr>
			<tr>
				<td>Año de fin de estudios: $finDeEstudios</td>
			</tr>
			<tr>
				<td>Lista de los códigos postales de provincias: 
fooo2;
foreach ($codProvincia as $valor) {
    echo "$valor" . " ";
}
echo <<<fooo3
            </td>
			</tr>
			<tr>
			<td id="bottom">Comentarios: $comentarios</td>
			</tr>
		</table>
fooo3
?>
</body>
</html>



