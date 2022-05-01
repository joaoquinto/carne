<?php
session_start();

if ($_SESSION['logado_status'] !== 1) {
  header('Location: ./index.php');
};

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Lista de Alunos" />
  <meta property="og:description" content="Lista de Alunos" />
  <link rel="stylesheet" href="./assets/css/alunos.css">
  <title>Lista de Alunos</title>
</head>

<body>
  <header class="navegacao">
    <nav><a class="logout" href="logout.php">Sair</a></nav>
  </header>
  <main class="container">
    <h1 class="title">Lista de alunos</h1>
    <table>
      <tr class="table-header">
        <th>Id</th>
        <th>Nome</th>
        <th>Série</th>
      </tr>
      <?php
      include_once './database/Alunos.php';
      $alunos = new Alunos;
      $alunos->mostrarAlunos();
      ?>
    </table>
  </main>

</body>



</html>