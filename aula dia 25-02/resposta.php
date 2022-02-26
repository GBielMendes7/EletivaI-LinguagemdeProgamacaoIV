<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <?php
      $valor1 = $_POST["valor1"];
      $valor2 = $_POST["valor2"];
      $total = $valor1 * $valor2;
      $totalsoma = $valor1 + $valor2;
      $totalmenos = $valor1 - $valor2;
      $totaldivicao = $valor1 / $valor2;

  ?>

  <div class="container mt-5 p-4 shadow p-3 mb-5 rounded-3">
    <h1>Cálculos</h1>

    <div class="row mt-2 p-2 justify-content-evenly">
      <div class="col border">
        <?php
          echo "$valor1 x $valor2 = $total";
        ?>
      </div>

      <div class="col border">
        <?php
          echo "$valor1 + $valor2 = $totalsoma";
        ?>
      </div>

      <div class="col border">
        <?php
          echo "$valor1 - $valor2 = $totalmenos";
        ?>
      </div>
  
      <div class="col border">
        <?php
          echo "$valor1 / $valor2 = $totaldivicao";
        ?>
      </div>
    </div>

  </div>

  <div class="container mt-5 p-4 shadow p-3 mb-5 rounded-3">
  <h1 class="text-center">Exemplos de envio de formulários</h1>

    <div class="row mt-2 p-2 justify-content-evenly">
      <div class="col-4 border">
        <h3>valor 1</h3>
        <?php
          if($valor1 % 2 == 0){
            echo "par";
          } else{
            echo "ímpar";
          }
        ?>
      </div>
      <div class="col-4 border">
        <h3>valor 2</h3>
        <?php
          if($valor2 % 2 == 0){
            echo "par";
          } else{
            echo "ímpar";
          }
        ?>
      </div>

    </div>

  </div>

    
  </body>
</html>