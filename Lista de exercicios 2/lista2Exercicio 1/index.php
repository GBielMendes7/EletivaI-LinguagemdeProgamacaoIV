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
  <body class="container rounded-3 p-3 border border-dark shadow">
    <h2>Array de 10 números</h2>
    <div class="row p-3">
      <div class="col mb-3">
        <form action="resposta.php" method="post">
        <?php
            for ($i=1; $i <= 10; $i++){
        ?>
        <label for="num<?= $i ?>" class="form-label">Digite um valor <?= $i ?></label>
                  
        <input type="number" class="form-control" id="num<?= $i ?>" name="num<?= $i ?>">
        <?php
            }
        ?>

      </div>

    </div>
    <div class="row">
      <div class="col mb-3">
        <button type="submit" class="btn btn-danger">ENVIAR</button>
     
      </div>
    </div>
    

    </form>
    
  </body>
</html>
