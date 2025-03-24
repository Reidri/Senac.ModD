<?php
include('usuarios.php');
include('header.php');
?>

<div class="bg-gray-300 flex justify-center items-center min-h-screen">
    <div class="bg-gray-500 text-white p-8 rounded-lg mt-20 mb-10 shadow-lg ">
        <h1 class="text-3xl font-semibold text-center mb-4">Gerenciamento de Usuários</h1>

        <!-- Mensagem de erro ou sucesso -->
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

        <!-- Tabela de usuários com scroll vertical -->
        <div class="overflow-y-auto max-h-50">
            <table class="min-w-100  max-w-300 text-sm">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">NOME</th>
                        <th class="px-4 py-2 border">E-MAIL</th>
                        <th class="px-4 py-2 border">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr id="usuario-<?= $usuario['id']; ?>" class="border-b">
                            <td class="px-4 py-2 text-md"><?= $usuario['id']; ?></td>
                            <td class="px-4 py-2 text-md nome"><?= $usuario['nome']; ?></td>
                            <td class="px-4 py-2 text-md email"><?= $usuario['email']; ?></td>
                            <td class="px-4 py-2">
                                <form action="acoes.php" method="POST" class="form-alterar" id="form-<?= $usuario['id']; ?>" style="display: none;">
                                    <input type="hidden" name="id" value="<?= $usuario['id']; ?>">
                                    <input type="text" name="nome" value="<?= $usuario['nome']; ?>" required class="p-2 border rounded-md bg-gray-100 text-gray-800">
                                    <input type="email" name="email" value="<?= $usuario['email']; ?>" required class="p-2 border rounded-md bg-gray-100 text-gray-800">
                                    <button type="submit" name="alterar_usuario" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md">Salvar</button>
                                    <button type="button" onclick="cancelarEdicao(<?= $usuario['id']; ?>)" class="bg-gray-600 hover:bg-gray-700 text-white py-2 px-4 rounded-md">Cancelar</button>
                                </form>
                                <form action="acoes.php" method="POST" style="display: inline;">
                                    <input type="hidden" name="id" value="<?= $usuario['id']; ?>">
                                    <button type="submit" id="deletar-<?= $usuario['id']; ?>" name="deletar_usuario" class="bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-md">Deletar</button>
                                </form>
                                <button class="alterar-btn bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md" id="alterar-<?= $usuario['id']; ?>" onclick="alterarUsuario(<?= $usuario['id']; ?>)">Alterar</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Formulário de logout e cadastro -->
        <div class="mt-6 text-center">
            <form action="deslogar.php" style="display: inline;">
                <button type="submit" class="bg-gray-600 hover:bg-gray-700 text-white py-2 px-4 rounded-md">Deslogar</button>
            </form>
            <button type="button" class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md mt-2">
                <a href="cadastrar.php?source=painel" class="text-white">Cadastrar um usuário</a>
            </button>
        </div>
    </div>
</div>

<script>
    function alterarUsuario(id) {
        // Esconder nome e email
        document.querySelector(`#usuario-${id} .nome`).style.display = 'none';
        document.querySelector(`#usuario-${id} .email`).style.display = 'none';
        
        // Exibir o formulário de edição
        document.querySelector(`#form-${id}`).style.display = 'inline';
        
        // Esconder os botões Alterar e Deletar
        document.querySelectorAll("[id*='deletar'], [id*='alterar']").forEach(element => {
            element.style.display = 'none';
        });
    }

    function cancelarEdicao(id) {
        // Exibir nome e email novamente
        document.querySelector(`#usuario-${id} .nome`).style.display = 'table-cell';
        document.querySelector(`#usuario-${id} .email`).style.display = 'table-cell';
        
        // Esconder o formulário de edição
        document.querySelector(`#form-${id}`).style.display = 'none';
        
        // Exibir novamente os botões Alterar e Deletar
        document.querySelectorAll("[id*='deletar'], [id*='alterar']").forEach(element => {
            element.style.display = 'inline';
        });
    }
</script>

<?php include('footer.php'); ?>