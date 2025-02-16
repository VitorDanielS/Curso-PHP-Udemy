<?php 
  function teste() {
    $a = 0;
    $a++;

    echo "$a <br>";
  }
  // repete e executa
  teste();
  teste();
  teste();

  function testeStatic() {
    
    static $a = 0;
    $a++;

    echo "$a <br>";
  }

  echo "Agora com Static:"; // não só apenas repete!
  echo "<br>"; // com o Static o escopo é mantido e o valor encrementado (ou decrementado) depende de como o código segue.

  testeStatic();
  testeStatic();
  testeStatic();

?>