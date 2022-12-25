<?php
if(isset($_POST['email'])) {
    include('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = ($_POST['senha']);

    $mysqli->query("INSERT INTO usuarios (nome, email, senha) VALUES('$nome', '$email', '$senha')");
    header('Location: login.php');
} 


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <style>
        body{
            height: 100px;
            width: 200px;
            background-color: whitesmoke;
        }

        h1{
            font-size: 100px;
            left: 37%;
            position: absolute;
            color: navy;
        }

        form{
            top: 30%;
            left: 41%;
            position: absolute;
            
        }
        
        form > input[type=submit] {
            font-size: 30px;
            width: 150px;
            height: 40px;
            background-color: blue;
            color: lightblue;
            border: none;
            border-radius: 5px;
            display: block;
        }
        form > input[type=submit]:hover {
            cursor: pointer;
            color: darkblue;
            background-color: aquamarine;
        }
        form > input[type=password]{
            width: 250px;
            height: 20px;
            margin-top: 3px;
            margin-bottom: 10px;
        }
        form > input[type=text]{
            width: 250px;
            height: 20px;
            margin-top: 3px;
            margin-bottom: 10px;
        }
        form > input[type=email]{
            width: 250px;
            height: 20px;
            margin-top: 3px;
            margin-bottom: 10px;
        }

        form > label{
            font-size: 30px;

        }
    </style>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="cadastro.php" method="post" autocomplete="off">

        <label for="inome">Nome do usuario:</label><br>
        <input type="text" name="nome" id="inome"><br>
        
        <label for="oemail" >Digite o seu email:</label><br>
        <input type="email" name="email" id="oemail" required minlength="4"><br>
        
        <label for="asenha" >Cria sua senha:</label><br>
        <input type="password" name="senha" id="asenha" required minlength="4"><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>