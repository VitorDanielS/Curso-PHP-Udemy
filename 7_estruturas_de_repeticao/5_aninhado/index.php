<?php 

  $i = 1;

  $c = "Variável teste";

  while($i <= 10) {

    echo "Loop externo $i <br>";

    // segundo contador
    $j = 1;
    
    echo "$c <br>";

    while($j <= 5) {
        
        echo "Looping interno $j <br>";

        echo "$c 2 <br>";

        $j++;
    }

    $i++;

  }

?>