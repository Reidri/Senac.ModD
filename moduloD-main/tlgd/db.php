<?php

function db(){
    $db = new PDO('sqlite:meubanco.sqlite');
    return $db;
}


?>