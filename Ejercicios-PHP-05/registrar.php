<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Registrar</title>
<script lang="javascript">

function validacion(){
	  var valor = document.getElementById("nombre").value;

	  if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		  alert('[ERROR] Debe introducir un nombre');
		  return false;	   
	  }

	  valor = document.getElementById("emilio").value;
      var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  if( !(expr.test(valor))|| valor == null ) {
		  alert('[ERROR] Debe introducir un correo electrónico válido');
		  return false;
		}

	  valor = document.getElementById("contraseña1").value;
	  var valor2= document.getElementById("contraseña2").value;
	  if (!contraseñas(valor)){
	  	return false;
	  }
      
      if(!contraseñas(valor2)){
      	return false;  
      }
	  
	  if(valor != valor2) {
	    alert('[ERROR] Las contraseñas deben ser iguales');
	    	return false;
	  }

	  return true;
	}
	
function contraseñas(valor){
	var numeros="0123456789";
	var mayusculas="ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
	var minusculas="abcdefghijklmnñopqrstuvwxyz";
	var iChars = "~`!#$%^&*+=-[]\\';,/{}|\":<>?";
	if ( valor == null || valor.length == 0 || valor.length<8){
		alert('[ERROR] La contraseña debe tener al menos ocho caracteres');
		return false;
	}
	
	if(!recorreArray(valor,numeros) || !recorreArray(valor,mayusculas)|| !recorreArray(valor,minusculas)||recorreArray(valor,iChars)){
		alert('[ERROR] La contraseña debe tener al menos 1 caracter en mayúsculas, uno en minúsculas y un número y no debe incluir caracteres no alfanuméricos');
		return false;	
	}
	return true;
}

function recorreArray(valor1, valor2){
	var contador=0;
	for(var i=0; i<valor1.length;i++){
		var letra= valor1.charAt(i);
	      if (valor2.indexOf(letra,0)!=-1){
	    	  contador++;  
	       }
}
	if(contador==0){
	return false;
	}
	
	return true;
}
</script>
</head>
<body>
	<form method="POST" name="formulario1" onsubmit="return validacion()">
		<p>
			Nombre: <input type="text" id="nombre" name="nombre" size="30">
		</p>
		<p>
			Correo electrónico:<input type="email" id="emilio" name="emilio"
				size="30">
		</p>

		<p>
			Contraseña: <input type="text" id="contraseña1" name="contraseña1"
				size="30">
		</p>
		<p>
			Repetir contraseña: <input type="text" id="contraseña2"
				name="contraseña2" size="30">
		</p>
		<p>
			<input type="submit" value="Enviar formulario al servidor">
	
	</form>
<?php
if (! empty($_POST)) {

    function checkPassword($contraseña)
    {
        $isValid = true;
        if (! preg_match("/^(?=\w*[0-9])(?=\w*[A-Z])(?=\w*[a-z])\S{8,}$/", $contraseña)) {
            $isValid = false;
        }

        return $isValid;
    }

    function recoge($var)
    {
        $tmp = (isset($_POST[$var])) ? trim(htmlspecialchars($_POST[$var], ENT_QUOTES, "UTF-8")) : "";
        return $tmp;
    }
    
    $mensaje = '[ERROR] ';
    $nombre = recoge('nombre');
    $emilio = recoge('emilio');
    $contraseña1 = recoge('contraseña1');
    $contraseña2 = recoge('contraseña2');

    echo $nombre . '<br/>';
    echo $emilio . '<br/>';
    echo $contraseña1 . '<br/>';
    echo $contraseña2 . '<br/>';

    $resultado1 = checkPassword($contraseña1);
    $resultado2 = checkPassword($contraseña2);
    echo $resultado1 . '<br/>';
    echo $resultado2 . '<br/>';

    $mensaje = checkEmptyFields($mensaje, $nombre, $emilio, $contraseña1, $contraseña2);

    checkEmail($resultado2, $emilio);
    checkPassAreEqual($resultado2, $contraseña1, $contraseña2);
    $resultado1 = checkPassword($contraseña1);
    $resultado2 = checkPassword($contraseña2);

    if (! $resultado1 || ! $resultado2) {
        $mensaje .= 'La contraseña no cumple las reglas de seguridad';
        echo '<h1>' . $mensaje . '</h1>';
        exit();
    }

    echo 'Usuario registrado';
}

/**
 *
 * @param
 *            mensaje
 * @param
 *            nombre
 * @param
 *            emilio
 * @param
 *            contraseña1
 * @param
 *            contraseña2
 */
function checkEmptyFields($mensaje, $nombre, $emilio, $contraseña1, $contraseña2)
{
    if (empty($nombre) || empty($emilio) || empty($contraseña1) || empty($contraseña2)) {
        $mensaje .= 'Tiene que introducir todos los datos del formulario';
        echo '<h1>' . $mensaje . '</h1>';
        exit();
    }
    return $mensaje;
}

/**
 *
 * @param
 *            resultado2
 * @param
 *            emilio
 */
function checkEmail($resultado2, $emilio)
{
    if (! filter_var($emilio, FILTER_VALIDATE_EMAIL)) {
        $mensaje .= 'Tiene que introducir un correo electrónico válido';
        echo '<h1>' . $mensaje . '</h1>';
        exit();
    }
}

/**
 *
 * @param
 *            resultado2
 * @param
 *            contraseña1
 * @param
 *            contraseña2
 */
function checkPassAreEqual($resultado2, $contraseña1, $contraseña2)
{
    if ($contraseña1 !== $contraseña2) {
        $mensaje .= 'Tiene que introducir la misma contraseña ambas veces';
        echo '<h1>' . $mensaje . '</h1>';
        exit();
    }
}

?>
</body>
</html>
