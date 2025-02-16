<?php 
  // letra A
  $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

  for($i = 0; $i < count($arr); $i++) {

    if($arr[$i] % 2 == 0) {
        echo "Número: $arr[$i] <br>";
    }

  }

  // letra B
  $arr = [];

  for($i = 1; $i <= 10; $i++) {

    array_push($arr, $i);

  }

  print_r($arr);
  echo "<br>";

  // letra C
  $arr = [];

  for($i = 10; $i <= 20; $i++) {

    array_push($arr, $i);

  }
  
  print_r($arr);
  echo "<br>";

  for($i = 0; $i < count($arr); $i++) {

    if($arr[$i] % 2 != 0) {
        echo "Número ímpar: $arr[$i] <br>";
    }
  }

?>