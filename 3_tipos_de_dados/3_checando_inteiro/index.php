<?php 
   if(is_int(5)) {  // true
    echo "É um inteiro<br>";
   }

   if(is_int("oi")) {  // false
    echo "Não é";
   }

   $a = 5;

   if(is_int($a)) {
    echo "Outro número inteiro";
   }

?>