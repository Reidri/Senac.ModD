<?php include('header.php');?>
<div class="bg-gray-100 flex justify-center pb-30 items-center min-h-screen">
    <div class="bg-[#6c747c] mt-10 text-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h1 class="text-3xl font-semibold text-center mb-4">Acesso a Central</h1>
        <p class="text-center mb-4">
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
        </p>

        <form action="acoes.php" method="POST" class="space-y-4">
            <div>
                <label for="email" class="block text-sm">E-mail</label>
                <input type="email" name="email" placeholder="Digite seu e-mail" class="w-full p-2 mt-1 border rounded-md bg-gray-100 text-gray-800">
            </div>

            <div>
                <label for="senha" class="block text-sm">Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha" class="w-full p-2 mt-1 border rounded-md bg-gray-100 text-gray-800">
            </div>

            <div class="flex justify-between items-center">
                <button type="submit" name="autenticar_usuario" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md">Entrar</button>
                <button type="button" class="bg-transparent text-white border border-white py-2 px-4 rounded-md hover:bg-white hover:text-[#6c747c]">
                    <a href="cadastrar.php">Cadastrar</a>
                </button>
            </div>
        </form>
    </div>
    </div>
    
<?php include('footer.php'); ?>