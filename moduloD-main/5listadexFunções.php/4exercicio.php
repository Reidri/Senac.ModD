<?php
echo "gerador de numeros aleatorios \n ";
echo "digite o valor minimo que o numero pode ter \n";
 $min=readline();
 echo " digite o valor maximo que o numero pode ter \n";
 $max=readline();
 
 function aleatorio($min,$max){
    return rand($min,$max);
 }
 echo "o numero é: ";
 echo aleatorio($min,$max);
?>