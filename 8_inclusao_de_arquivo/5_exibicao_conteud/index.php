<?php 
  $nome = "Mateus";
?>

<?= $teste = "asd"; // apenas imprime o conteúdo, não guarda valor. ?>

<form action="">
    <div>
        <input type="text" value="<?= $nome; ?>">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>