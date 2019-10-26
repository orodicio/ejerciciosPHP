<?php

// validar usuario
function usuarioOK($usuario, $contraseña)
{
    $usuario = trim(htmlspecialchars($usuario, ENT_QUOTES, "UTF-8"));
    $contraseña = trim(htmlspecialchars($contraseña, ENT_QUOTES, "UTF-8"));
    $acceso = true;
    if (strlen($usuario) < 8) {
        $acceso = false;
    }
    if ($contraseña != strrev($usuario)) {
        $acceso = false;
    }
    return $acceso;
}

// validar contraseña
function recoge($var)
{
    $tmp = (isset($_POST[$var])) ? trim(htmlspecialchars($_POST[$var], ENT_QUOTES, "UTF-8")) : "";
    return $tmp;
}
