<?php
// Declaración de variables
$nombre = "Stiven";
$edad = 21;

// Declaración de constantes
define("PI", 3.1416);
echo "Constante PI: " . PI . "<br>";

// Tipado fuerte y débil
function suma(int $a, int $b): int {
    return $a + $b;
}
echo "Suma tipada: " . suma(3, 4) . "<br>";

// Ejemplo de sentencia declare
declare(ticks=1);
?>

