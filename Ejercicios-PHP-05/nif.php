<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Dni</title>
<?php
if ($_SERVER['REQUEST_METHOD']=='GET'){
echo <<<foo
<form  name= "DNI" method="POST">
Introduzca su número de DNI: <input type="text" name="DNI" required pattern="[0-9]{8}" required><br/>
</form>
foo;
}
else{
    $dni=recoge('DNI');
    if(is_numeric($dni)){
        $posicion=$dni%23;
    }    
    else{
        echo "No se ha recibido un número válido";
    }
    $letras=['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E'];
    $letraDNI=$letras[$posicion];
    echo "<p>Su letra es ".$letraDNI."</p>";
    
}
function recoge($var)
{
    $tmp = (isset($_POST[$var])) ? trim(htmlspecialchars($_POST[$var], ENT_QUOTES, "UTF-8")) : "";
    return $tmp;
} 

?>