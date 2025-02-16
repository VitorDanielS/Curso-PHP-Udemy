<?php 
  $x = 10;
  $y =& $x;

  echo $x;
  echo "<br>";
  echo $y;
  echo "<br>";

  $y = 15;

  echo "Atribuição após ref";
  echo "<br>";
  echo $x;
  echo "<br>";
  echo $y;
  echo "<br>";

  $x = 20;

  echo "Atribuição após ref 2";
  echo "<br>";
  echo $x;
  echo "<br>";
  echo $y;
  echo "<br>";

  $nome = "Vitor";
  $nome2 =& $nome;

  echo "Agora com string:";
  echo "<br>";
  echo $nome;
  echo "<br>";
  echo $nome2;
  echo "<br>";

  $nome2 = "Daniel";

  echo "Após alterar ref";  #pode ser a referencia ou a referenciada.
  echo "<br>";
  echo $nome;
  echo "<br>";
  echo $nome2;
  echo "<br>";
?>