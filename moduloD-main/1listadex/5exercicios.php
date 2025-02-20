<?php
$random=rand(0,50);
echo "$random \n";
echo "Tente acertar o numero aleatorio! \n";
for($i=0; $i<5; $i++){
$try=readline();
if($i<4){
if($try==$random){
    echo "parabéns você acertou o numero!!!";
    break;
}else{
    $restantes=4-$i;
    echo "quase!, voce ainda tem $restantes tentativas, tente outro numero! \n";
}
}else{
    echo "você perdeu as chances, tente novamente!";
}
}
?>