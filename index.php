<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0){
    echo "Preencha seu email";
    } else if (strlen($_POST['senha']) == 0){
    echo "Preencha a sua senha";
} else {
    $email = $mysqli -> real_escape_string($_POST['email']);
    $senha = $mysqli -> real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuario where email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli -> query($sql_code) or die("Falha na execução do SQL: " .$mysqli->error);

    $quantidade = $sql_query -> num_rows;
    }
    if($quantidade == 1 ){
        $usuario = $sql_query-> fetch_assoc();

         if(!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['email'] = $usuario['email'];

        header("Location: painel.php");
    } else {
        echo "falha ao logar. Loguim ou senha invalidos";
}
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logim</title>
</head>
<body>
    <h1>Pagina de Login<br></h1>

    <form action="" method="POST">
        <p>
        <label>Email</label>
        <input type="text" placeholder="Email" name="email">
    </p>
    
    <p>     <label>Senha</label>
    <input type="password" placeholder="Senha" name="senha">

    <button type="submit">Entrar</button>

    </form>

</body>
</html>