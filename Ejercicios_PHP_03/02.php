<html>
<head>
<title>02.PHP</title>
</head>
<body>
<?php
$periodicos =['El pais'=>'https://elpais.com', 'ABC'=>'https://www.abc.es', 'La razon'=>'https://www.larazon.es', 'El mundo'=>'https://www.elmundo.es', 'AS'=>'https://as.com'];

echo "<ul>";
foreach ($periodicos as $key => $value) {
    echo "<li><a href =\"". "$value". "\" alt= \"periódicos\">"."$key"."</a></li>";
}
echo "</ul>";
?>
</body>
</html>