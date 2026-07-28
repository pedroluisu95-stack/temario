<?php

//ENUNCIADO: Mi Perfil de Programador

/*
Qué hara esto: Declara variables que almacenen la
siguiente información sobre ti:

-Tu nombre (Cadena de texto/String)
-Tu edad (Entero/Integer)
-Tu altura en metros (Decimal/Float)
-Si estás aprendiendo PHP actualmente (Booleano/Boolean:true)

Impresión: Usa "echo" para mostrar un texto por la terminal que combine 
estas variables en una sola frase coherente (ejemplo:"Hola, mi nombre es [nombre],
tengo [edad] años,mido [altura] y es [booleano] que estoy aprendiendo PHP").
*/

//MI PERFIL PROGRAMADOR
//Declaracion de variables con tipos de datos primitivos

$nombre = "Pedro";
$edad = 23;
$altura = 1.60;
$verdad = true;

// Impresión de resultados combinando texto y variables con el punto (.)

echo "Hola, mi nombre es " . $nombre . ".!\n";
echo "tengo" . $edad . " años.!\n";
echo "mido " .$altura . " y es " . $verdad . "que estoy aprendiendo PHP!\n";

?>
