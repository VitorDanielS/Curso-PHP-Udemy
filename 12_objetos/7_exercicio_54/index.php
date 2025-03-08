<?php 

  class Pessoa {  // classe

    public $nome;  // propriedade
    public $idade;

    function andar($m) {  // método
        echo "A pessoa andou $m metros <br>";
    }

  }

  $vitor = new Pessoa;

  $vitor->nome = "Vitor";
  $vitor->idade = 25;

  echo "O nome dele é $vitor->nome e tem $vitor->idade anos <br>";

  $vitor->andar(20);

?>