<?php
//EJERCICIO 1
$nombre = "Angel"; 
echo "Hola, " . $nombre . "! Bienvenido a PHP.";
?>
<?php
//EJERCICI 2
$numero1 = 11;
$numero2 = 9;

//Realizar operaciones
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = $numero1 / $numero2;

// Mostrar resultados
echo "Suma: " . $suma . "\n";
echo "Resta: " . $resta . "\n";
echo "Multiplicación: " . $multiplicacion . "\n";
echo "División: " . $division . "\n";
?>
<?php

//EJERCICIO 3
// Paso 1:
define("CAMBIO_EURO", 217.65);

// Paso 2: Cantidad en dólares
$dolares = 60;

// Paso 3: Conversión
$euros = $dolares * CAMBIO_EURO;

// Paso 4: Mostrar el resultado
echo $dolares . " dólares equivalen a " . $euros . " euros.\n";
?>
<?php

// EJERCICIO 4 
$edad = 20;

if ($edad >= 18) {
    echo "La persona tiene $edad años. Es mayor de edad.\n";
} else {
    echo "La persona tiene $edad años. Es menor de edad.\n";
}
?>
 
<?php
// EJERCICIO  5
$numero = 21;

if ($numero % 3 == 0) {
    echo "El número $numero es par.\n";
} else {
    echo "El número $numero es impar.\n";
}
?>
<?php
// EJERCICIO 6
$edad = 17; 
if ($edad >= 0 && $edad <= 12) {
    echo "La persona tiene $edad años. Es un niño.\n";
} elseif ($edad >= 13 && $edad <= 17) {
    echo "La persona tiene $edad años. Es un adolescente.\n";
} elseif ($edad >= 18 && $edad <= 59) {
    echo "La persona tiene $edad años. Es un adulto.\n";
} elseif ($edad >= 60) {
    echo "La persona tiene $edad años. Es un adulto mayor.\n";
} else {
    echo "Edad inválida.\n";
}
?>
<?php
// EJERCICIO 7 
$usuarioGuardado = "angelneri";
$contrasenaGuardada = "Neri123";

// Datos ingresados 
$usuarioIngresado = "angelneri";
$contrasenaIngresada = "Neri123";

// Verificación
if ($usuarioIngresado == $usuarioGuardado && $contrasenaIngresada == $contrasenaGuardada) {
    echo " Acceso concedido.\n";
} else {
    echo " Acceso denegado.\n";
}
?>
<?php
//EJERCICIO 8

$precioOriginal = 120; 
$descuento = 0;

if ($precioOriginal > 100) {
    $descuento = 0.15;
} elseif ($precioOriginal >= 50 && $precioOriginal <= 100) {
    $descuento = 0.05;
} else {
    $descuento = 0;
}

$montoDescuento = $precioOriginal * $descuento;
$precioFinal = $precioOriginal - $montoDescuento;

// Mostrar resultados
echo "Precio original: $" . $precioOriginal . "\n";
echo "Descuento aplicado: $" . $montoDescuento . "\n";
echo "Precio final: $" . $precioFinal . "\n";
?>
<?php
//EJERCICIO 9
$numeroDia = 2; 
switch ($numeroDia) {
    case 1:
        echo "Lunes\n";
        break;
    case 2:
        echo "Martes\n";
        break;
    case 3:
        echo "Miércoles\n";
        break;
    case 4:
        echo "Jueves\n";
        break;
    case 5:
        echo "Viernes\n";
        break;
    case 6:
        echo "Sábado\n";
        break;
    case 7:
        echo "Domingo\n";
        break;
    default:
        echo "Número inválido. Debe estar entre 1 y 7.\n";
}
?>
<?php
//EJERCICIO 10
$nota = 50;
echo ($nota >= 60) ? "✅ Aprobado\n" : "❌ Reprobado\n";
?>