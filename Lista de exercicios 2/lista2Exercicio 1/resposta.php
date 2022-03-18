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
  <body>
      <?php

        for ($i=1; $i <= 10; $i++){
            $vetor[$i] = $_POST["num$i"];
        }

        $posicao = 0;
        $maior = 0;

        foreach($vetor as $chave => $num){
            echo "Posição do vetor: $chave e seu valor é $num";
            echo "<h1>BR</h1>";
            if ($num > $maior){
                $maior = $num;
                $posicao = $chave;
            }
        }
        echo "O maior valor é $maior e está na posição $posicao";    
      
      ?>
    
  </body>
</html>
