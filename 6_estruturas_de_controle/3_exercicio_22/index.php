<?php
  $id1 = 17;
  $id2 = 18;
  $id3 = 19;
  $maiori = 18;
  $msg = "Você é maior de idade <br>";
  $msg2 = "Você é menor de idade <br>";

  if($id1 >= $maiori) {
    echo "1 - ";
    echo $msg;
  } else {
    echo "1 - ";
    echo $msg2;
  }

  if($id2 >= $maiori) {
    echo "2 - ";
    echo $msg;
  }

  if($id3 >= $maiori) {
    echo "3 - ";
    echo $msg;
  }
?>