<?php
include('protect.php');

if(!isset($_SESSION)){
    session_start();
}
   session_destroy();
  header('Location: index.php?mensagem=Usuario desconectado');
   ?>