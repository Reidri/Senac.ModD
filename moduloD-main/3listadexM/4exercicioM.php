<?php
$impares=0;
for($i=0; $i<4; $i++){
    echo "digite o ". $i+1 . " numero \n";
    $numeros[]=readline();
    if($numeros[$i]%2!=0){
        $impares++;
        $imp[]=$numeros[$i];
    }
}
    echo "entre esses numeros existem $impares numeros impares que são: ";
    foreach($imp as $qnt){
        echo $qnt;
        echo " , ";
    }
?>