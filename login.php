<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }
            //and password_verify($senha, $usuario['senha'])
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: ex012/index.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="stylesheet" href="estilo/media-quey.css">
</head>
<body>
    <main>
        <section id="login">
            <div id="imagem">
            </div>
            <div id="formulario">
                <h1>Login</h1>
                <p>Seja bem-vindo(a). Faça o seu login para prosseguir. O mundo dos anime lhe agarda.</p>
                <form action="login.php" method="post" autocomplete="on">
                    <div class="campo">
                        <i class="material-icons">person</i>
                        <input type="email" placeholder="seu email" name="email" id="ilogin" autocomplete="email" required maxlength="30">
                        <label for="ilogin">email</label>
                    </div>
                    <div class="campo">
                        <i class="material-icons">vpn_key</i>
                        <input type="password" name="senha" id="isenha" placeholder="sua senha" autocomplete="current-password" required minlength="4" maxlength="20">
                        <label for="isenha">senha</label>
                    </div>
                    <input type="submit" value="Entrar">
                    <a href="cadastro.php" class="botao">Criar cadostro</a>
                </form>
            </div>
        </section>
    </main>
</body>
</html>