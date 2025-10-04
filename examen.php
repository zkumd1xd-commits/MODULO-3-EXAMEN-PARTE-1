<?php
// Inicializamos los contadores
$pares = 0;
$impares = 0;

// Recorremos los números del 1 al 50
for ($i = 1; $i <= 50; $i++) {
    // Usamos el operador módulo (%) para verificar si es par
    if ($i % 2 == 0) {
        $pares++; // Si el número es divisible por 2, es par
    } else {
        $impares++; // Si no, es impar
    }
}

// Mostramos los resultados
echo " Contador de Pares e Impares (1 al 50)\n";
echo "Números pares: $pares\n";
echo "Números impares: $impares\n";
?>
<?php
//EJERCICIO 2 

//PASO 1 :Denificion de numeros de multiplicacion
$numero = 1;

echo "Tabla de Multiplicar del $numero\n";

// Usamos un bucle for para recorrer del 1 al 10
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero × $i = $resultado\n";
}
?>
<?php

//EJERCICIO 3
 
// PASO 1: Número secreto definido
$numeroSecreto = 15;

// PASO 2:Contamos el intento y el contador
$intento = 1;
$contador = 0;

echo " Juego: Adivina el Número\n";


while ($intento != $numeroSecreto) {
    echo "Intento #" . ($contador + 1) . ": probando con $intento...\n";
    $intento++;
    $contador++;
}

// Cuando se acierta
echo "¡Número adivinado! Era el $numeroSecreto.\n";
echo " Total de intentos: $contador\n";
?>
<?php

//EJERCICIO 4

$suma = 0; // Inicializamos la suma

// Recorremos los números del 1 al 100
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) { // Si el número es impar
        $suma += $i;   // Lo sumamos
    }
}

// Mostramos el resultado
echo " La suma de los números impares del 1 al 100 es: $suma\n";
?>
<?php

//EJERCICIO 5

// Definimos la edad de la persona
$edad = 25 // Puedes cambiar este valor para probar otros casos

// Verificamos si cumple con los requisitos
if ($edad >= 18 && $edad <= 65) {
    echo " Edad: $edad años. Cumple los requisitos para obtener una licencia de conducir.\n";
} else {
    echo " Edad: $edad años. No cumple los requisitos para obtener una licencia de conducir.\n";
}
?> 

<?php

//EJERCICIO 6

$tamaño = 5; // Tamaño del cuadrado

// Bucle externo para las filas
for ($fila = 1; $fila <= $tamaño; $fila++) {
    // Bucle interno para las columnas
    for ($columna = 1; $columna <= $tamaño; $columna++) {
        echo "# ";
    }
    echo "\n"; // Salto de línea al final de cada fila
}
?>

<?php

//EJERCICIO 7

// Definimos el número a evaluar
$numero = -5; 

// PASO 1::Clasificamos el número
if ($numero > 0) {
    echo "➕ El número $numero es positivo.\n";
} elseif ($numero < 0) {
    echo "➖ El número $numero es negativo.\n";
} else {
    echo "🟰 El número es cero.\n";
}
?>
 
 <?php
 
 //EJERCICIO 8

// PASO 1: Recorremos los números del 1 al 30
for ($i = 1; $i <= 30; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "MarTierra\n";
    } elseif ($i % 3 == 0) {
        echo "Mar\n";
    } elseif ($i % 5 == 0) {
        echo "Tierra\n";
    } else {
        echo "$i\n";
    }
}
?>
 <?php

 //EJERCICIO 9

//PASO 1: Definimos la temperatura en grados Celsius
$temperatura = 18; // Puedes cambiar este valor para probar otros casos

// Clasificamos la temperatura
if ($temperatura < 10) {
    echo "❄️ La temperatura es de $temperatura°C. Está fría.\n";
} elseif ($temperatura >= 10 && $temperatura <= 25) {
    echo "🌤️ La temperatura es de $temperatura°C. Está templada.\n";
} else {
    echo "🔥 La temperatura es de $temperatura°C. Está calurosa.\n";
}
?>
<?php 

//EJERCICIO 10

// Cuenta regresiva desde 10 hasta 1
for ($i = 10; $i >= 1; $i--) {
    echo "$i...\n";
    sleep(1); // Pausa de 1 segundo entre cada número (opcional)
}

// Mensaje final
echo " ¡Feliz Año Nuevo! \n";
?>