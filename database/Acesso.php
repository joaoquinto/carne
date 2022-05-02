
<?php
class Acesso
{
  private const SENHA = "123456789";
  private $senha;

  function getSenha()
  {
    return $this->senha;
  }

  function setSenha($senha)
  {
    $this->senha = $senha;
  }

  function getSenhaPadrao()
  {
    return $this::SENHA;
  }

  function logar()
  {
    if ($this->getSenha() === $this->getSenhaPadrao()) {
      session_start();
      $_SESSION['logado_status'] = 1;
      header('Location: ./alunos.php');
    } else {
      header('Location: ./index.php');
    }
  }
}
