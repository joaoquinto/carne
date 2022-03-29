<?php

include_once 'connection.php';

$id = $_GET["id"];

$getAluno = "SELECT * FROM financeiro WHERE id = $id";
$result = mysqli_query($con, $getAluno);


if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $aluno = [
      $row["aluno"],
      "meses" => [
        1 => $row["jan"],
        2 => $row["fev"],
        3 => $row["mar"],
        4 => $row["abr"],
        5 => $row["mai"],
        6 => $row["jun"],
        7 => $row["jul"],
        8 => $row["ago"],
        9 => $row["setembro"],
        10 => $row["outubro"],
        11 => $row["nov"],
        12 => $row["dez"],
      ],
      $row["data_mensalidade"],
      date("d/m/y", strtotime($row["date_register"])),
      $row["status"]
    ];
  }
}
mysqli_close($con);
