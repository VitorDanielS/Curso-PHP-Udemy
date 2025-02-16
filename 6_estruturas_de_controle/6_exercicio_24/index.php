<?php
  // letra A
  $float = 4.5;
  $int = 55;
  $string = "5";

  if(is_int($float)) {
    echo "É um inteiro. 1 <br>";
  } else {
    echo "Não é um inteiro. 1 <br>";
  }

  if(is_int($int)) {
    echo "É um inteiro. 2 <br>";
  } else {
    echo "Não é um inteiro. 2 <br>";
  }

  if(is_int($string)) {
    echo "É um inteiro. 3 <br>";
  } else {
    echo "Não é um inteiro. 3 <br>";
  }
  // letra B
  $peso = 65;
  $limite = 80;
  $msg1 = "Limite de peso ultrapassado";
  $msg2 = "Está dentro do limite de peso";

  if($peso > $limite) {
    echo $msg1;
  } else {
    echo $msg2;
  }
?>