<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exemplo POO</title>
  </head>
  <body>
    <?php

        require_once("Impressora.php");
        require_once("Matricial.php");
        require_once("Laser.php");

        $impressora = new Impressora("HP","VP-h","Sim","7kg");
        $impressora->setMarca("Classe Impressora");

        $matricial = new Matricial("HP","VP-h","Sim","7kg","10","50");

        var_dump($impressora);

        echo "<br/>";

        var_dump($matricial);
    
    ?>
    
  </body>
</html>