<?php

//ENUNCIADO

/*

Qué hara esto:Define dos constantes (recuerda usar const y nombres en 
mayúsculas):

Una  para el nombre de una base de datos (ejemplo: DB_NAME =inventario_alo).

Otra para la versión del sistema (ejemplo: VERSION = 1.0).

Impresión: Imprime un mensaje por terminal usando echo que avise que el sistema
está conectado a esa base de datos y usando esa versión.

*/


//CONSTANTE DE CONFIGURACIÓN

const DB_NAME = "invetario_alcaldia";
const VERSION = 1.0;

//IMPRESION DE LAS CONSTANTES 
echo "sistema conectado a la base de datos: " . DB_NAME . "con la versión: " . VERSION . ".!\n"; 

?>