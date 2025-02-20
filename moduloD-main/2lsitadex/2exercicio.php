<?php
echo "digite 10 numeros \n";
$negativo = 0;
$positivo = 0;
$impar = 0;
$par = 0;
for ($i = 0; $i < 4; $i++) {
    $num[] = readline();
}

for ($i = 0; $i < 4; $i++) {
    if ($num[$i] >= 0) {
        $positivo++;
    } else {
        $negativo++;
    }
}

for ($i = 0; $i < 4; $i++) {
    if ($num[$i] % 2 == 0) {
        $par++;
    } else {
        $impar++;
    }
}
echo "voce digitou $par numeros pares $impar numeros impar $negativo numeros negativos e $positivo numeros positivos !";
