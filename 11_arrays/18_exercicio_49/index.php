<?php 
  
  $chifres = false;
  $nome = "Soberano";
  $cor = "preto";
  $idade = 4;

  $boi = compact("chifres", "nome", "cor", "idade");

  print_r($boi);
  echo "<br>";

  foreach($boi as $caracteristica => $value) {

    echo "$caracteristica: $value <br>";

  }
?>