<html>
<head>
<title>05.php</title>
</head>
<body>
<?php

function generarHTMLTable($filas, $columnas, $borde, $contenido)
{
    echo "<table style=\"border-collapse:collapse; border:$borde"."px solid black;text-align:center\">";
    for ($i = 0; $i < $filas; $i ++) {
        echo "<tr style=\"border-collapse:collapse; border:$borde"."px solid black;text-align:center\">";
        for ($j = 0; $j < $columnas; $j ++) {
            echo "<td style=\"border-collapse:collapse; border:$borde"."px solid black;text-align:center\">".$contenido."</td>";
        }
        echo '</tr>';   
    }
}
generarHTMLTable(5,5,1,olalla);

?>
</body>
</html>