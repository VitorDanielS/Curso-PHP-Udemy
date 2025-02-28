<?php 
  
  $ranking = [
    'Maria' => 100,
    'Ana' => 200,
    'Vitor' => 150,
    'Daniel' => 250,
    'Joana' => 50
  ];

  arsort($ranking);

  print_r($ranking);
  echo "<br>";
  
?>

<h1>Ranking:</h1>
<ol>
  <?php foreach($ranking as $pessoa => $pontuacao): ?>
    <li><?= $pessoa ?> -> <?= $pontuacao ?> pontos</li>
  <?php endforeach; ?>
</ol>