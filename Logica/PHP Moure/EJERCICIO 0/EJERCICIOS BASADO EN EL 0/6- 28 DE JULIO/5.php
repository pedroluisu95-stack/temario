<?php 
//ENUNCIADO: Validador de Acceso Lógico

/*
Qué hacer:

Declara una variable booleana $tiene_permiso = true; y otra $sesion_activa = false;.

Utiliza un operador lógico (&& o and) para evaluar si ambas condiciones se cumplen y guarda el resultado en una variable llamada $acceso_permitido.

Utiliza la función var_dump() que aprendimos hoy para imprimir en la consola el resultado exacto de esa validación lógica y comprueba qué tipo de dato devuelve.
*/

//solución
$tiene_permiso = true;
$session_activa = false;

//Evaluación de acceso permitido
$acceso_permitido = $tiene_permiso && $session_activa;

var_dump($acceso_permitido);


?>