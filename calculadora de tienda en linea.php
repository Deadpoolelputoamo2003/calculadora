<?php
$precio1 = readline("Ingrese el precio del Producto 1: ");
$cantidad1 = readline("Ingrese la cantidad del Producto 1: ");
$precio2 = readline("Ingrese el precio del Producto 2: ");
$cantidad2 = readline("Ingrese la cantidad del Producto 2: ");
$precio3 = readline("Ingrese el precio del Producto 3: ");
$cantidad3 = readline("Ingrese la cantidad del Producto 3: ");

$subtotal = ($precio1 * $cantidad1) + ($precio2 * $cantidad2) + ($precio3 * $cantidad3);

$impuestos = $subtotal * 0.15;

$descuento = $subtotal * 0.10;

$total = $subtotal + $impuestos - $descuento;

echo "Subtotal: $$subtotal\n";
echo "Impuestos (15%): $$impuestos\n";
echo "Descuento (10%): $$descuento\n";
echo "Total Final: $$total\n";
?>
