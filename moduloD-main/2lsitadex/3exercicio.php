<?php
echo " escolha 10 numeros ";
for($i=0; $i<4; $i++){
    $num[]= readline()
    ;
}
echo "escolha um numero multiplicar os numeros anteriores \n";
$mult = readline();
for($i=0; $i<4; $i++){
    $resp[]=$num[$i]*$mult;
}
echo "os valores que voce digitou, multiplicados por $mult resultam em \n:";
foreach($resp as $respostas){
    echo "$respostas \n";
}
?>