<html>
<head>
<title>08.PHP</title>
<style>
table, tr, td, th {
	border: 1px solid black;
	border-collapse: collapse;
	text-align: left;
	font-family: serif;
	padding-right: 20px;
}
</style>
</head>
<body>
<?php
require_once ('infopaises.php');
echo <<<FOO
<table><tr>
<th>Pais</th>
<th>Capital</th>
<th>Población</th>
<th>Ciudades</th>
</tr>
FOO;
foreach ($paises as $key => $value) {
    echo "<tr><td>" . "$key" . "</td>";
    $capital = $value["Capital"];
    $habitantes = $value["Poblacion"];
    echo "<td>" . "$capital" . "</td>" . "<td>" . "$habitantes" . "</td>";
    $poblaciones = $ciudades[$key];
    echo "<td>";
    /*
     * foreach ($poblaciones as $ciudad) {
     * echo "$ciudad" . ",";
     * }
     */
    for ($i = 0; $i < sizeof($poblaciones); $i ++) {
        $ciudad = $poblaciones[$i];
        if ($i == (sizeof($poblaciones) - 1)) {
            echo "$ciudad";
            break;
        }
        echo "$ciudad" . ",";
    }
    echo "</td></tr>";
}
echo "</table>";
?>
</body>
</html>
