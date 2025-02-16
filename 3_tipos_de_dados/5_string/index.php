<?php 
// para somente colocar texto na tela pode ser aspas simples ou dupla, tanto faz.
echo 'Olá mundo<br>';
echo "Olá mundo<br>";
echo "Ela disse 'oi'<br>";
//nesses casos aqui precisa de variar a aspas, não pode utilizar a mesma dentro.
echo 'Ela disse "oi"<br>';

// já para ler uma variável por ex tem que ser aspas dupla
$idade = 21;
echo "Ela tem $idade anos<br>";
echo 'Ela tem $idade anos<br>';

if (is_string("UmNome")) {
    echo "Isto é uma string.(1)";
}
echo "<br>";
$num = 20;
$nom = "Vitor";

if (is_string($num)) {
    echo "$num é uma string (2)";
}

if (is_string($nom)) {
    echo "$nom é uma string. (3)";
}

?>