<?php 

  $arr = range(1, 20); // aqui eu informo que o array vai ser de 1 até o 20

  print_r(array_chunk($arr, 4)); // aqui eu informo que cada array terá apenas 4 elementos - ou seja divido 20 por 4 então terá 5 arrays fazendo a divisão.
  echo "<br>";

  $arrays = array_chunk($arr, 10);

  print_r($arrays);
  echo "<br>";

  print_r($arrays[1]);
  echo "<br>";
  
?>