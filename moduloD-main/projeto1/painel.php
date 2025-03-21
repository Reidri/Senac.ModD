<?php

include 'protect.php';

if (!isset($_SESSION)) {
    session_start();
}



?>

<h1> Bem vindo <?= $_SESSION['nome']; ?> </h1>
<a href="logout.php" >Deslogar</a>
<a href="alterar.php">Alterar informações</a>
<a href="#" onclick="document.getElementById('formExcluir').submit();">Deletar conta</a>

<form id="formExcluir" action="acoes.php" method="POST">
    <input type="hidden" name="email" value="<?= $_SESSION['email']; ?>">
    <input type="hidden" name="excluir_usuario">
</form>