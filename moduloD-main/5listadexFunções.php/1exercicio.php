<?php

echo "digite um numero";
$num=readline();


function parImpar($n){
   return $n%2==0 ? 'par' : 'impar';
}
echo parImpar($num);
?>