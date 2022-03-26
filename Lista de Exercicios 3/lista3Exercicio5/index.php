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
  <body class="p-3 bg-light text-light">
    <div class="container rounded-3 p-3 shadow bg-dark">
      <h3 class="text-center">IMC Calculadora</h3>
      <form action="resposta.php" method="post">
        <div class="row p-3">
          <div class="col mb-3">
            <label for="peso" class="form-label">Digite seu peso:</label>      
            <input type="number"  class="form-control bg-dark text-light" id="peso" name="peso">
          </div>
          <div class="col mb-3">
            <label for="altura" class="form-label">Digite a sua altura:</label>      
            <input type="number"  class="form-control bg-dark text-light" id="altura" name="altura">
          </div>
        </div>
        

        <div class="row">
          <div class="col mb-3">
            <button type="submit" class="btn btn-primary">enviar</button>
          </div>   
        </div>  

      </form>
    </div>
    <div class="container rounded-3 mt-3 p-3 shadow bg-dark text-center text-light">
      <div class="row">
        <div class="col bg-primary p-3 text-light border border-light rounded-3">IMC</div>
        <div class="col bg-primary p-3 text-light border border-light rounded-3">CLASSIFICAÇÃO</div>
      </div>
      <div class="row">
        <div class="col bg-primary p-3 text-light border border-light rounded-3">entre 18,6 e 24,9</div>
        <div class="col p-3 border border-light rounded-3">Peso ideal(Parabéns)</div>
      </div>
      <div class="row">
        <div class="col bg-primary p-3 text-light border border-light rounded-3">entre 25,0 e 29,9</div>
        <div class="col p-3 border border-light rounded-3">Levemente acima do peso</div>
      </div>
      <div class="row">
        <div class="col bg-primary p-3 text-light border border-light rounded-3">entre 30,0 e 34,9</div>
        <div class="col p-3 border border-light rounded-3">Obesidade I</div>
      </div>
      <div class="row">
        <div class="col bg-primary p-3 text-light border border-light rounded-3">entre 35,0 e 39,9</div>
        <div class="col p-3 border border-light rounded-3">Obesidade II(severa)</div>
      </div>
      <div class="row">
        <div class="col bg-primary p-3 text-light border border-light rounded-3">acima de 40</div>
        <div class="col p-3 border border-light rounded-3">Obesidade III(mórbida)</div>
      </div>
    </div>

     
  </body>
</html>