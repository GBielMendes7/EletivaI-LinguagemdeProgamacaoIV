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
    <h2 class="text-center text-light mt-4">Resultados</h2>
    <?php
        if($_POST){
          session_start();
          $cheques = $_SESSION["cheques"];
          $total_soma = $_SESSION["soma"];
          $soma = 0;
          for ($i=1; $i <= $cheques; $i++){
            $vetor[$i] = $_POST["valor"];
            $soma += $vetor[$i];
          }
        }       
      
    ?>


    <div class="container mt-5 p-4 rounded-3 bg-white shadow w-50">
      <div class="row text-center fs-2">
        <div class="col">
          <?php
              if($total_soma >= $soma){
                  echo "Os cheques estão com o mesmo valor do lote.";
                }else{
                  echo "Os cheques não estão com o mesmo valor do lote.";
                }
            
                    
          ?>
                
        </div>
      </div>
    </div>
    
    
  </body>
</html>