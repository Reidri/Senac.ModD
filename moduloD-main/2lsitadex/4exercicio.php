<?php
echo "multiplicação em massa! \n";
echo " escolha 10 numeros \n";
for($i=0; $i<4; $i++){
    $num[]= readline()
    ;
}
echo " escolha MAIS 10 numeros!! ";
for($i=0; $i<4; $i++){
    $num2[]= readline()
    ;
}
echo " escolha 10 numeros \n";
for($i=0; $i<4; $i++){
    $mults[]=$num[$i]*$num2[$i];
}
echo "os valores da multiplicação em massa são: \n";
foreach($mults as $respostas){
    echo "$respostas \n";
}
?>