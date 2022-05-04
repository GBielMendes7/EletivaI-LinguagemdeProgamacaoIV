<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercício 1</title>
  </head>
  <body>
    <?php

        require_once("Telefone.php");
        require_once("Fixo.php");
        require_once("Celular.php");
        require_once("PrePago.php");
        require_once("PosPago.php");

        $tefixo = new Fixo(18,996454546,10);
        echo " Custo de ligação Telefone Fixo:".$tefixo->calcularCusto(5);
        echo"</br>";

        $teprepago = new PrePago(18,996454546,10,"VIVO");
        echo " Custo de ligação Telefone Fixo:".$teprepago->calcularCusto(5);
        echo"</br>";

        $tepospago = new PosPago(18,996454546,10,"TIM");
        echo " Custo de ligação Telefone Fixo:".$tepospago->calcularCusto(5);
        echo"</br>";



    ?>
    
  </body>
</html>