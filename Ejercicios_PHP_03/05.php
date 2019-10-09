<html>
<head>
<title>05.PHP</title>
<style>
table, td, tr {
	border: 1px solid black;
	border-collapse: collapse;
	text-align: center;
}
</style>
</head>
<body>
<?php
$bonoloto = [];

for ($j=0;$j<5;$j++){
    $bonoloto[$j]=0;
}

$complementario = 0;

for ($i =0; $i<5;$i++){
    $numero = random_int(1, 49);
    while (in_array($numero, $bonoloto)) {
        $numero = random_int(1, 49);
    }
    $bonoloto[$i] = $numero;
}

$complementario= random_int(1,49);

while(in_array($complementario, $bonoloto)){
   $complementario= random_int(1,49);
}
rsort($bonoloto);


echo "<table><tr>";
        foreach ($bonoloto as $loto){
            echo "<td>". "$loto". "</td>";
}
echo "<td>Complementario: "."$complementario"."</td></tr></table>";
?>
</body>
</html>
