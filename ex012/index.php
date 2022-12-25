<?php
include("protect.php")
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vídeos HTML5</title>
    <link rel="shortcut icon" href="artwill.ico" type="image/x-icon">
    <style>
        body{
            background-color: aqua;
        }
        h1{
            font-size: 45px;
            font-weight: bolder;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        p{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <p>
        <a href="../logout.php">sair</a>
    </p>
    <h1>Inserindo vídeos hospedados lacalmente</h1>
    <p>Este vídeo está hospedado no própio servidor.</p>
    <video width="560" poster="imagens/konosuba.jpg" autoplay controls loop>
        <source src="midia/konosuba.mp4" type="video/mp4">
        <source src="midia/Konosuba.m4v" type="video/mp4">
        <source src="midia/Konosuba.mkv" type="video/mkv">
        <p>Seu computador não tem compatibilidade de reproduçãode vídeo.</p>
        <!--mp4 m4v webm ogv-->
    </video>
    <h1>Iserindo vídeos do YouTube</h1>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/ANhx1LPorfA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/mFVSiMc_nQc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/YzmGtPynPmw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Vi-1402wYtI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/XFdMbpzDELw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</body>
</html>