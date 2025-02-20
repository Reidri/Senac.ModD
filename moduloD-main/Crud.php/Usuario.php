<?php

public class Usuario{

    public $id;
    public $nome;
    public $email;
    public $senha;

public function db(){
    return $db = new PDO('sqlite:database;sqlite');
}


public function cadastrar($nome,$email,$senha){
    $query = $this->db()->prepare('INSERT INTO usuarios (nome,email,senha) values (:nome, :email, :senha)');

    $query->execute(['nome'->$nome,'email'->$email,'senha'->$senha]);

}

}
?>