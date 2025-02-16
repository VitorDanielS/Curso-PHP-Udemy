<?php 
  echo 5 / 2; // dois int que virou um float
  echo "<br>";

  if (is_float(5/2)) {
    echo "É float <br>";
  }

  echo 2 . 3; // dois int que virou uma string
  echo "<br>";

  if (is_string(2 . 3)) {
    echo "É string <br>";
  }

  $nome = "Vitor";
  $sobrenome = "Daniel";
 // recurso interessante para juntar strings mas não está voltado exatamente para o conteudo da aula. concatenação.
  $nomeCompleto = $nome . " " . $sobrenome;

  echo $nomeCompleto;
  echo "<br>";
?>