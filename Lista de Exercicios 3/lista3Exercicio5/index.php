<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 5</title>
  </head>
  <body class="p-3 bg-primary">
    <div class="container rounded-3 p-3 shadow bg-light">
      <h3>Maior número e menor</h3>
      <form action="resposta.php" method="post">
        <div class="row p-3">
          <div class="col mb-3">
            <label for="peso" class="form-label">Digite seu peso:</label>      
            <input type="number"  class="form-control" id="peso" name="peso">
          </div>
          <div class="col mb-3">
            <label for="altura" class="form-label">Digite a sua altura:</label>      
            <input type="number"  class="form-control" id="altura" name="altura">
          </div>
        </div>
        

        <div class="row">
          <div class="col mb-3">
            <button type="submit" class="btn btn-primary">enviar</button>
          </div>   
        </div>  

      </form>


    </div>
     
  </body>
</html>