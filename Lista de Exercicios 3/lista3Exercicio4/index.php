<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 4</title>
  </head>
  <body class="p-3 bg-danger">
    <div class="container rounded-3 p-3 shadow bg-light">
      <h3 class="text-center">Maior número e menor</h3>
      <form action="resposta.php" method="post">
        <div class="row p-3">
          <div class="col mb-2">
            <label for="num" class="form-label">Digite um numero</label>      
            <input type="number"  class="form-control" id="num" name="num">
          </div>
        </div>
        <div class="row p-3">
          <div class="col mb-2">
            <label for="num2" class="form-label">Digite um numero</label>      
            <input type="number"  class="form-control" id="num2" name="num2">
          </div>
        </div>
        <div class="row p-3">
          <div class="col mb-2">
            <label for="num3" class="form-label">Digite um numero</label>      
            <input type="number"  class="form-control" id="num3" name="num3">
          </div>
        </div>
        <div class="row p-3">
          <div class="col mb-2">
            <label for="num4" class="form-label">Digite um numero</label>      
            <input type="number"  class="form-control" id="num4" name="num4">
          </div>
        </div>
        <div class="row p-3">
          <div class="col mb-2">
            <label for="num5" class="form-label">Digite um numero</label>      
            <input type="number"  class="form-control" id="num5" name="num5">
          </div>
        </div>               

        <div class="row">
          <div class="col mb-2">
            <button type="submit" class="btn btn-primary">enviar</button>
          </div>   
        </div>  

      </form>


    </div>
     
  </body>
</html>