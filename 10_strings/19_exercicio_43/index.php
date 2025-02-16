<?php 

  $strin = "carro - navio - helicóptero - barco - jangada";

  $strinArray = explode("-", $strin);

  print_r($strinArray);
  echo "<br>";

  for($i = 0; $i < count($strinArray); $i++) {

    echo "Item: $strinArray[$i] <br>";

  }
  
?>