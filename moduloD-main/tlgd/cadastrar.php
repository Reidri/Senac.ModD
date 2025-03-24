<?php include('header.php') ?>


<div class="bg-gray-200 flex justify-center min-h-screen">
    <div class="bg-gray-500 mb-10 mt-20 text-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h1 class="text-3xl font-semibold text-center mb-4">Cadastro de Usuário</h1>
        
        <form action="acoes.php" method="POST" class="space-y-4">
            <input type="hidden" name="source" value="<?php echo isset($_GET['source']) ? $_GET['source'] : 'logar'; ?>">

            <!-- Nome -->
            <div>
                <label for="nome" class="block text-sm">Nome</label>
                <input type="text" name="nome" placeholder="Digite seu nome" class="w-full p-2 mt-1 border rounded-md bg-gray-100 text-gray-800">
            </div>
            
            <!-- E-mail -->
            <div>
                <label for="email" class="block text-sm">E-mail</label>
                <input type="email" name="email" placeholder="Digite seu e-mail" class="w-full p-2 mt-1 border rounded-md bg-gray-100 text-gray-800">
            </div>

            <!-- Senha -->
            <div>
                <label for="senha" class="block text-sm">Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha" class="w-full p-2 mt-1 border rounded-md bg-gray-100 text-gray-800">
            </div>

            <!-- Confirmar Senha -->
            <div>
                <label for="confirmar_senha" class="block text-sm">Confirme sua senha</label>
                <input type="password" name="confirmar_senha" placeholder="Digite sua senha novamente" class="w-full p-2 mt-1 border rounded-md bg-gray-100 text-gray-800">
            </div>

            <!-- Mensagem -->
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

            <!-- Botões -->
            <div class="flex justify-center">
                <button type="submit" name="cadastrar_usuario" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md">
                    Cadastrar
                </button>
            </div>
        </form>
    </div>
</div>

<?php include('footer.php'); ?>