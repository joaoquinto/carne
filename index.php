<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/login.css">
    <title>Acesso ao carnê</title>
</head>

<body>
    <form action="./login.php" method="post" class="container">
        <label for="password">Por favor digite sua senha!</label>
        <input type="password" name="senha" id="password" required autofocus>
        <button type="submit" class="btn">Acessar</button>
    </form>

</body>

</html>