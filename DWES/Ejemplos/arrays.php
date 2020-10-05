<?php
// se crean a traves de los corchetes

$x = [6, 9, 10, 54];

// se obtienen a través de la indexación y si te sales de los indices te sale un error offset

$x[0];

// se puede cambiar un elemento del array a través de la indexación

$x[1] = 99;

// en un array se pueden tener diferentes tipos

$a = [12, "hola", 14.0, false, null, [2, 3, 74]];

// se pueden eliminar elementos del array a través del unset() aunque se queda el hueco porque se
// parece mas a un diccionario de Python cada elemento del array es una pareja de key:value

unset($a[2]);