<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercicio 1 - Resposta</title>
  </head>
  <body class="container mb-5 p-3">
    <h2 class="mb-3">Array de 10 números</h2>
    <?php

        for ($i=1; $i <= 10; $i++){
            $vetor[$i] = $_POST["num$i"];
        }

        $posicao = 0;
        $maior = 0;
    ?>

    <div class="row rounded-3 p-3 border border-dark shadow mb-5">
      <div class="col">
        <?php
          foreach($vetor as $chave => $num){
            if ($num > $maior){
                $maior = $num;
                $posicao = $chave;
            }
          }
          echo "<h4>O maior valor é $maior e está na posição $posicao</h4>";    
        ?>
      </div>
    </div>

    <div class="row rounded-3 p-3 border border-dark shadow">
      <h4>Vetor:</h4>
      <div class="col">
        <?php
          foreach($vetor as $chave => $num){
            echo "Posição do vetor: $chave e seu valor é $num";
            echo "<br>";
          }
        ?>
      </div>
    </div>

    
  </body>
</html>