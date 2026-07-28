<?php

//ENUNCIADO: Tipos Nulos y Vacíos

/* 
Qué hacer:Declara una variable llamada $token_sesion 
y asignale un valor nulo (null) simulando que un usuario
aún no ha iniciado sesión.

Impresión:Imprime un mensaje que indique el estatus de la
sesión utilizando esa variable.
*/

//TIPOS NULOS Y VACIOS

$token_sesion = null;

//IMPRESIÓN DEL ESTATUS SIMULANDO LA AUSENCIA DE SESIÓN
echo "Estatus de sesión: El usuario no ha iniciado sesion. Token actual: " . $token_sesion . ".!\n"
?>