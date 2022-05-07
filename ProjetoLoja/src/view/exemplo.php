<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="container mt-5 p-4 rounded-3 bg-white shadow w-50">
    <h1>Exemplo</h1>

    <form method="POST" action="/exemplo-resultado">
      <div class="row">
        <div class="col">
          <label class="label-control">Valor1</label>
          <input class="form-control" name="valor1" type="text">
        </div>

        <div class="col">
          <label class="label-control">Valor2</label>
          <input class="form-control" name="valor2" type="text">
        </div>
      </div>
      
      <div class="row mt-3">
        <div class="col">
          <button type="submit" class="btn btn-primary">OK</button>
        </div>
      </div>

    </form>

    <?php
        if (isset($soma))
            echo "O valor de soma é $soma";
    ?>
    
    
    

    
  </body>
</html>