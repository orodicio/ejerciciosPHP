<html>
<head>
<title>01.PHP</title>
<style>
table, td, th, tr {
	color: blue;
	border: 2px solid blue;
	border-collapse: collapse;
	text-align: center;
	font-size: 56px;
}

td {
	
}
</style>
</head>
<body>
<?php
$carton = [];
$fila1 = [
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0
];
$fila2 = [
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0
];
$fila3 = [
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0
];

$decenasMin = [
    1,
    10,
    20,
    30,
    40,
    50,
    60,
    70,
    80
];
$decenasMax = [
    9,
    19,
    29,
    39,
    49,
    59,
    69,
    79,
    89
];

for ($i = 0; $i < 9; $i ++) {
    $fila1[$i] = random_int($decenasMin[$i], $decenasMax[$i]);
}

for ($i = 0; $i < 9; $i ++) {
    $valor = random_int($decenasMin[$i], $decenasMax[$i]);
    while (in_array($valor, $fila1)) {
        $valor = random_int($decenasMin[$i], $decenasMax[$i]);
    }

    $fila2[$i] = $valor;
}

for ($i = 0; $i < 9; $i ++) {
    $valor = random_int($decenasMin[$i], $decenasMax[$i]);
    while (in_array($valor, $fila1) || in_array($valor, $fila2)) {
        $valor = random_int($decenasMin[$i], $decenasMax[$i]);
    }

    $fila3[$i] = $valor;
}

$carton = [
    $fila1,
    $fila2,
    $fila3
];

$fila4 = array_fill(0, 9, 0);
$fila5 = array_fill(0, 9, 0);
$fila6 = array_fill(0, 9, 0);

$nums1 = array_fill(0, 5, 9);
$nums2 = array_fill(0, 5, 9);
$nums3 = array_fill(0, 5, 9);

for ($e = 0; $e < 5; $e ++) {
    $posicion = random_int(0, 8);
    while (in_array($posicion, $nums1)) {
        $posicion = random_int(0,8);
    }
    $nums1[$e] = $posicion;
}
for ($e = 0; $e < 5; $e ++){
    $posicion = random_int(0, 8);
    while (in_array($posicion, $nums2)) {
        $posicion = random_int(0,8);
    }
        if(in_array($posicion, $nums1)){
            $anteriorpos=$posicion-1;
            $posteriorpos=$posicion+1;
            while((in_array($anteriorpos, $nums1) && in_array($anteriorpos,$nums2))|| (in_array ($posteriorpos, $nums1) && in_array($posteriorpos,$nums2))|| in_array($posicion, $nums2)){
                $posicion = random_int(0,8);
    }
    }
 
    $nums2[$e]=$posicion;
}
for ($e = 0; $e < 5; $e ++){
    $posicion = random_int(0, 8);
    while (in_array($posicion, $nums3)){
        $posicion = random_int(0,8);
    }
        if(in_array($posicion, $nums2)){
            $anteriorpos=$posicion-1;
            $posteriorpos=$posicion+1;
            while((in_array($anteriorpos, $nums3) && in_array($anteriorpos,$nums3))|| (in_array ($posteriorpos, $nums2) && in_array($posteriorpos,$nums3))|| in_array($posicion, $nums3)){
                $posicion = random_int(0,8);
            }
        }
        while((in_array($posicion, $nums1) && in_array($posicion, $nums2)) || in_array($posicion, $nums3)){
            $posicion = random_int(0,8);     
    }
    $nums3[$e]=$posicion;
    }



for ($r = 0; $r < 5; $r ++) {
    $posicion = $nums1[$r];
    $fila4[$posicion] = 1;
}

for ($r = 0; $r < 5; $r ++) {
    $posicion = $nums2[$r];
    $fila5[$posicion] = 1;
}

for ($r = 0; $r < 5; $r ++) {
    $posicion = $nums3[$r];
    $fila6[$posicion] = 1;
}

$blancos = [
    $fila4,
    $fila5,
    $fila6
];
echo '<pre>';
print_r($carton);
echo '</pre>';

echo '<pre>';
print_r($blancos);
echo '</pre>';

echo '<table>';
for ($m = 0; $m < 3; $m ++) {
    echo '<tr>';
    for ($j = 0; $j < 9; $j ++) {
        $valor = $carton[$m][$j];
        $mostrar= $blancos[$m][$j];
        echo '<td>';
        if ( $mostrar == 0) {
            echo '&nbsp';
        } else {
            echo "$valor";
        }
        echo '</td>';
    }
    echo '<tr>';
}
echo '</table>';
?>
</body>
</html>