<?php 

  $arr = [2, 4, 34, 34.1, 324, 12, 34];
// caso tenha uma string neste array ela é ignorada e a soma ocorre da mesma forma
  $soma = array_sum($arr);

  print_r($arr);
  echo "<br>";
  echo $soma;
  
?>