<?php
if (4 > 3) {
    echo "4 es mayor que 3\n";
} elseif (4 < 3) {
    echo "4 es menor que 3\n";
} else {
    echo "4 es igual a 3\n";
}

$x = 1;
switch ($x) {
    case '1':
        echo "Es un 1\n";
        break;
    
    default:
        echo "No es un 1\n";
        break;
}

for ($i=0; $i <= 10; $i++) { 
    echo "$i x $i = ", $i*$i, "\n";
}

// SINTAXIS ALTERNATIVA
if (4 > 3):
    echo "Hola\n";
else:
    echo "Adiós\n";
endif; 

while (true):
    echo "Adiós\n";
    break;
endwhile; 
?>

<?php if ($a == 5): ?> 
    A es igual a 5 
<?php endif; 
// se sale del metodo php para meterse en el metodo html que ejecuta por la salida todo literal
?>
    