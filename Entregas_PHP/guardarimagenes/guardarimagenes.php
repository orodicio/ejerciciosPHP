
<?php
define("DIRECTORIO", "/home/orodicio/Escritorio/imgusers");

$archivo1 = $_FILES['archivo1'];
$archivo2 = $_FILES['archivo2'];

// Compruebo si faltan los dos archivos
if (empty($archivo1['name']) && empty($archivo2['name'])) {
    echo 'ERROR: No se indicó ningún archivo a subir';
    require_once ('guardarimagenes.html');
    exit();
}

// Compruebo el peso de los dos archivos juntos (si los hay)
if (! empty($archivo1['name']) && ! empty($archivo2['name'])) {
    $errorTamaño = tamañoCorrecto($archivo1, $archivo2);
    if (! $errorTamaño) {
        echo "Ambos archivos no deben superar los 300 kbytes";
        require_once ('guardarimagenes.html');
        exit();
    }
}

// Muestro el mensaje de bienvenida
$nombreusuario = $_REQUEST['nombre'];
echo '<h1>Bienvenido ' . "$nombreusuario" . '</h1>';
subirAlservidor($archivo1);
subirAlservidor($archivo2);

// Función para subir los archivos al servidor
// Función para subir los archivos al servidor
function subirAlservidor($archivo)
{
    $mensaje = '';
    $codigoerror = [
        'Subida correcta',
        'El tamaño del archivo excede el admitido por el servidor',
        'El tamaño del archivo excede el admitido por el cliente',
        'El archivo no se pudo subir completamente',
        'No se seleccionó ningún archivo para ser subido',
        'No existe un directorio temporal donde subir el archivo',
        'No se pudo guardar el archivo en disco',
        'Una extensión PHP evito la subida del archivo'
    ];
    $nombre = $archivo['name'];
    $temporalFichero = $archivo['tmp_name'];
    $error = $archivo['error'];

    // Compruebo si existe. Si no existe, pos nada
    if (! empty($nombre)) {
        // Imprimo los datos del fichero
        $mensaje .= 'Intentando subir el archivo: ' . ' <br />';
        $mensaje .= "- Nombre:  $nombre" . ' <br />';
        $mensaje .= "- Código de estado: $error" . ' <br />';
        $mensaje .= '<br />RESULTADO<br />';
        if ($error == 0) { // Compruebo si tiene errores
            if (formatoCorrecto($archivo)) { // Compruebo si está en el formato correcto
                if (noexisteEnRepositorio($nombre)) { // Compruebo si ya existe en el directorio
                    if (is_dir(DIRECTORIO) && is_writable(DIRECTORIO)) {
                        if (move_uploaded_file($temporalFichero, DIRECTORIO . '/' . $nombre) == true) {
                            $mensaje .= 'Archivo guardado en: ' . DIRECTORIO . '/' . $nombre . ' <br />';
                        } else {
                            $mensaje .= 'ERROR: Archivo no guardado correctamente <br />';
                        }
                    } else {
                        $mensaje .= 'ERROR: No es un directorio correcto o no se tiene permiso de escritura<br />';
                    }
                } else {

                    $mensaje .= "El archivo " . "$nombre" . 'ya existe en esta ubicación <br />';
                }
            } else {
                $mensaje .= "El archivo " . "$nombre" . 'está en un formato no reconocible <br />';
            }
        } else {
            $mensajeError = $codigoerror[$error];
            $mensaje .= "Se ha producido el error: " . $error . ":" . $mensajeError . " <br />";
        }
        echo '<p>'.$mensaje.'<p>';
       

    }
}
echo  "<a href=\"guardarimagenes.html\">Volver a la página de subida</a>";





// Función que comprueba los pesos de los dos archivos juntos
function tamañoCorrecto($f1, $f2)
{
    if (($f1['size'] + $f1['size']) > 300000) {
        return false;
    }
    return true;
}

// Función que comprueba si tienen el formato correcto
function formatoCorrecto($f1)
{
    if ($f1['type'] == "image/jpeg" || $f1["type"] == "image/pjpeg" || $f1["type"] == "image/png") {
        return true;
    }
    return false;
}

// Función que comprueba si existen en repositorio
function noexisteEnRepositorio($nombre)
{
    if (is_file(DIRECTORIO . '/' . $nombre)) {
        return false;
    }
    return true;
}

?>




