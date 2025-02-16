<?php 
  $n = 20;
  $n2 = 80;
  $s = "Loja";
  $s2 = "Casa";

  if(is_int($n) or is_float($n)) {
    echo "Conferindo se é número (1) <br>";
  }

  $n *= 2;

  if($n > 100) {
    echo "É maior que 100 (1) <br>";
  } else {
    echo "Não é maior que 100 (1) <br>";
  }


  if(is_int($n2) or is_float($n2)) {
    echo "Conferindo se é número (2) <br>";
  }

  $n2 *= 2;

  if($n2 > 100) {
    echo "É maior que 100 (2) <br>";
  }


  if(is_int($s) or is_float($s)) {
    echo "Conferindo se é número (3) <br>";
  } else {
    echo "Não é um número (3) <br>";
  }


  if(is_int($s2) or is_float($s2)) {
    echo "Conferindo se é número (4) <br>";
  } else {
    echo "Não é um número (4) <br>";
  }

  //resolução do professor:

  $a = 60;

  if(is_int($a) || is_float($a)) {

    $multi = $a * 2;

    if($multi > 100) {

        echo "O número é maior que 100 <br>";

    } else {

        echo "O número não é maior que 100 <br>";

    }

  } else {

    echo "Não é um número <br>";

  }

?>