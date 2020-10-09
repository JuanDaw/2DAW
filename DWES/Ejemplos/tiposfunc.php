<?php

function suma($x, $y)
{
    return $x + $y;
}

echo suma(4, 3), "\n";
echo suma("4", "3"), "\n"; // aquí no pasaría nada porque se hace una conversión implícita del tipo

// si queremos declarar de que tipo deben ser tendríamos que poner lo siguiente
function sumaint(int $x, int $y): int
{
    return $x + $y;
}

echo sumaint(4, 3), "\n";
echo sumaint("4", "3"), "\n"; /* no produce ningún tipo de error ya que hay conversión implícita
                                La diferencia con la anterior es que fuerza al interprete a convertir el tipo a entero
                                Sin embargo en la primera siempre son strings */

function sumavoid(int $x, int $y): void
{
    $suma = $x + $y;
    echo "$suma\n";
}

echo sumavoid(4, 3), "\n";
echo sumavoid(4, null), "\n"; // daría error porque permite cualquier tipo menos null, por ello se tiene que declarar un parámetro nulable

function sumaintnul(int $x, ?int $y): void // al poner el ? se dice que el parámetro puede ser nulable, conservandose el null como tipo del parámetro
{
    $suma = $x + $y;
    echo "$suma\n";
}

// para corregir las conversiones se tendría que poner declare(strict_type=1) al principio del fichero donde se llaman a las funciones
