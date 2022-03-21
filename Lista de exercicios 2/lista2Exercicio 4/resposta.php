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
  <body class="mt-5 p-4 bg-success bg-gradient">
    <h1 class="text-center text-light">Media</h1>
    <?php
      $soma = 0;
      for ($i=1; $i <= 10; $i++){
        $vetor[$i] = $_POST["num$i"];
        $soma += $vetor[$i];
      }
      $media = $soma / 10;
    
    ?>
    <div class="container mt-3 p-4 rounded-3 bg-white shadow w-50 text-center">
      <?php
        echo "<h4>A média é $media.</h4>";
        echo "<br>";
        if($media > 5){
          echo "<h4>Aprovado</h4>";
        }
        else{
          echo "<h4>Reprovado</h4>";
        }
      ?>

    </div>
    
  </body>
</html>
