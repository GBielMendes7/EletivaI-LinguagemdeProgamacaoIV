<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercicio 4</title>
  </head>
  <body class="bg-success bg-gradient">

    <div class="container mt-5 p-4 rounded-3 bg-white shadow w-50">
      <h1 class="text-center">Notas</h1>

      <form  class="mt-4" method="post" action="resposta.php">
        <select class="mb-3 form-select bg-light border border-light">
          <option selected>Selecione a materia</option>
          <option value="1">Português</option>
          <option value="2">Matemática</option>
          <option value="3">Historia</option>
          <option value="4">Geografia</option>
        </select>

        <div class="row p-3">
          <div class="col mb-3">
            <?php
                for ($i=1; $i <= 10; $i++){
            ?>
            <label for="num<?= $i ?>" class="form-label">Digite a nota <?= $i ?></label>
                      
            <input type="number" class="form-control bg-light border border-light" id="num<?= $i ?>" name="num<?= $i ?>">
            <?php
                }
            ?>

          </div>
        </div>

        <div class="row">
          <div class="col mb-3">
            <button type="submit" class="btn btn-success">ENVIAR</button>
        
          </div>
        </div>

      </form>

    </div>
    
  </body>
</html>
