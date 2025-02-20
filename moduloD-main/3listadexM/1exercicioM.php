<?php
echo "array_reverse \n";
for($i=0; $i<4; $i++){
    echo "digite o " . $i+1 . "° numero \n";
    $numeros[]= readline();
}
for($i=count($numeros); $i!=0; $i--){
    echo $numeros[$i-1];
    echo " , ";
}

?>