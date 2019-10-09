
<html>
<head>
<title>04.PHP</title>
<style>
table, th, td, tr {
	border: 1px solid black;
	border-collapse: collapse;
	text-align: center;
}

img {
	width: 120px;
	height: 82px;
}
</style>
</head>
<body>
<?php
$deportes = [
    'Atletismo' => 'img/atletismo.png',
    'Beisbol' => 'img/beisbol.png',
    'Frontenis' => 'img/frontenis.png',
    'Baloncesto' => 'img/baloncesto.png',
    'Futbol' => 'img/futbol.png',
    'Waterpolo' => 'img/waterpolo.png'
];
echo "<table><tr><th>Deporte</th><th>Logo</th></tr>";

foreach ($deportes as $key => $value) {
    echo "<tr><td style= \"padding:5px\">" . "$key" . "</td>";
    echo "<td><img src = \"" . "$value" . "\" alt=\"Deporte\"/></td></tr>";
}
echo "</table>";
?>
</body>
</html>
