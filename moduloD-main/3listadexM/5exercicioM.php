<?php
echo "crie os primeiros 10 numeros \n ";
for($i=0; $i<4; $i++){
    echo "digite o ". $i+1 . " numero \n";
    $numeros[]=readline();
    if($i%2==0){
           }
}
echo "crie os outros 10 numeros \n ";
for($i=0; $i<4; $i++){
    echo "digite o ". $i+1 . " numero \n";
    $numeros2[]=readline();
}
for($i=0; $i<4; $i++){
     $numeros3[]=$numeros[$i]+$numeros2[$i];
}
echo "o array com os indices somados fica: \n";
foreach($numeros3 as $nums){
    echo $nums;
    echo " , "; 
}
?>