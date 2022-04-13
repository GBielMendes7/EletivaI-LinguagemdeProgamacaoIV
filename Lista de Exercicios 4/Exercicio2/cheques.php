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
  <h2 class="text-center text-light mt-4">Cadastrar cheques</h2>
    <div class="container mt-5 p-4 rounded-3 bg-white shadow w-50">
        <form action="resposta.php" method="POST">
            <div class="row">
                <div class="col">
                    <?php
                        session_start();
                        $cheques = $_POST["cheques"];
                        $_SESSION["cheques"] = $cheques;

                        $total_soma = $_POST["soma"];
                        $_SESSION["soma"] = $total_soma;
                        
                        for ($i=1; $i <= $cheques; $i++){
                    
                    ?>
                    <label for="valor" class="label-control">Informar o valor do cheque <?= $i ?>º:</label>
                    <input type="number" class="form-control" id="valor" name="valor" placeholder="R$">
                    <?php
                        }
                     ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-danger">Resultado</button>
                </div>
            </div>

        </form>
    </div>   

    
    
    
  </body>
</html>