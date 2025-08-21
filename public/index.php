<?php
$nome = $_GET['nome'];
$nome01 ="leonardo";
$mensagem = "boa noite $nome01";
$num01 = 10;
$num02 = 20;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="/css/default.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <h1>PHP & Mysql</h1>
    <h1> Teste</h1>
    <h1> Ola mundo</h1>
    <p><?= $mensagem ?></p>
    <p><?= $num01 + $num02 ?></p>
    <p><?= $num01.$num02 ?></p> <!--concatenação -->
</body>
</html>