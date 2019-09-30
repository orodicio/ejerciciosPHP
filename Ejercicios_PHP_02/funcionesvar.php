<?php

function suma($a, $b)
{
    return ($a + $b);
}

function resta($a, $b)
{
    return ($a - $b);
}

function multiplicacion($a, $b)
{
    return ($a * $b);
}

function division($a, $b)
{
    return ($a / $b);
}

function potencia($a, $b)
{
    $n3 = 1;
    for ($i = 0; $i < $b; $i ++) {
        $n3 = $a * $n3;
    }
    return $n3;
}
?>
