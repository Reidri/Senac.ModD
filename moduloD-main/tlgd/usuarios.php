<?php
include('protect.php');
include('db.php');
$query = db()->query("SELECT id, nome, email,cargo FROM usuarios");
$query->execute();
$usuarios = $query->fetchAll();
?>