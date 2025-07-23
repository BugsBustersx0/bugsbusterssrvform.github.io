<?php

require_once __DIR__ . "/../lib/php/recuperaTexto.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

$saludo = recuperaTexto("saludo");
$nombre = recuperaTexto("nombre");
$respuesta = strtolower(trim(recuperaTexto("respuesta")));

$esCorrecta = ($respuesta === "pera" || $respuesta === "Pera");

$mensaje = "{$saludo} {$nombre}. ";

if ($esCorrecta) {
  $mensaje .= "¡Correcto! 🎉 La respuesta a la adivinanza es 'Pera'.";
} else {
  $mensaje .= "Respuesta incorrecta. ❌ Intenta de nuevo.";
}

devuelveJson($mensaje);
