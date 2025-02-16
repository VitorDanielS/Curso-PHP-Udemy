<?php 
  $velo = 32;

  if($velo < 40) {
    echo "Velocidade correta";

  } else if($velo == 40) {
    echo "Velocidade limite, cuidado!";
    
  } else if($velo > 40) {
    echo "Multa! Passou de 40 km/h";
  }
?>