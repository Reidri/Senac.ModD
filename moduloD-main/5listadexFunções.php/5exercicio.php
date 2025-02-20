<?php
for($i=0;$i<5;$i++){
echo "digite o ",$i+1, " numero \n";
$num[]=readline();
}

function media($num){
   return array_sum($num) / 2;
}

// var_dump($num);
// exit;
echo media($num);

?>