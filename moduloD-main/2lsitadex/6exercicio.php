<?php
echo " escolha 10 numeros \n";
for($i=0; $i<4; $i++){
    $num[]= readline();
}
for($i=count($num)-1; $i>=0; $i--){
   $numrev[]=$num[$i];
}
echo "os numeros ao contrario são \n";
foreach($numrev as $resp){
    echo "$resp \n";
}
?>