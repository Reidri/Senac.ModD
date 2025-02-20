<?php
$total=0;
for($i=0; $i<4; $i++){
    echo "digite o ". $i+1 . " numero \n";
    $numeros[]=readline();
    if($i%2==0){
        $total+=$numeros[$i];
    }
}
    echo "a soma dos numeros é: $total";
?>