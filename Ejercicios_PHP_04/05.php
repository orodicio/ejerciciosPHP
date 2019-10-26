
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>05</title>
<?php
if ($_SERVER['REQUEST_METHOD']=='GET'|| empty($_REQUEST['nombre'])){
  echo <<<foooo
</head>
<body>
<form method="POST">
<p>Nombre:  <input type="text" name="nombre" class="round" size="30"></p>
<p>Apellido: <input type="text" name="apellido" class="round" size="30"></p>
<p>Edad: <select name="edad">
						<option value="masde55">Más de 55</option>
						<option value="menosde55">Menos de 55</option>
				</select>
				</p>
<p>Sexo: Hombre: <input type="radio" name="sexo" value="hombre" checked> Mujer: <input type="radio" name="sexo"
					value="mujer"></p>
<p>Hobbies:</p>
<p>Lectura:<input type="checkbox" name="hobbies[1]"value="la lectura"></p>
<p>Ver la tele:<input type="checkbox" name="hobbies[2]"value="ver la tele"></p>
<p>Hacer deporte:<input type="checkbox" name="hobbies[3]"value="hacer deporte"></p>
<p>Salir de marcha:<input type="checkbox" name="hobbies[4]"value="salir de marcha"></p>
<p><input type="submit" value="Enviar formulario"></p>
</form>
</body>
foooo;
}
else{    
    function recoge($var)
    {
        $tmp = (isset($_POST[$var])) ? trim(htmlspecialchars($_POST[$var], ENT_QUOTES, "UTF-8")) : "";
        return $tmp;
    }
    
    function recogeMatriz($var)
    {
        $tmpMatriz = [];
        if (isset($_POST[$var]) && is_array($_POST[$var])) {
            foreach ($_POST[$var] as $indice => $valor) {
                $indiceLimpio = trim(htmlspecialchars($indice, ENT_QUOTES, "UTF-8"));
                $valorLimpio = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
                $tmpMatriz[$indiceLimpio] = $valorLimpio;
            }
        }
        return $tmpMatriz;
    }
    function mostrarHobbies($mensaje,$hobbies){
        foreach($hobbies as $value){
            $mensaje.=" ".$value.",";
        }
        return $mensaje;
    }
    
$nombre=recoge("nombre");
$apellido=recoge("apellido");
$edad=recoge("edad");
$sexo=recoge("sexo");
$hobbies=recogeMatriz("hobbies");
$bienvenida=(strtolower($sexo) == "mujer")?"Bienvenida": "Bienvenido";
$tratamiento="";

if(strtolower($edad)== "masde55" && strtolower($sexo)== "mujer"){
    $tratamiento="Doña";
}
if(strtolower($edad)== "masde55" && strtolower($sexo)== "hombre"){
    $tratamiento="Don";
}

if(count($hobbies)>1){
$mensaje=", sus aficiones son";
$mensaje=mostrarHobbies($mensaje, $hobbies);
}

if(count($hobbies)==0){
    $mensaje=" , no tiene aficiones de nuestra lista.";
}
if(count($hobbies)==1){
    $mensaje= ", su unica afición es";
    $mensaje=mostrarHobbies($mensaje, $hobbies);
}

echo "<p>"." ".$bienvenida." ".$tratamiento." ".$nombre." ".$apellido." ".$mensaje."</p>";

}
?>
</html>