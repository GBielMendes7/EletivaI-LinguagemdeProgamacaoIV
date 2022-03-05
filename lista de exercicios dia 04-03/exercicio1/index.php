<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>exercicio 1</title>
  </head>
  <body class="container mt-5 p-4 border border-dark rounded-3">
    <h1 class="text-center">LOJA</h1>

    <form method="post" action="resposta.php">
      <h2 class="p-4">Pagamento</h2>
        <div class="row">
            <div class="col">
                <label for="valor1" class="label-control">Valor do produto: </label>
                <input type="number" name="valor1" id="valor1" class="form-control">
            </div>
            <div class="col">
                <label for="valor2" class="label-control">Valor recebido: </label>
                <input type="number" name="valor2" id="valor2" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col mt-3">
                <button type="submit" class="btn btn-danger">Pagar</button>

            </div>

        </div>


    </form>

  </body>
</html>