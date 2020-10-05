<?php

// Funciones predefinidas destacadas
// inset(): se utiliza para saber si una variable existe, una variable que vale null tambien se da false
// empty(): se utiliza para saber si una variable esta vacía, una variable es vacía si no existe o si se evalúa a false
// var_dump(): te da información sobre una variable sobre el valor y el tipo de la variable

$x = 2;
inset($x); // true
$x = null;
inset($x); // false

// ----------------------

empty($s); // true
$s = 21;
empty($s); // false
$s = "";
empty($s); // true

// ----------------------

$v = 5;
var_dump($v); // te da int(5) a parte de la ruta donde se guarda