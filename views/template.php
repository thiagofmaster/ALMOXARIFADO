<!DOCTYPE html>

<html lang="pt-br">

<head>
    <title><?=$title ?></title>
    <meta charset="utf8" />
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/cadastro.css">
    
</head>

<body>

    <!-- Body -->
    <main class="cMainEl">
        <!-- Header -->
        <nav class="nav-menu">
            <ul class="menu">
                <li><a href="/">Início</a></li>
                <li><a href="/register-users">Cadastrar Usuário</a></li>
                <li><a href="./visualizar.php">Visualizar Usuário</a></li>
            </ul>
        </nav>
<?= $this->section("content") ?>


        <!-- Footer -->
        <footer class="footer_page">
            <p>Todos Direito reservados 2023</p>
        </footer>
    </main>

</body>

</html>