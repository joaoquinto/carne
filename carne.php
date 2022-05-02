<?php
session_start();
if ($_SESSION['logado_status'] !== 1) {
  header('Location: ./index.php');
};
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Carnê" />
  <meta property="og:description" content="Carnê" />
  <link rel="stylesheet" media="print" href="./assets/css/carne.css">
  <link rel="stylesheet" media="screen" href="./assets/css/carne-screeen.css">
  <title>Carnê</title>
</head>

<body>
  <header class="navegacao">
    <nav><a class="logout" href="logout.php">Sair</a></nav>
  </header>
  <main class="container">

    <img src="./assets/img/image1.png" alt="Colégio Multimédio LTDA" class="logomarca">

    <blockquote id="familia">
      <h1 class="title-familia">A importância da família</h1>

      <p class="primeira">“A família não é o único canal pelo qual se pode tratar a questão da socialização, mas é, sem dúvida, um âmbito privilegiado, uma vez que este tende a ser o primeiro grupo responsável pela tarefa socializadora. A família constitui uma das mediações entre o homem e a sociedade. Sob este prisma, a família não só interioriza aspectos ideológicos dominantes na sociedade, como projeta, ainda, em outros grupos os modelos de relação criados e recriados dentro do próprio grupo.”<cite><strong>(CARVALHO,M.B.,2006,p.90)</strong></cite>.</p>
      <p>A ligação entre as instituições, escola e família, paralelamente às diferenciações existentes entre elas, abrem espaço para questões a respeito de qual seria a real e atual relação existente entre elas, bem como estaria se dando tal relacionamento na contemporaneidade.</p>
      <p>A Páscoa é o momento de celebrarmos a ressurreição de Jesus. Uma das maiores confraternizações no nosso lar. É o momento de lembramos da família, dos amigos e, acima de tudo, de praticar o bem. Cuidarmos de quem amamos é um dever tanto da família quanto da escola.</p>
      <p>Neste mês de abril desejamos a todos que as bençãos de Deus recaia sobre nossas famílias!</p>
    </blockquote>
    <hr class="linha">
    <?php
    include_once './database/Carne.php';
    $carne =  new Carne($_GET["id"]);
    $carne->mostrarCarne();
    ?>
  </main>
</body>

</html>