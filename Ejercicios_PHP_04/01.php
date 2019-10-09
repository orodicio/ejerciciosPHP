
<?php
print "<pre>";
print_r($_REQUEST);
print "</pre>\n";

$usuario = recoge("usuario");
$contraseña = recoge("contraseña");
$contraseñas =['pepito'=>'grillo', 'blanca'=>'nieves', 'juanita=>banana'];

function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
    ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
    : "";
    return $tmp;
}

function accesoPermitido($usuario, $contraseña, $contraseñas){
foreach($contraseñas as $key => $value){
    if($key == $usuario && $value==contraseña){
        echo "<h1>Acceso permitido</h1>";
        return;
    }    
}
    echo "<h1>Acceso denegado</h1>";
    return;
}
   
?>
