<?php
//ENUNCIADO: CALCULADORA DE COSTO DE SERVIDOR

/*Qué hacer:

Crea variables para simular el consumo de un servidor backend: $horas_activas (int), $costo_por_hora (float), y un mensaje de estado del servidor $estado_servidor (string).

Realiza la multiplicación aritmética básica para calcular el costo total (guárdala en una variable llamada $costo_total).

Imprime por consola el desglose del cálculo utilizando los operadores aritméticos y el texto combinado. */


//Declaración de variables para simular el consumo de un servidor backend
$horas_activas = 24; //int (entero)
$costo_por_hora = 5.50; //float (decimal) 
$estado_servidor = "Activo"; //string (cadena de texto) 
$costo_total = $horas_activas * $costo_por_hora; //float (decimal) calculando el costo total

//Impresión por consola del desglose del cálculo utilizando operadores aritméticos y texto combinado
echo "el costo total del servidor es: " . $costo_total . ".\n"; 
?>
