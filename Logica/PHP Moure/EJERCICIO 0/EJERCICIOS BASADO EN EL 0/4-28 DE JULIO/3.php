<?php

//ENUNCIADO: PERFIL DE USUARIO BACKEND

/*
Qué hacer:

Declara constantes para la configuración del sistema: ROL_DEFECTO = "Administrador" y MAX_INTENTOS = 3.

Declara variables primitivas para un perfil de usuario: $nombre_usuario (string), $id_empleado (integer), $sueldo (float), y $activo (boolean).

Imprime por terminal un mensaje de bienvenida que combine las constantes y todas las variables usando el punto (.) y saltos de línea (\n).
*/ 

//Declaracion de constantes para la configuración del sistema
const ROL_DEFECTO = "Administrador";
const MAX_INTENTOS = 3;

//Declaración de variables primitivas para un perfil de usuario 
$nombre_de_usuario = "Eva";   //string (cadena de texto)
$id_empleado = 30936036; //integer (entero)
$sueldo = 3500.50; //float (decimal)
$activo = true; //boolean (verdadero o falso)

//Impresión de mensaje de bienvenida (combinando constantes y variables)

echo "Bienvenido al sistema, " . $nombre_de_usuario . ".\n";
echo "Tu rol por defecto es: " . ROL_DEFECTO . ".\n" ;
echo "Tu id de empleado es: " . $id_empleado . ".\n";
echo "Tu sueldo es: " . $sueldo . ".\n";
echo "Tu estado de actividad es: " . $activo . "\n"; 
?>



