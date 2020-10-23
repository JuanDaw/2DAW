<?php

function exception_error_handler($severidad, $mensaje, $fichero, $linea)
{
    if (!(error_reporting() & $severidad)) {
        // Este código de error no está incluido en error_reporting
        return;
    }
    throw new ErrorException($mensaje, 0, $severidad, $fichero, $linea);
}
set_error_handler("exception_error_handler");

// try {
//     echo $x;
// } catch (Throwable $e) {
//     echo "Ha capturado el siguiente error que tiene este mensaje: ";
//     echo $e->getMessage();
// }

try {
    echo $x;
} catch (Error | ErrorException $e) {
    echo "Ha capturado el siguiente error que tiene este mensaje: ";
    echo $e->getMessage();
}
