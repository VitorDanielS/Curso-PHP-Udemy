<?php 
//esta variável é um array associativo
$pessoa = [
    'nome' => 'Maria',
    'idade' => 20,
    'olhos' => 'azuis'
];
$maioridade = 18;

if($pessoa['idade']>=$maioridade) {
    echo "Esta pessoa é maior de idade.";
}

?>