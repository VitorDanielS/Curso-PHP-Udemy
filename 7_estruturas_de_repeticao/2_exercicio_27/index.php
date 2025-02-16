<?php 

  $arr = [1, "Daniel", 2.5, true, "Vitor", false, "5", "Goku", [], "Dez"];

  $x = count($arr);
  $y = 0;

  while($y < $x) {

    if(is_string($arr[$y])) {
      echo $arr[$y] . "<br>";
    }

    $y++;
  }
  
?>