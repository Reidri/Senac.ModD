<?php
do{
echo "qual operação deseja fazer ? \n";
echo "1- somar           2- subtração \n";
echo "3- multiplicar    4- dividir \n";
echo "               ou        \n";
echo "       digite 5 para SAIR \n";
$resp=readline();
switch($resp){
case 1 :
echo "digite o primeiro numero \n";
$num1=readline();
echo "digite o segundo numero \n";
$num2=readline();
$resposta = $num1+$num2;
echo "a resposta é $resposta \n";
break;
case 2 :
    echo "digite o primeiro numero \n";
    $nums1=readline();
    echo "digite o segundo numero \n";
    $nums2=readline();
    $respostas=$nums1-$nums2;
    echo "a resposta é $respostas \n";
    break;
    case 3 :
        echo "digite o primeiro numero \n";
        $numm1=readline();
        echo "digite o segundo numero \n";
        $numm2=readline();
        $respostam=$numm1*$numm2;
        echo "a resposta é $respostam \n";
        break;
        case 4 :
            echo "digite o primeiro numero \n";
            $numd1=readline();
            echo "digite o segundo numero \n";
            $numd2=readline();
            $respostad=$numd1/$numd2;
            echo "a resposta é $respostad \n";
            break;
}
}while($resp!=5);



?>