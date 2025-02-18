<?php 

  $arr = ["batata", "maçã", "pera", "feijão", "arroz"];

  $removidos = array_splice($arr, 2, 2);

  print_r($arr);
  echo "<br>";

  print_r($removidos);
  echo "<br>";

  // outra versão: sem declarar variável

  $arr = ["batata", "maçã", "pera", "feijão", "arroz"];

  array_splice($arr, 2, 2);

  print_r($arr);

  echo "<br>";

  //print_r($removidos);

?>