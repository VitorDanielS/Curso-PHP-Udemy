<?php 

  function teste($a = "teste") {

    echo "O valor de A é: $a <br>";

  }

  teste();
  teste("asd");

  function testando($b, $a = "x") { //sempre colocar default a direita

    echo "O valor de A é: $a e de B é: $b <br>";

  }

  testando("1"); //os valores obrigarórios para preencher vem primeiro
  testando("1", "2");
  //testando(); neste caso aqui não conseguimos fazer, precisamos de dar valor ao menos para o b, pois o A que é o default.
?>