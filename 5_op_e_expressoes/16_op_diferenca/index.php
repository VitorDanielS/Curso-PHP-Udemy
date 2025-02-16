<?php 
  $a = 3;
  $b = 4;

  if($a != $b) {
    echo "Testando diferença 1<br>"; // 3 é diferente de 4.
  }

  if($a != 3) {
    echo "Testando diferença 2<br>"; // 3 é igual ao 3 (não há diferença)
  }

  if(true != false) {
    echo "Testando diferença 3<br>"; // true é diferente de false, mesmo os dois sendo boolean, contém valores diferentes, assim como 3 e 4.
  }
  if(false != "false") {
    echo "Testando diferença 4<br>"; // há diferença do false puro para a string de escrita "false".
  }

  if($a != "3") {
    echo "Testando diferença 5<br>"; // considera igual mesmo um sendo int e outro sendo string, nesse exemplo já considera o valor, não o tipo. (3 == 3) considera como true.
  }
?>