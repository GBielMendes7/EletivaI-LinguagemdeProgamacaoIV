<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>exercicio 2</title>
  </head>
  <body class="container mt-5 p-4 border border-white rounded-3 text-white bg-dark">
    <h1 class="text-center">LOJA</h1>

    <form method="post" action="resposta.php">
      <h2 class="p-4">Pagamento</h2>
        <div class="row">
            <div class="col">
                <label for="valor1" class="label-control">Valor do Kg: </label>
                <input type="number" step="0.01" name="valor1" id="valor1" class="form-control">
            </div>
            <div class="col">
                <label for="valor2" class="label-control">QTD: </label>
                <input type="number" step="0.01" name="valor2" id="valor2" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="d-grid col-6 mt-3 mx-auto">
                <button type="submit" class="btn btn-danger">Pagar</button>
            </div>

        </div>

    </form>

  </body>
</html>