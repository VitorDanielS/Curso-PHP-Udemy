<?php 

  $arr = [
    'Matheus' => 29,
    'Pedro' => 18,
    'Joaquim' => 14,
    'Maria' => 12
  ];

  asort($arr); // crescente , ordem dos valores

  print_r($arr);
  echo "<br>";

  $arr2 = [
    'Matheus' => 12,
    'Pedro' => 44,
    'Joaquim' => 14,
    'Maria' => 32
  ];

  arsort($arr2); // decrescente

  print_r($arr2);
  echo "<br>";

  ksort($arr2); // ordem das chaves , cresc

  print_r($arr2);
  echo "<br>";

  krsort($arr2); // ordem das chaves , decresc

  print_r($arr2);
  echo "<br>";

?>