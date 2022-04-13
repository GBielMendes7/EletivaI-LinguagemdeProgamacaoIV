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
    <h2 class="text-center text-light mt-4">Tempos</h2>
    <div class="container mt-5 p-4 rounded-3 bg-white shadow w-50">
        <form action="resposta.php" method="POST">
            <div class="row">
                <div class="col">
                    <?php
                        session_start();
                        $voltas = $_POST["voltas"];
                        $_SESSION["voltas"] = $voltas;
                        for ($i=1; $i <= $voltas; $i++){
                    
                    ?>
                    <label for="tempo" class="label-control">Informar o tempo da volta<?= $i ?>:</label>
                    <input type="time" step="0.01" class="form-control" id="tempo" name="tempo">
                    <?php
                        }
                     ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-success">Resultados</button>
                </div>
            </div>

        </form>
    </div>   

    
    
    
  </body>
</html>