<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercicio 4 - Resposta</title>
  </head>
  <body>
      <?php
        $soma = 0;
        for ($i=1; $i <= 10; $i++){
            $vetor[$i] = $_POST["num$i"];
            $soma += $vetor[$i];

        }
        $media = $soma / 10;

        echo "a média é $media e $soma"
      
      ?>
    
  </body>
</html>
