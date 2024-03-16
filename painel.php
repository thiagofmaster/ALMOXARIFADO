<?php

if(!isset($_SESSION)) {
    session_start();
}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    Bem Vindo ao Painel, <?php echo $_SESSION['nome']; ?>

    <button type="submit" formaction="/logout.php" >Sair</button>
    type="submit" formaction="/action_page2.php"

</body>
</html>