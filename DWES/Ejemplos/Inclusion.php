<?php
//Inclusión de scripts

include "./Estructuras.php";
echo "Se ha incluido el script correctamente\n";
require "./Estructuras.php"; // hace lo mismo que el include pero genera un error fatal en vez de un warning+

// la diferencia entre el: require_once es que comprueba si el archivo ha sido includo ya y si ha sido no lo incluye mas
// y el include_once es que si no esta el archivo te da un warning (se utilizan para las definiciones)
// -el archivo tiene que aparecer con su extensión
// -el archivo se abre en modo html por eso se necesita la etiqueta de php
// -un script puede retornar un valor con la sentencia return por eso puedes guardar el require o include en una variable

// INCLUDE PATH
// te muestra la ruta a la que se le va a hacer la busqueda del archivo por eso es conveniente
// poner en el require o include la ruta completa del archivo para que no mire el include path
// por lo tanto es más rapido y eficiente de esta forma.