<?php 

  // resgatar elementos de array
  // remover elementos

  $arr = [1, 2, 3, 4, 5, 6];

  $removidos = array_splice($arr, 1, 2); // começa do 1 e remove 2

  print_r($arr);
  echo "<br>";

  print_r($removidos);
  echo "<br>";

  $arr2 = [1, 2, 3, 4, 5, 6];

  $removidos2 = array_splice($arr2, 3); // remove o 3 para frente

  print_r($arr2);
  echo "<br>";

  print_r($removidos2);
  echo "<br>";

  $arr3 = [1, 2, 3, 4, 5, 6];

  $removidos3 = array_splice($arr3, 1, -1); // salvou o primeiro e o último

  print_r($arr3);
  echo "<br>";

  print_r($removidos3);
  echo "<br>";

?>