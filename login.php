
<?php

session_start();

include_once './database/Acesso.php';

$acesso = new Acesso;

$acesso->setSenha($_POST['senha']);

echo $acesso->getSenha();

$acesso->logar();



?>
