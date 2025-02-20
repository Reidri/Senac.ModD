<?php
$sexomasc=0;
for($i=0; $i<3; $i++){
    $pessoas[]= 
    [
   'nome' => readline(),
   'cidade' => readline(),
   'idade' => readline(),
   'sexo' => readline()
    ];
   }
   for($i=0; $i<3; $i++){
    $nic[]=[
        'nome'=> $pessoas[$i]['nome'],
        'idade'=>$pessoas[$i]['idade']
    ];
   }
   for($i=0; $i<3; $i++){
     if($pessoas[$i]['cidade']='Santos'){
        $mosan[]=[
            $pessoas[$i]['nome']
        ];
     }   
}
for($i=0; $i<3; $i++){
    if($pessoas[$i]['idade']>=18){
       $dimaior[]=[
           $pessoas[$i]['nome']
       ];
    }   
}
for($i=0; $i<3; $i++){
    if($pessoas[$i]['sexo']='masculino'){
       $sexomasc++;
    }   
}
echo "Lista completa das pessoas digitadas \n";
foreach($nic as $nomeidade){
    echo "$nomeidade \n";
}
echo "essas pessoas são moradores de Santos \n";
foreach($mosan as $santos){
    echo "$santos \n";
}
echo "essas pessoas são maiores de idade \n";
foreach($dimaior as $maior){
    echo "$maior \n";
}
echo "e $sexomasc pessoas são homens";
?>