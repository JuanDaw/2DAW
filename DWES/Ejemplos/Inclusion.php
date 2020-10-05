<?php
//Inclusión de scripts

include "Estructuras.php";
echo "Se ha incluido el script correctamente\n";
require "Estructuras.php"; // hace lo mismo que el include pero genera un error fatal en vez de un warning+

// la diferencia entre el: require_once es que comprueba si el archivo ha sido includo ya y si ha sido no lo incluye mas
// y el include_once es que si no esta el archivo te da un warning (se utilizan para las definiciones)
// -el archivo tiene que aparecer con su extensión
// -el archivo se abre en modo html por eso se necesita la etiqueta de php
// -un script puede retornar un valor con la sentencia return por eso puedes guardar el require o include en una variable

