<?php 
$a = [1,2,3];

print_r($a);
echo "<br>";
echo $a[0];
echo "<br>";

$arr = ["Vitor", 111, true];

print_r($arr);
echo "<br>";
echo $arr[1];
echo "<br>";
print_r($arr[0]);
echo "<br>";echo "<br>";echo "<br>";echo "<br>";

// agora vamos para array associativo

$ars = ['nome' => 'Bili', 'patas' => 4, 'cor' => 'marrom'];
echo $ars['nome'];echo "<br>";
print_r($ars);echo "<br>";
echo $ars['patas'];echo "<br>";

$arrAssoc = ['chave' => 'valor', 'bool' => true];
print_r($arrAssoc);

?>