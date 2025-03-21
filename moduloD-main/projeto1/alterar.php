<?php

if (!isset($_SESSION)) {
    session_start();
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<label for="nome">Nome</label>
    <form action="acoes.php" method="POST">
        <input class="border-2 border-solid " type="text" name="nome" value=<?php echo $_SESSION['nome']?>><br>
        <label for="email">Email</label>

        <input class="border-2 border-solid" type="email" name="email" value=<?php echo $_SESSION['email']?>><br>
        

    
        <button type="submit" name="alterar_usuario">Alterar</button>
    </form>
</body>
</html>