<?php 

  $dataNascimento = mktime(12, 35, 30, 03, 9, 2000);

  echo $dataNascimento . "<br>";

  $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);

  echo $dataNascimentoFormatada . "<br>";

  $dataEspecifica = mktime(10, 20, 11, 04, 28, 2041);

  $dataFuturaFormatada = date('m/d/y', $dataEspecifica);

  echo $dataFuturaFormatada . "<br>";
  
?>