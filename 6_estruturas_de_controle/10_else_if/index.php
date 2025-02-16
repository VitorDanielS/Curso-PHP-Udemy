<?php 
  if(10 > 5) { // esse é true, então entra nele
    echo "Entrou no if <br>";

  } else if(10 > 6) { // como já entrou no if, n entra no else
    echo "Entrou no else if <br>";
  }


  if(10 < 5) { // esse é false, não entra
    echo "Entrou no if 2<br>";
    
  } else if(10 > 6) { // if false, logo entra no else if true.
    echo "Entrou no else if 2<br>";
  }


  if(10 < 5) { // false
    echo "Entrou no if 3<br>";
    
  } else if(10 < 6) { // false
    echo "Entrou no else if 3<br>";

  } else { // entra no else
    echo "Entrou no else 3<br>";
  }


  if(10 < 5) {
    echo "Entrou no if 4<br>";
    
  } else if(10 < 6) {
    echo "Entrou no else if 4<br>";

  } else if(11 > 1) { // entrou nesse aqui que é true
    echo "Entrou no else if 2 4 <br>";

  } else {
    echo "Entrou no else 4<br>";
  }

  $a = 10;
  $b = 5;
  $msg = "Entrou no else if 5";

  if($a < $b) {
    echo "Entrou no if 5";

  } else if($a > $b) {
    echo $msg . "<br>";

  } else if($b < $a) { // como já entrou na anterior, n entra nessa
    echo "Entrou no else if 2 5<br>";

  } else {
    echo "Entrou no else 5";
  }
?>