<?php

$a = 1;

function prueba()
{
    // echo "$a\n"; esto dará un error porque las funciones solo aceptan variables locales y esta var es global
    $m = 5;
    echo "$m\n";

    $a = 5; /* esto crearía una nueva variable local que "sombrearía" a la var global. 
            No es un sombreado porque no tienen nada que ver una con la otra.
            Si se quisiese acceder a la variable de fuera se tendría que poner global $a; al principio
            Hay que utilizar lo menos posible los global ya que vuelven a la función impura */
}

prueba();

// echo "$m\n"; esto dará error porque $m no es una variable global sino local a la función prueba

function prueba2()
{
    print_r($_ENV); // esta variable es superglobal por lo tanto se pueden acceder en todo el ámbito de las funciones
}

prueba2();