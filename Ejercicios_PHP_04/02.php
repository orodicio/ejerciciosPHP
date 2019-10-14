<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>02</title>
<style>
table, td,th,tr{
background-color:orange;
color:red;
border:1px solid black;
border-collapse:collapse;
text-align:center;
padding:1%;
width:34%;
}
.titulo{
background-color:green;
}
</style>
</head>
<body>
	<form action="http://localhost/ejercicios/Ejercicios_PHP_04/02.php"
		method="get">
		<table>
	<tr>
	<th colspan="4" class="titulo">Calculadora</th>
	</tr>
	<tr>
	<td colspan="2"><input type="number" name="number1"></td>
	<td colspan="2"><input type="number" name="number2"></td>
	</tr>
	<tr>
		<tr>
	<td colspan="4"><input type="radio" name="metrica" value="decimal"checked>Decimal</td>
	</tr>
	<tr>
	<td colspan="4"><input type="radio" name="metrica" value="hexadecimal">Hexadecimal</td>
	</tr>
	<tr>
	<td colspan="4"><input type="radio" name="metrica" value="binario">Binario</td>
	</tr>
	<tr>	
	<td><button type="submit" name="operacion" value="+">+</button></td>
	<td><button type="submit" name="operacion" value="-">-</button></td>
	<td><button type="submit" name="operacion" value="*">*</button></td>
	<td><button type="submit" name="operacion" value="/">-</button></td>
    </tr>
<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
    ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
    : "";
    return $tmp;
}

$num1=recoge("number1");
$num2=recoge("number2");
$operacion= recoge("operacion");
$metrica= recoge("metrica");
$resultado=0;

switch ($operacion){
    
    case '+': $resultado =$num1+$num2;
    break;
    case '-': $resultado =$num1-$num2;
    break;
    case '*': $resultado =$num1*$num2;
    break;
    case '/': $resultado =$num1/$num2;
    break;
    default: echo "Neutro";   
}
if ($metrica =="binario"){
    $resultado=decbin($resultado);
}
if ($metrica =="hexadecimal"){
    $resultado=dechex($resultado);
}
echo <<<foo
    <tr>
    <td colspan="4" style="background-color:white">.$resultado.</td>
    </tr>
foo;

?>
</table>
</form>
</body>
</html>






