<?php 
  
  $arr1 = [1, 2, 3];
  $arr2 = [2, 4, 6];

  $diff = array_diff($arr1, $arr2);
//diferença do 1 para o 2 (números 1 e 3) o 2 é igual.
  print_r($diff);
  echo "<br>";

  $diff2 = array_diff($arr2, $arr1);
//diferença do 2 para o 1 (números 4 e 6) o 2 é igual.
  print_r($diff2);
  echo "<br>";

  $arr3 = [4, 6];

  $diff3 = array_diff($arr2, $arr1, $arr3);
// todos os elementos foram encontrado entre os arrays
  print_r($diff3);
  echo "<br>";

?>