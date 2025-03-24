<?php  
include('db.php');


if(!isset($_SESSION)){
    session_start();
}

if(isset($_POST['autenticar_usuario'])){
    if(empty(trim($_POST['email'])) || empty(trim($_POST['senha'])) ){
 
        header("Location: logar.php?mensagem=Ambos campos são obrigatórios!");
    }else{
      $query = db()->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
      $query->execute([
        'email' => $_POST['email'],
        'senha' => $_POST['senha']
      ]);
    }

    if($user = $query->fetch()){
        $_SESSION['id']=$user['id'];
        $_SESSION['nome']=$user['nome'];
        $_SESSION['email']=$user['email'];
        $_SESSION['cargo']=$user['cargo'];
        header('Location: painel.php');
    }else{
       header('Location: logar.php?mensagem=E-mail ou senha invalidos!');
    }
}
if(isset($_POST['cadastrar_usuario'])){
    if(empty(trim($_POST['nome'])) || empty(trim($_POST['email'])) || empty(trim($_POST['senha']))){
        header("Location: cadastrar.php?mensagem=Todos os campos são obrigatórios!");
        exit;
    }else{
        if($_POST['confirmar_senha'] == $_POST['senha']){
            $query = db()->prepare("INSERT INTO usuarios (nome,senha,email) VALUES (:nome , :senha , :email)");
            $query->execute([
                'nome' => $_POST['nome'],
                'senha' => $_POST['senha'],
                'email' => $_POST['email']
            ]);
            if($_POST['source']=='painel'){
            header('Location: painel.php?mensagem=Usuario cadastrado com sucesso!');
        }else{
            header('Location: logar.php?mensagem=Usuario cadastrado com sucesso!');
        }
        exit;
    }else{  
        header('Location: cadastrar.php?mensagem=As senhas devem ser identicas!');
    }
}
 
}
if(isset($_POST['deletar_usuario'])){
    $query=db()->prepare("DELETE FROM USUARIOS WHERE id=:id");
    $query->execute([
        'id' => $_POST['id']
    ]);
    header('Location: painel.php?mensagem=Usuario excluido com sucesso!');
}

if(isset($_POST['alterar_usuario'])){
    $query=db()->prepare('UPDATE usuarios set nome = :nome , email = :email WHERE id = :id');
    $query->execute([
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'id' => $_POST['id']
    ]);
    header('Location: painel.php?mensagem=Usuario alterado com sucesso!');
}


?>