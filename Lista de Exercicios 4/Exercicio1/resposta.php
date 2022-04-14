<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercicio 1</title>
  </head>
  <body class="bg-danger bg-gradient">
    <?php
        if($_POST){
          session_start();
          $voltas = $_SESSION["voltas"];

          for ($i=1; $i <= $voltas; $i++){
            $tempos[$i] = $_POST["tempo".$i];
          }

          $maior = 0;
          $menor = 100;

          for($i = 1; $i <= $voltas; $i++){
            if($tempos[$i] >= $maior){
              $maior = $tempos[$i];
            }
            if($tempos[$i] <= $menor){
              $menor = $tempos[$i];
            }
          }
        }     
      
    ?>
    <h2 class="text-center text-light mt-4">Resultado</h2>
    <div class="container mt-5 p-4 rounded-3 bg-white shadow w-50">
      <div class="row">
        <div class="col fs-1">
          <h3>Melhor volta</h3>
          <?php
            echo "1º:",$menor,"<br>";    
          ?>
    
        </div>
        <div class="col fs-2">
          <h3>Pior volta</h3>
          <?php
            echo "2º:",$maior,"<br>";    
          ?>

        </div>
      </div>
    </div>



    
    
    
  </body>
</html>