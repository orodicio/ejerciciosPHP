<html>
<head>
<title>01.PHP</title>
</head>
<body>
<?php

function elMayor ($A, $B, &$C){
    if($A>$B){
        $C=$A;
        return;
    }
    if($A<$B){
        $C=$B;
        return;
    }
}
$A =  random_int(1,10);
$B =  random_int(1,10);
$C =  0;

elMayor ($A,$B,$C);

?>
<p>A es <?php echo $A?></p>
<p>B es <?php echo $B?></p>
<h1>El mayor es <?php echo $C?></h1>
</body>
</html>		