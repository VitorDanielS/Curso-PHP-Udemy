<?php 

  $arr = [
    [1, 2, 3],
    [2, 4, 6]
  ];

  print_r($arr);
  echo "<br><br><br>";

  echo $arr[0][1] . "<br>"; // acessando primeiro array e segundo elemento (segundo elemento é o índice 1, porque o primeiro elemento é o índice 0, assim como para acessar o primeiro array colocamos 0).
  echo $arr[1][2] . "<br>";

  echo count($arr) . "<br>";
  echo count($arr[0]) . "<br>";
  echo count($arr[1]) . "<br>";
  
?>