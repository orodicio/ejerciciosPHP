<html>
<head>
<title>02.PHP</title>
</head>
<body>
<?php
require_once ('funcionesvar.php');
$n1 = random_int(1, 10);
$n2 = random_int(1, 10);

echo "1º Número: $n1</br>";
echo "2º Número : $n2</br>";
echo "$n1 + $n2 = " . (suma($n1, $n2)) . "</br>";
echo "$n1 - $n2 = " . (resta($n1, $n2)) . "</br>";
echo "$n1 * $n2 = " . (multiplicacion($n1, $n2)) . "</br>";
echo "$n1 / $n2 = " . (division($n1, $n2)) . "</br>";
echo "$n1 ** $n2 = " . (potencia($n1, $n2)) . "</br>";
?>
</body>
</html>