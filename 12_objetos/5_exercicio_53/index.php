<?php 

  class Cachorro {

    function latir() {
        echo "au au <br>";
    }

    function andar($m) {
        echo "O cachorro andou $m metros <br>";
    }

  }

  $peludinho = new Cachorro;
  $zoe = new Cachorro;

  $peludinho->latir();
  $zoe->latir();

  $peludinho->andar(100);
  $zoe->andar(50);

?>