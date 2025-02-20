<?php

echo "teste de palindromo, digite uma palavra \n";
$palavra=readline();


function palindromo($palavra){
   $arvalap = strrev($palavra);
   return $arvalap == $palavra ? 'a palavra é um palindromo' : 'a palavra NÃO é um palindromo';
}
echo palindromo($palavra);
?>