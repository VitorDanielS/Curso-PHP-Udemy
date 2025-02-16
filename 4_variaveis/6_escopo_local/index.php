<?php 
  $x = 10;

  echo "$x global <br>";

  function teste() {
    $x = 5;
    echo "$x local <br>";
  }

  teste();
  
  echo "$x global <br>";
 // não temos interferencia de uma com a outra (global para local)
  teste();

  function testando() {
    $x = 12;
    echo "$x local 2 <br>";
  }

  $x = 99;

  testando();
 // não ocorre interferencia de local para local também.
  teste();

  echo "$x global <br>";
// cada função no php vai ter seu próprio escopo

?>