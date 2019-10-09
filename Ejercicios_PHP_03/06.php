<html>
<head>
<title>06.PHP</title>
</head>
<body>
<?php
require_once ('infopaises.php');
$maximo = 0;

foreach ($paises as $key => $value) {
    $poblacionMaxima = $value["Poblacion"];
    if ($poblacionMaxima > $maximo) {
        $maximo = $poblacionMaxima;
        $paisConMasPoblacion = $key;
    }
}

echo <<<FOO
  <p>El pais con más poblacion es: $paisConMasPoblacion.</p>
  <p>Tiene  $maximo habitantes</p>
  <ul>Sus ciudades son:
FOO;
$poblaciones = $ciudades[$paisConMasPoblacion];
foreach ($poblaciones as $ciudad) {
    echo "<li>$ciudad</li>";
}
echo "</ul>";

?>
</body>
</html>