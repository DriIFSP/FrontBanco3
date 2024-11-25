<?php
  $servidor ="localhost";
  $usuario = "root";
  $senha = "";
  $banco = "dbfaculdade";

  $con = mysqli_connect($servidor, $usuario, $senha, $banco) or die ("Erro conexao");
  mysqli_set_charset($con, "utf8");
?>