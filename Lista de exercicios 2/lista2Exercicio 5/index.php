<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercicio 5 - Resposta</title>
  </head>
  <body class="mt-5 p-4 bg-danger bg-gradient">
    <h2 class="text-light text-center">Resultado</h2>
      <?php

        $vetor = [ 9, 5, 7, 2 ];

        $aux = 0;

        for ($i = 0; $i < 4; $i++){
          for ($j = 0; $j < 4; $j++){
            if ($vetor[$i] < $vetor[$j]){
              $aux = $vetor[$i];
              $vetor[$i] = $vetor[$j];
              $vetor[$j] = $aux;
            }
          }
        }
      
      ?>

    <div class="container mt-3 p-4 rounded-3 bg-white shadow w-50 text-center">
      <?php
        foreach($vetor as $chave => $i){
          echo "Posição do vetor: $chave e seu valor é $i";
          echo "<br>";
        }
        
      ?>

    </div>
    
  </body>
</html>
