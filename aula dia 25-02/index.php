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
  <body class="container mt-5 p-4 shadow p-3 mb-5 rounded-3">
    <h1>Exemplos de envio de formularios</h1>

    <form method="post" action="resposta.php">
        <div class="row">
            <div class="col">
                <label for="valor1" class="label-control">Informe o valor 1: </label>
                <input type="number" name="valor1" id="valor1" class="form-control">
            </div>
            <div class="col">
                <label for="valor2" class="label-control">Informe o valor 2: </label>
                <input type="number" name="valor2" id="valor2" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col mt-3">
                <button type="submit" class="btn btn-danger">enviar</button>

            </div>

        </div>


    </form>

  </body>
</html>