<html>
<head>
<title>07.PHP</title>
</head>
<body>
<?php
require_once ('infopaises.php');
$pais = array_rand($paises);
$capital = $paises[$pais]["Capital"];
$habitantes = $paises[$pais]["Poblacion"];

echo <<<FOO
  <p>El pais elegido es: $pais. Para consultar su mapa, pincha <a href="https://www.google.es/maps/place/$pais">aquí</a></p>
  <p>Tiene $habitantes habitantes</p>
  <p>Su capital es $capital</p>
  <ul>Sus ciudades son:
FOO;

$poblaciones = $ciudades[$pais];
foreach ($poblaciones as $ciudad) {
    echo "<li>$ciudad</li>";
}
echo "</ul>";

?>
</body>
</html>
