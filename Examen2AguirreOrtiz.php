<?php
/*CBETIS 89 ...
Sergio Alejandro Aguirre Ortiz
3°A Programación Matutino
Programa que almacena los precios de 5 articulos en un arreglo llamado $arrayPrecios, posteriormente por medio de un ciclo calcula el IVA de cada precio y lo guarda en otro arreglo llamado $arraySubtotal. Despues calcula un descuento del 10% a todos los elementos del $arraySubtotal y los coloca en un arreglo llamado $arrayDescuento. Finalmente obtiene los resultados despues de aplicar el descuento y los almacena en unnnuevo arreglo llamdo $arrayTotal. Al final imprime el contenido de todos los arreglos*/


$arrayPrecios = [500, 400, 200, 700, 100];


$arrayIVA = [];
$arraySubtotal = [];
$arrayDescuento = [];
$arrayTotal = [];


define('IVA', 0.16); // 16% de IVA
define('DESCUENTO', 0.10); // 10% de descuento


for ($i = 0; $i < count($arrayPrecios); $i++) {
    $iva = $arrayPrecios[$i] * IVA;
    $subtotal = $arrayPrecios[$i] + $iva;
    
    $arrayIVA[] = $iva;
    $arraySubtotal[] = $subtotal;
}


for ($i = 0; $i < count($arraySubtotal); $i++) {
    $descuento = $arraySubtotal[$i] * DESCUENTO;
    $arrayDescuento[] = $descuento;
}


for ($i = 0; $i < count($arraySubtotal); $i++) {
    $total = $arraySubtotal[$i] - $arrayDescuento[$i];
    $arrayTotal[] = $total;
}


echo "Precios originales:\n";
print_r($arrayPrecios);

echo "<br>","<br>";

echo "\nIVA aplicado:\n";
print_r($arrayIVA);

echo "<br>","<br>";

echo "\nSubtotal con IVA:\n";
print_r($arraySubtotal);

echo "<br>","<br>";

echo "\nDescuentos aplicados:\n";
print_r($arrayDescuento);

echo "<br>","<br>";

echo "\nTotal después del descuento:\n";
print_r($arrayTotal);
?>
