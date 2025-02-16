<?php 

  function velocidadeMaxima($vel) {

    echo "O carro  atinge a velocidade máxima de $vel km/h <br>";

  }

  velocidadeMaxima(20);
  velocidadeMaxima(40);
  velocidadeMaxima(80);
  velocidadeMaxima(160);

  echo "Teste continuando <br>";

  $velocidade = 125;

  velocidadeMaxima($velocidade);

  // PHP ignora o parâmetro desnecessário:
  velocidadeMaxima(250, "teste");
  // Já aqui ele imprime a string, para isso não acontecer podemos usar -if(is_int)- para conferir se é um dado inteiro
  velocidadeMaxima("teste");

  function descreverAnimal($nome, $raca) {

    echo "O $nome é da raça $raca <br>";

  }

  descreverAnimal("Fred", "Lulu");
  descreverAnimal("Scot", "Labrador")
?>