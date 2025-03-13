<?php 

  Class Car {

    public $rodas = 4;
    public $vidro = "Sem película";

  }

  class Mecanico {
    public function alterarRodas($carro) {
        $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula) {
        $carro->vidro = $pelicula;
    }

  }

  $carro = new Car;

  echo $carro->rodas . "<br>";

  $matheus = new Mecanico;

  $matheus->alterarRodas($carro);

  echo $carro->rodas . "<br>";

  $matheus->colocarPelicula($carro, "G20");

  echo $carro->vidro . "<br>";
?>