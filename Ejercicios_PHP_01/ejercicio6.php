<html>
<head>
<title>Online PHP Script Execution</title>
<style>
    body{
        background-color:#b4b1b1;
        font-family:sans-serif;
    }
    .main{
        width:30%;
        margin-left:35%;
        margin-right:35%;
        margin-top:0;
        margin-bottom:0;
    }
    table,th,td{
       border:1px solid black;
       border-collapse:collapse;
       padding: 3px;
       
    }
    th{
        color:blue;
        background-color:#c0bcbc;
    }
    .der{
        text-align:right;
    }

    .cabecera{
        background-color:blue;
        color:white;
        text-align:center;
        margin-bottom:0;
        padding:7px 0 7px 0;
    }
</style>
</head>
<body>
<div class="main">
<div class="cabecera">
    <h1> TABLA DE MULTIPLICAR</h1>
</div>
<div style="background-color:white; display:block;height:100%; padding: 30px 0 0 30px;">
<?php
   $n1 =  random_int(1,10);
   $array1 = array();
   for($i=1;$i<=10;$i++){
       array_push($array1,$i*$n1);
   }
   
   echo <<<FOO
   <table>
       
      <tr>
          <td>Tabla del $n1</td>
          <td></td>
      </tr>
      <tr>
          <td>$n1 X 1 =</td>
          <td class="der">$array1[0]</td>
      </tr>
            <tr>
          <td>$n1 X 2 =</td>
          <td class="der">$array1[1]</td>
      </tr>
            <tr>
          <td>$n1 X 3 =</td>
          <td class="der">$array1[2]</td>
      </tr>
            <tr>
          <td>$n1 X 4 =</td>
          <td class="der">$array1[3]</td>
      </tr>
            <tr>
          <td >$n1 X 5 =</td>
          <td class="der">$array1[4]</td>
      </tr>
        <tr >
          <td >$n1 X 6 =</td>
          <td class="der">$array1[5]</td>
        </tr>
        <tr >
          <td >$n1 X 7 =</td>
          <td class="der">$array1[6]</td>
        </tr>
        <tr >
          <td >$n1 X 8 =</td>
          <td class="der">$array1[7]</td>
        </tr>
        <tr >
          <td >$n1 X 9 =</td>
          <td class="der"> $array1[8]</td>
        </tr>
        <tr >
          <td >$n1 X 10 =</td>
          <td class="der">$array1[9]</td>
        </tr>
      
   </table>
FOO;

?>
</div>
</div>
</body>
</html>
