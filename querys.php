<?php

include_once './connection.php';

$getAluno = "SELECT nome_Aluno AS Aluno, serie FROM tbl_alunos WHERE id_Aluno = 3";

$result = mysqli_query($con, $getAluno);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $aluno = [$row["Aluno"], $row["serie"]];
  }
} else {
  echo "Não tem aluno com esse id";
}


mysqli_close($con);
