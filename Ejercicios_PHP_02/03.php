<html>
<head>
<title>03.PHP</title>
</head>
<body>
<?php
require_once ('funcionesref.php');
$n1 = random_int(1, 10);
$n2 = random_int(1, 10);
$resultado =0;

echo "1º Número: $n1</br>";
echo "2º Número : $n2</br>";

$resultados = array();
suma($n1, $n2, $resultado);
$resultados['+'] = $resultado;
resta($n1, $n2, $resultado);
$resultados['-'] = $resultado;
multiplicacion($n1, $n2, $resultado);
$resultados['*'] = $resultado;
division($n1, $n2, $resultado);
$resultados['/'] = $resultado;
potencia($n1, $n2, $resultado);
$resultados['**'] = $resultado;

foreach ($resultados as $clave=>$valor) {
    echo "$n1"."$clave"."$n2 = "."$valor <br>";
}
?>
</body>
</html>