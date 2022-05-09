<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>exercicio 5</title>
  </head>
  <body class="bg-dark">

    <div class="container mt-5 p-4 rounded-3 text-light bg-dark shadow w-50">
      <h1 class="text-center">Notas</h1>

      <form  class="mt-4" method="POST" action="\resultado">
        <select class="mb-3 form-select">
          <option selected>Selecione a materia</option>
          <option value="1">Português</option>
          <option value="2">Matemática</option>
          <option value="3">Historia</option>
          <option value="4">Geografia</option>
        </select>

        <div class="mb-3">
          <label for="nota1" class="form-label">Prova 1:</label>
          <input type="number" step="0.01" name="nota1" class="form-control" id="nota1" required>
        </div>
        <div class="mb-3">
          <label for="nota2" class="form-label">Prova 2:</label>
          <input type="number" step="0.01" name="nota2" class="form-control" id="nota2" required>
        </div>
        <div class="mb-4 p-3 border rounded-3">
          <label for="nota3" class="form-label">Trabalho:</label>
          <input type="number" step="0.01" name="nota3" class="form-control" id="nota3" required>
 
          <label for="nota4" class="form-label">Exercícios:</label>
          <input type="number" step="0.01" name="nota4" class="form-control" id="nota4" required>
        </div>


        <button type="submit" class="btn btn-danger">IMPRIMIR</button>
      </form>

    </div>

    <div class="container mt-5 p-4 rounded-3 text-light bg-dark shadow w-50">
      <h2 class="text-center">Resultado: </h2>

      <div class="row mt-2 p-2 justify-content-evenly">
        <div class="col text-center fs-2">
            <?php
              if (isset($media))
                if($media >= 7){
                  echo "$media APROVADO";
                } else{
                  echo "$media REPROVADO";
                }
            ?>
        </div>
      </div>  

    </div>

    

  </body>
</html>