<?php 
  $x = 4;

  while($x < 30) {

    echo "Executando o loop $x <br>";

    if($x == 24) {
        echo "Encerrando o loop";
        break;
    }

    $x += 2;
  }
?>