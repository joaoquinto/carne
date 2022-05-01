<?php

include_once 'Connection.php';

class Alunos extends Connection
{
  protected $getAlunos = "SELECT *, aluno AS nome FROM financeiro";
  protected $result;
  protected $alunos;
  protected $aluno;

  function getTodosOsAlunos()
  {
    $this->result = mysqli_query($this->conexao(), $this->getAlunos);
    $this->alunos = mysqli_fetch_all($this->result, MYSQLI_ASSOC);
    return $this->alunos;
    mysqli_close($this->conexao());
  }

  function mostrarAlunos()
  {
    for ($i = 0; $i < count($this->getTodosOsAlunos()); $i++) {
      $this->aluno = $this->getTodosOsAlunos()[$i];
      for ($j = 0; $j < 1; $j++) {
        $nome = $this->aluno["nome"];
        $ano = $this->aluno["ano"];
        $id = $this->aluno["id"];
        echo <<<HTML
        <tr class="table-data">
          <td>$id</td>
          <td><a href=carne.php?id=$id target="_blank" rel="noopener noreferrer">$nome</a></td>
          <td>$ano °Série</td>
        </tr>
        HTML;
      }
    }
  }
}
