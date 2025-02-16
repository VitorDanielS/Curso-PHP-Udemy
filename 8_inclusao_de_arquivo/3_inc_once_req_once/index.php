<?php 
 
  // Arquivos que não existem
  //include_once "teste.php";

  // Arquivos que existem
  include_once "teste2.php"; // ONCE NÃO DUPLICA
  include_once "teste2.php";
  include "teste2.php"; // ESSE DUPLICA
  include "teste2.php";

  // Arquivos que não existem
  // require_once "teste.php";

  require_once "teste3.php";
  require_once "teste3.php";

?>

<p>Testando código!</p>