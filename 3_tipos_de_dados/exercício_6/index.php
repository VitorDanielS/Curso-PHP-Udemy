<?php 
$carro = [
 'marca' => 'Volkswagem',
 'modelo' => 'Nivus',
 'versão' => 'GTS',
 'velocidade_max' => 200,
 'blindado' => false,
 'teto_solar' => true
];

print_r($carro);
echo"<br>";
echo $carro['modelo'];
echo"<br>";

$marca = $carro['marca'];
$velocidade_maxima = $carro['velocidade_max'];

echo "O carro é da marca $marca e atinge no maximo $velocidade_maxima km/h";

?>