<?php

function suma($a, $b, &$c)
{
    $c = $a + $b;
}

function resta($a, $b, &$c)
{
    $c = $a - $b;
}

function multiplicacion($a, $b, &$c)
{
    $c = ($a * $b);
}

function division($a, $b, &$c)
{
    $c = ($a / $b);
}

function potencia($a, $b, &$c)
{
    $n3 = 1;
    for ($i = 0; $i < $b; $i ++) {
        $n3 = $a * $n3;
    }
    $c = $n3;
}
?>