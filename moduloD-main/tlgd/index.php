<?php include('header.php'); ?>



<!-- código pra mensagem ser mandada em alert() javascrpit, sumir em 3 segundos e sumir aos poucos -->
<?php
if (isset($_GET['mensagem'])) {
    $mensagem = htmlspecialchars($_GET['mensagem'], ENT_QUOTES, 'UTF-8');
    echo "<div id='alerta' style='padding: 10px; background: #ffdd57; color: #000; border-radius: 5px; 
                position: absolute; top: 10px; right: 10px; transition: opacity 1s ease;'>
            $mensagem
          </div>
          <script>
            setTimeout(function() {
                document.getElementById('alerta').style.opacity = '0'; // Faz a mensagem sumir suavemente
                setTimeout(function() {

                    document.getElementById('alerta').style.display = 'none'; // Remove do layout depois que sumir
                }, 1000); // Espera 1 segundo (tempo da transição)
            }, 3000); // Tempo antes de começar a desaparecer (3 segundos)
          </script>";
}
?>
<?php   include('footer.php');  ?>

