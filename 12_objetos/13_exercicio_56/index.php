<?php 

  class Humano {

    public $idade = 30;
    public $cor = "branco";

    public function falar() {
        echo "Bom dia, senhores! <br>";
    }
  }

  class Professor extends Humano {

    public $disciplina = "Matemática";

    public function estaLecionando() {
        echo "O professor está dando aula de $this->disciplina <br>";
    }

  }

  $vitor = new Humano;
  echo "$vitor->cor <br>";
  $vitor->falar();

  $daniel = new Professor;
  echo $daniel->idade . "<br>";
  echo "$daniel->disciplina <br>";
  $daniel->estaLecionando();
  
?>