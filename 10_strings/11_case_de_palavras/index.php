<?php 

  $frase = "testando o case de uma palavra <br>";
  $frase2 = "Testando o case de uma palavra <br>";
  $frase3 = "testando o case de uma palavra <br>";

  // Primeira letra em maiúsculo
  echo ucfirst($frase);
  echo ucfirst($frase2); // nãoo muda nada, já estava maiúsculo.

  // Todas as palavras com as iniciais maiúsculas
  echo ucwords($frase3);
  echo ucfirst($frase2);

?>