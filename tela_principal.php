<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela principal</title>
    <link rel="stylesheet" href="app/css/tela_principal.css">
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.ico.ico">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="greeting">Seja bem vindo, <?php echo $_SESSION['nome']; ?></h1>
            <img src="app/img/linha.png" alt="Logo" class="logo" href="">
            <p>
                <a href="logout.php">Sair</a>
            </p>
        </div>
        <h2 class="subtitle">Treino Personalizado</h2>
        
        <div class="day-container">
            <div class="day">
                <h3>Dia 1:</h3>
                <p>Conteúdo do Dia 1 gerado pelo banco de dados.</p>
            </div>
            <div class="day">
                <h3>Dia 2:</h3>
                <p>Conteúdo do Dia 2 gerado pelo banco de dados.</p>
            </div>
        </div>

        <hr class="separator">
        <h2 class="history-title">histórico</h2>
        <p class="history-content">Conteúdo do histórico gerado com o nome do usuário.</p>
    </div>
    <script src="app/js/tela_principal.js"></script>
</body>
</body>
</html>