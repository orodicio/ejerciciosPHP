<html>
<head>
<title>Online PHP Script Execution</title>
<style>
    table,th,td{
       border:1px solid black;
       border-collapse:collapse;
    }
    th{
        color:white;
        background-color:black;
        text-align: center;
        padding-left:30px;
        padding-right:30px;
        
    }
    .izq{
        text-align:left;
    }
    .der{
        text-align:right;
    }
</style>
</head>
<body>
<?php

define('CINCUENTA', 50);
define('CIEN',100);
$numero=random_int(CINCUENTA,CIEN);
$minimo=$numero;
$maximo=$numero;
$media=$numero;

for($i=1; $i<CINCUENTA; $i++){
    $numero=random_int(CINCUENTA,CIEN);

    if($numero>$maximo){
        $maximo=$numero;
    }
    if($numero<$minimo){
        $minimo=$numero;
    }
    $media=$media+$numero;
}
$media=$media/CINCUENTA;

   echo <<<FOO
   <table> 
      <tr>
          <th colspan = "2">Generación de 50 valores aleatorios</th>
      </tr>
      <tr>
          <td class="izq">Mínimo</td>
          <td class="der">$minimo</td>
      </tr>
      <tr>
          <td class="izq">Máximo</td>
          <td class="der">$maximo</td>
      </tr>
      <tr>
          <td class="izq">Media</td>
          <td class="der">$media</td>
      </tr>      
   </table>
FOO;
?>

</body>
</html>