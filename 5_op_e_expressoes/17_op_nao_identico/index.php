<?php 
  $a = 1;
  $b = "1";

  if($a != $b) { //false=não imprime
    echo "A é diferente de B <br>"; // A é igual em valores ao B
  }

  if($a !== $b) { //true=imprime
    echo "A não é idêntico ao B <br>"; // A não é idêntico ao B, mesmo tendo mesmo valor, para ser idêntico precisaria estar no mesmo tipo int ou string.
  }

  if(1 !== 2) { // correto, 1 não é idêntico ao 2, imprimiu. verdade/true
    echo "Não é idêntico (1) <br>";
  }

  if(1 !== "1") { // correto, 1 não é idêntico ao "1".
    echo "Não é idêntico (2) <br>";
  }

?>