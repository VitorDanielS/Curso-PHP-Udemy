<?php 
  
  function parOuImpar($num) {

   if($num % 2 === 0) {

     echo "O número $num é par <br>";
   } else {
     echo "O número $num é ímpar <br>";
   }

  }

  parOuImpar(1);
  parOuImpar(2);
  parOuImpar(3);
  parOuImpar(4);
  parOuImpar(5);

?>