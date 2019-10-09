
<html>
<head>
<title>03.PHP</title>
</head>
<body>
<?php
$periodicos =['El Pais'=>'https://elpais.com', 'ABC'=>'https://www.abc.es', 'La Razon'=>'https://www.larazon.es', 'El Mundo'=>'https://www.elmundo.es', 'AS'=>'https://as.com'];

$periodico=array_rand($periodicos);

echo "<h1>El medio recomendado es \"<a href =\"". "$periodicos[$periodico]". "\" alt= \"periódicos\">"."$periodico"."</a>\"";
?>
</body>
</html>