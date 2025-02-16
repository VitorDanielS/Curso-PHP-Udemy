<?php 
  
  $arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];
 // podemos resgatar uma faixa de elementos de um array.
 // passamos 3 parâmetros: o array, o índice inicial e a quantidade de elementos que queremos resgatar à partir do índice inicial selecionado.
  $slice1 = array_slice($arr, 1, 3);

  print_r($slice1);
  echo "<br>";

  $slice2 = array_slice($arr, 4, 4);

  print_r($slice2);
  echo "<br>";

  $slice3 = array_slice($arr, 4); //nesse caso aqui ele começa do índice 4 e vai até o final.

  print_r($slice3);
  echo "<br>";

  $slice4 = array_slice($arr, 4, -3); //neste aqui ele subtrai do último, vindo de trás.

  print_r($slice4);
  echo "<br>";

?>