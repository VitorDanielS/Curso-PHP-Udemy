<?php 

  class Pessoa {

    public $nome;
    public $idade;

    function andar($m) {
        echo "A pessoa andou $m metros <br>";
    }

  }

  $vitor = new Pessoa;

  $vitor->nome = "Vitor";
  $vitor->idade = 25;

  echo "O nome dele é $vitor->nome e tem $vitor->idade anos <br>";

  $vitor->andar(20);

?>