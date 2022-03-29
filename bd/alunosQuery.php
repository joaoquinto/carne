<?php
include_once 'connection.php';

$getAlunos = "SELECT *,aluno AS nome FROM financeiro";

$result = mysqli_query($con, $getAlunos);

$alunos = mysqli_fetch_all($result, MYSQLI_ASSOC);


mysqli_close($con);
