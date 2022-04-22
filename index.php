<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Lista de alunos" />
    <meta property="og:description" content="Lista de aluno" />
    <link rel="stylesheet" href="css/index.css">
    <title>Lista de alunos</title>
</head>

<body>
    <main id="container">
        <h1 class="title">Lista de alunos</h1>
        <ul id="container-alunos">
            <?php
            include_once "./bd/alunosQuery.php";

            for ($i = 0; $i < count($alunos); $i++) {
                $aluno = $alunos[$i];
                for ($index = 0; $index < 1; $index++) {
                    echo "<li><a href='carne.php?id=$aluno[id]' target='_blank' rel='noopener noreferrer'>$aluno[nome]</a></li>";
                }
            }
            ?>
        </ul>
    </main>
</body>

</html>