<?php 
  
  $arr = [
    'nome' => 'Matheus',
    'idade' => 29
  ];

  if(array_key_exists("nome", $arr)) {

    echo "A chave existe! <br>";

  } else {

    echo "A chave não existe! <br>";

  }

  if(array_key_exists("profissao", $arr)) {

    echo "A chave existe! <br>";

  } else {

    echo "A chave não existe! <br>";

  }

  // agora um exemplo também com ISSET

  if(isset($arr['nome'])) {

    echo "A chave existe! ISSET <br>";

  } else {

    echo "A chave não existe! ISSET <br>";

  }

  // também dá para utilizar o isset para verificar se a variável foi declarada.
?>