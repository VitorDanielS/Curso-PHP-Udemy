<?php 

  $arr = [1, 2, 3];

  echo count($arr) . "<br>";

  $arr2 = range(1, 10);

  echo count($arr2) . "<br>";

  $arr3 = ['nome' => 'Matheus', 'idade' => 29, 'profissao' => 'programador'];

  echo count($arr3) . "<br>";

  // independente da forma que o array foi criada, manual, range, ou associativo o count sempre irá entregar quantos elementos o array contém
  
?>