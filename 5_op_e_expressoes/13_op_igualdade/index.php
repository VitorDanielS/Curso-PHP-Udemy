<?php 
  if(3==3) {
    echo "Comparação verdadeira 1<br>";
  }

  if(3==4) {
    echo "Comparação verdadeira 2<br>";
  }

  $a = 12;
  $b = 12;
  $c = 100;

  if($a==$b) {
    echo "Comparação verdadeira 3<br>";
  }

  if($a==$c) {
    echo "Comparação verdadeira 4<br>";
  }

  $nome = "Vitor";
  $nomeDoSistema = "Vitor";

  if($nome == $nomeDoSistema) {
    echo "O nome coincide <br>";
  }

  echo "EXERCÍCIO 15 <br>";

 //exercício 15: criar op q retorne true e depois false com iguald

  $a = "Vitor";
  $b = "Vitor";
  $c = "Daniel";

  if($a == $b) {
    echo "Retorna como verdade 1<br>";
  }

  if($a == $c) {
    echo "Retorna como verdade 2<br>";
  }

?>