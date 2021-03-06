<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercicio 2</title>
  </head>
  <body class="bg-primary">
    <h2 class="text-center text-light mt-4">Verificação de valores</h2>
    <div class="container mt-5 p-4 rounded-3 bg-white shadow w-50">
        <form action="cheques.php" method="POST">
            <div class="row">
                <div class="col">
                    <label for="cheques" class="label-control">Números de cheques do lote:</label>
                    <input type="number" class="form-control" id="cheques" name="cheques">
                </div>
                <div class="col">
                    <label for="soma" class="label-control">Somas dos cheques do lote:</label>
                    <input type="number" step="0.01" class="form-control" id="soma" name="soma" placeholder="R$">
                </div>
    
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-danger">Cadastrar cheques</button>
                </div>
            </div>

        </form>
    </div>   
    
    
  </body>
</html>