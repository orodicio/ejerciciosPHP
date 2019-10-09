<html>
<head>
<title>08.PHP</title>
<style>
table, tr, td, th {
	border: 1px solid black;
	border-collapse: collapse;
	text-align: left;
	font-family: serif;
	text-transform: capitalize;
	color: grey;
	padding: 5px 2px 5px 3px;
	background-color: #B4C9E5;
}
</style>
</head>
<body>
<?php
$temperaturas = [
    6,
    10,
    12,
    14,
    16,
    20,
    25,
    30,
    18,
    15,
    14,
    8
];
$meses = [
    'enero',
    'febrero',
    'marzo',
    'abril',
    'mayo',
    'junio',
    'julio',
    'agosto',
    'septiembre',
    'octubre',
    'noviembre',
    'diciembre'
];
$mestemperatura = [];

for ($i = 0; $i < sizeof($meses); $i ++) {
    $mes = $meses[$i];
    $tiempo = $temperaturas[$i];
    $mestemperatura[$mes] = $tiempo;
}

echo "<table>";
foreach ($mestemperatura as $key => $value) {
    echo "<tr><td>" . "$key" . "</td>";
    echo "<td>";
    for ($i = 0; $i < $value; $i ++) {
        echo "<img src=\"img/verde.png\" alt=\"ladrillo \"/>";
    }
    echo "&nbsp" . "$value" . "ºC</td></tr>";
}
echo "</table";

?>
</body>
</html>