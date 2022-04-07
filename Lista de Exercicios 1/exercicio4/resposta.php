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

  <div class="container mt-5 p-4 border border-dark rounded-3">
    <div class="row mt-2 p-2 justify-content-evenly">
      <div class="col text-center fs-2">
          <?php
            $valor = $_POST["valor"];
            if($valor > 0){
              echo "Valor Positivo";
            } elseif($valor == 0){
              echo "Igual a Zero";
            } else{
              echo "Valor Negativo";
            }
          ?>
        
      </div>
    </div>
  </div>
    
  </body>
</html>