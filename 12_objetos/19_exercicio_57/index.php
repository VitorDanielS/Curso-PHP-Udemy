<?php 

  class Cachorro {

    public $cor;
    public $raca;
    public $nome;

    function __construct($cor, $raca, $nome) {

        $this->cor = $cor;
        $this->raca = $raca;
        $this->nome = $nome;

    }

    public function exibirAnimal() {

        echo "O cachorro se chama $this->nome, é da raça $this->raca e tem a cor $this->cor. <br>";

    }

  }

  $black = new Cachorro("preta", "labrador", "Black");

  $black->exibirAnimal();

?>