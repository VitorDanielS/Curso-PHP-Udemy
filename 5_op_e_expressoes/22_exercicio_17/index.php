<?php 
  if(15 > 5 && "João" === "João") {
    echo "A comparação 1 é verdadeira <br>";
  }

  if("teste" > 5 && 1) {
    echo "A comparação 2 é verdadeira <br>"; //verificar (bug) "teste" > 5
  }

  if(2 == 3 && 5 >= 3) {
    echo "A comparação 3 é verdadeira <br>";
  }
?>