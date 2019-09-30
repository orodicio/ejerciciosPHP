<html>
<head>
<META HTTP-EQUIV="REFRESH" CONTENT="5">
<title>Online PHP Script Execution</title>
</head>
<body>
    
<?php
   
   $n1 =  random_int(100,500);
   $n2 =  random_int(100,500);
   $n3 =  random_int(100,500);
   

   echo <<<FOO
   <table width=$n1; style="background-color:red">
      <tr>
          <td>Rojo($n1)</td>
      </tr>
   </table>
      <table width=$n2 style="background-color:green">
      <tr>
          <td>Verde($n2)</td>
      </tr>
   </table>
      <table width=$n3 style="background-color:blue">
      <tr>
          <td>Azul($n3)</td>
      </tr>
   </table>
FOO;
//$self = $_SERVER['PHP_SELF']; 
//header("refresh:5; url=$self");
?>

</body>
</html>