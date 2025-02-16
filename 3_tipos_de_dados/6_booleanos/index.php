<?php 
echo true;
echo "<br>";
echo false;

if (true) {
    echo "É verdadeiro! <br>";
}

if (false) {
    echo "É verdadeiro. (2)";
}

if (5>4) {
    echo "É verdade. (3) <br>";
}

$podeEntrar = true;
if ($podeEntrar) {
    echo "O usuário pode entrar.<br>";
}
echo "<br>";
// agora vamos checar
$a = true;
if (is_bool($a)) {
    echo "É um boolean. (1) <br>";
}

if (is_bool(0)) {
    echo "É um bool 2 <br>";
}

if (is_bool(false)) {
    echo "É um boolean 3 <br>";
}

if (0.0 == false) {
    echo "0 é considerado falso! <br>";
}
?>