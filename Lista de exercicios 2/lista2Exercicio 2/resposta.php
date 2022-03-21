<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercício 2 - Resposta</title>
  </head>
  <body class="p-3 bg-primary">
    <?php
        $num = $_POST["num"];

        for ($i=1; $i <= 20; $i++){
            $vetor[$i] = rand(1,10);
          }
    ?>
    <div class="container rounded-3 p-3">
      <div class="row rounded-3 p-3 shadow mb-5 bg-light">
          <div class="col">
            <?php
              foreach($vetor as $chave => $i){
                if($num == $i){
                  echo "O maior numero é $i e a chave é $chave";
                  echo "<br>";
                }
              }
                  
            ?>
          </div>
        </div>

        <div class="row rounded-3 p-3 shadow bg-light">
          <h4>Vetor:</h4>
          <div class="col">
            <?php
              foreach($vetor as $chave => $i){
                if($num == $i){
                  echo "<b>Posição do vetor: $chave e seu valor é $i</b>";
                  echo "<br>";
                }
                else{
                  echo "Posição do vetor: $chave e seu valor é $i";
                  echo "<br>";
                }
              }
            ?>
          </div>
        </div>

    </div>
    
      
    
  </body>
</html>