<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>exercicio 3</title>
  </head>
  <body class="bg-dark">
    <div class="container mt-5 p-4 bg-white shadow rounded-3">
      <h2 class="text-center">Digite um valor</h2>
      <form method="POST" action="\resultado">
        <div class="row">
          <div class="col">
              <label for="valor" class="label-control">Valor: </label>
              <input type="number" name="valor" id="valor" class="form-control">
          </div>
        </div>

        <div class="row">
          <div class="col mt-3">
            <button type="submit" class="btn btn-danger">IMPRIMIR</button>
          </div>
        </div>
      </form>

      <div class="row mt-2 p-2 justify-content-evenly">
        <div class="col text-center fs-2">
          <?php
            if (isset($valor))
              if($valor > 10){
                echo "o valor é maior que 10";
              } else{
              echo "o valor é menor que 10";
              }
          ?>

        </div>

      </div>


    </div>
    
  </body>
</html>