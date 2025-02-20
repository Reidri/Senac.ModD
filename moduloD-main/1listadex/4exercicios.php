<?php
echo "digite um numero para exibir sua tabuada \n";
$num=readline();
for($i=0; $i<21; $i++){
    $resp=$num*$i;
    echo "$num x $i = $resp \n";
}


?>