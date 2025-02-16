<?php 

  $str = "Esta é a minha string";

  $minha = substr($str, 10, 5); //(string pai, índice inicial, comprimento da palavra)

  echo $str . "<br>";
  echo $minha . "<br>";

  $str2 = "Testando esta string";

  $novaString = substr($str2, 9);

  echo $novaString . "<br>";

  $novaString2 = substr($str2, 9, -2);

  echo $novaString2 . "<br>";
?>