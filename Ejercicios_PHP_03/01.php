<html>
<head>
<title>03.PHP</title>
<style>
table, tr, td {
	border: 1px solid black;
	border-collapse: collapse;
}
</style>
</head>
<body>
<?php
$numeros = [];
$numero = random_int(1, 10);
$maximo = $numero;
$minimo = $numero;

echo "<table><tr>";
for ($i = 0; $i < 20; $i ++) {
    echo "<td>" . "$numero" . "</td>";
    $numeros[] = $numero;
    $maximo = hallarMaximo($numero, $maximo);
    $minimo = hallarMinimo($numero, $minimo);
    $numero = random_int(1, 10);
}
echo "</tr></table>";
echo "</br>";
$moda = hallarModa($numeros);
echo "El maximo es $maximo" . "</br>";
echo "El minimo es $minimo" . "</br>";
echo "la moda es $moda";

function hallarModa($numeros)
{
    $repeticiones = [];
    for ($j = 0; $j < 10; $j ++) {
        $repeticiones[$j] = 0;
    }

    for ($h = 0; $h < 20; $h ++) {
        $numero = $numeros[$h] - 1;
        $repeticiones[$numero] = $repeticiones[$numero] + 1;
    }

    $maximasRepeticiones = max($repeticiones);
    $moda = (array_search($maximasRepeticiones, $repeticiones)) + 1;
    return $moda;
}

function hallarMinimo($numero, $minimo)
{
    if ($minimo > $numero) {
        $minimo = $numero;
    }
    return $minimo;
}

function hallarMaximo($numero, $maximo)
{
    if ($maximo < $numero) {
        $maximo = $numero;
    }
    return $maximo;
}

?>
</body>
</html>