<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercico 1</title>
  </head>
  <body>
    <?php

        require_once("Ponto.php");

        $ponto = new Ponto(1,2);
        echo "Quantidade de objetos criados:".Ponto::getContador();

        $ponto2 = new Ponto(3,4);
        echo "Quantidade de objetos criados:".$ponto2->formulaDistancia($ponto);

        echo "Quantidade de objetos criados:".$ponto2->formulaDistanciaAlternativa(3,4);

        echo "Quantidade de objetos criados:".$ponto2->formulaDistanciaAlternativa2(1,2,3,4);



    ?>
    
  </body>
</html>