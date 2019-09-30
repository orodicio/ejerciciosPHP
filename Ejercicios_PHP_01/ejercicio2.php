<?php
$n1 =  random_int(1,10);
$n2 =  random_int(1,10);
echo "suma: $n1 + $n2 = ".($n1+$n2)."<br/>";
echo "resta: $n1 - $n2 = ".($n1-$n2)."<br/>";
echo "multiplicacion: $n1 * $n2 = ".($n1*$n2)."<br/>";
echo "division: $n1 / $n2 = ".($n1/$n2)."<br/>";
echo "modulo: $n1 % $n2 = ".($n1%$n2)."<br/>";
$n3 = 1;
for($i = 0;$i < $n2;$i++){
    $n3 = $n1 * $n3;
}
echo "potencia: $n1 ** $n2 = ".$n3;
?>