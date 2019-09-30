<html>
<head>
<title>Online PHP Script Execution</title>
<style>
    table,th,td{
       border:1px solid black;
       border-collapse:collapse;
    }
    th{
        color:blue;
        background-color:#c0bcbc;
    }
    .izq{
        text-align:left;
    }
    .der{
        text-align:right;
    }
    .gris{
        background-color: #e3e0df;
    }
</style>
</head>
<body>
<?php
   $n1 =  random_int(1,10);
   $n2 =  random_int(1,10);
   $suma = $n1+$n2;
   $resta= $n1 - $n2;
   $multiplicacion = $n1*$n2;
   $division = $n1/$n2;
   $modulo  = $n1%$n2;
   $potencia = 1;
   for($i = 0;$i < $n2;$i++){
       $potencia = $n1 * $potencia;
   }
   
   echo <<<FOO
   <table>
       
      <tr>
          <th>Operacion</th>
          <th>Resultado</th>
      </tr>
      <tr>
          <td class="izq">$n1+$n2</td>
          <td class="der">$suma</td>
      </tr>
            <tr class="gris">
          <td class="izq">$n1-$n2</td>
          <td class="der">$resta</td>
      </tr>
            <tr>
          <td class="izq">$n1*$n2</td>
          <td class="der">$multiplicacion</td>
      </tr>
            <tr class="gris">
          <td class="izq">$n1/$n2</td>
          <td class="der">$division</td>
      </tr>
            <tr>
          <td class="izq">$n1%$n2</td>
          <td class="der">$modulo</td>
      </tr>
            <tr class="gris">
          <td class="izq">$n1**$n2</td>
          <td class="der">$potencia</td>
      </tr>
      
   </table>
FOO;

?>

</body>
</html>
