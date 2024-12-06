<?php
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura dos dados do formulário
    $nome_pet = $_POST['nome_pet'];
    $tipo_pet = $_POST['tipo_pet'];
    $sexo_pet = $_POST['sexo_pet'];
    $data_nascimento = $_POST['data_nascimento'];

    // Aqui você pode processar os dados, como salvar em um banco de dados ou realizar outras ações
    // No exemplo, vamos apenas mostrar os dados cadastrados
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica de Pets - Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <h1>CLÍNICA DE PETS</h1>
    </header>

    <!-- Menu de navegação -->
    <nav>
        <ul class="menu">
            <li><a href="index.php">Cadastro</a></li>
            <li><a href="desenvolvedores.php">Desenvolvedores</a></li>
        </ul>
    </nav>

    <!-- Seção de formulário de cadastro -->
    <section class="cadastro">
        <div class="container">
            <h2>Cadastro de Pet</h2>
            <form action="index.php" method="POST">
                <div class="grupo">
                    <label for="nome_pet">Nome do Pet:</label>
                    <input type="text" id="nome_pet" name="nome_pet" class="controle" required>
                </div>
                <div class="grupo">
                    <label for="tipo_pet">Tipo de Pet:</label>
                    <select id="tipo_pet" name="tipo_pet" class="controle">
                        <option value="cachorro">Cachorro</option>
                        <option value="gato">Gato</option>
                    </select>
                </div>
                <div class="grupo">
                    <label for="sexo_pet">Sexo:</label>
                    <input type="radio" id="macho" name="sexo_pet" value="macho" required><label for="macho">Macho</label>
                    <input type="radio" id="femea" name="sexo_pet" value="femea" required><label for="femea">Fêmea</label>
                </div>
                <div class="grupo">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" class="controle" required>
                </div>
                <div class="grupo">
                    <input type="submit" value="Cadastrar" class="btn-cadastrar">
                    <input type="reset" value="Limpar" class="btn-limpar">
                </div>
            </form>
        </div>

        <!-- Exibindo os dados cadastrados, se houver -->
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="resultado">
            <h3>Cadastro Realizado com Sucesso!</h3>
            <p><strong>Nome do Pet:</strong> <?php echo htmlspecialchars($nome_pet); ?></p>
            <p><strong>Tipo de Pet:</strong> <?php echo htmlspecialchars($tipo_pet); ?></p>
            <p><strong>Sexo:</strong> <?php echo htmlspecialchars($sexo_pet); ?></p>
            <p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($data_nascimento); ?></p>
        </div>
        <?php endif; ?>
    </section>

    <!-- Rodapé -->
    <footer>
        <p>IFRN campus Santa Cruz | Trabalho de Autoria Web | Prof. Marcelo Figueiredo Barbosa Júnior</p>
    </footer>
</body>
</html>
