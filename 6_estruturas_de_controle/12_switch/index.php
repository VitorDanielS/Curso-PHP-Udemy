<?php 
  $x = 0;

  switch($x) {

    case 0:
      echo "X é igual a 0 <br>";
      break; 
      // é necessário colocar o break para que ele não execute um case false quando há um verdadeiro junto no switch.
    case 1:
      echo "X é igual a 1 <br>";
      break;
    default:
    echo "X não é igual a nenhum dos valores mencionados <br>";
  }

  $y = "Vitor";

  switch($y) {

    case "Vitor":
        echo "O nome é Vitor <br>";
        break;
    case "Daniel":
        echo "O nome é Daniel <br>";
        break;
    default:
      echo "O nome não foi encontrado";
  }
?>