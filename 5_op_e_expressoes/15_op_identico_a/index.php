<?php 
  // op de igualdade
  if(5 == "5") {
    echo "5 é 5 (1)<br>";
  }

  //op de identico
  if(5 === "5") {
    echo "5 é 5 (2)<br>";
  }

  if(5 === 5) {
    echo "5 é 5 (3)<br>";
  }

  if(3 === "teste") { // neste caso aqui nada é igual, muito menos idêntico.
    echo "É igual <br>";
  }

  $a = 4;
  $b = 4;

  if($a === $b) {
    echo "A é igual/idêntico a B <br>";
  }
?>