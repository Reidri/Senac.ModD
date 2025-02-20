<?php
 
 $numeros=[1,2,3,4];
$arr = array_map(function($numeros) {
    return $numeros * 2;
},$numeros);
var_dump($arr);

?>