<?php 

  $carro = ["Jaguar", "3.0", "azul", 18, "teto solar", "automático"];

  print_r($carro);
  echo "<br>";

  list($marca, $motor, $cor, $aro, $opcional, $cambio) = $carro;

  echo "$marca <br>";
  echo "$motor <br>";
  echo "$cor <br>";
  echo "$aro <br>";
  echo "$opcional <br>";
  echo "$cambio <br>";

?>