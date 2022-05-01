<?php

class Connection
{
  protected $host = "127.0.0.1";
  protected $port = 3306;
  protected $user = "root";
  protected $password = "";
  protected $dbname = "carne";

  public function conexao()
  {
    $con = new mysqli($this->host, $this->user, $this->password, $this->dbname, $this->port) or die("Não conseguiu se conectar ao banco de dados" . mysqli_connect_errno());
    return $con;
  }
}
