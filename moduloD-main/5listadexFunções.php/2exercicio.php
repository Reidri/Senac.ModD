<?php

echo "digite um numero para fatorar \n";
$num=readline();
$fatorado =0;

function fatorar($n){
    for($i=$n-1; $i>0; $i--){
         $n *= $i;
    }
    return $n;
}
echo fatorar($num);
?>