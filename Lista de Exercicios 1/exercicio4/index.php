<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>exercicio 4</title>
  </head>
  <body class="container mt-5 p-4 border border-dark rounded-3">
    <form method="post" action="resposta.php">
      <h2 class="p-4">Digite um valor</h2>
        <div class="row">
            <div class="col">
                <label for="valor" class="label-control">Valor: </label>
                <input type="number" step="0.01" name="valor" id="valor" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="d-grid col-6 mt-3 mx-auto">
                <button type="submit" class="btn btn-danger">IMPRIMIR</button>
            </div>
        </div>


    </form>

  </body>
</html>