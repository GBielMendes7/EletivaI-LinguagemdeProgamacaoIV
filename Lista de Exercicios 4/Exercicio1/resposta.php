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
  <body class="bg-dark bg-gradient">
    <?php
        if($_POST){
          for ($i=1; $i <= 10; $i++){
            $tempos[$i] = $_POST["tempo$i"];
          }
            session_start();
            $volta = $_SESSION["volta"];
            $maior = 0;
            $menor = 100;
            for($i = 0 ;$i = $volta; $i++){
              if($tempos[$i] > $maior){
                $maior = $tempos[$i];
                return $maior;
              }

              if($tempos[$i] < $menor){
                $menor = $tempos[$i];
                return $menor;
              }
                
            }
          }     
      
    ?>
    <h2 class="text-center text-light mt-4">Resultado</h2>
    <div class="container mt-5 p-4 rounded-3 bg-white shadow w-50">
      <div class="row">
        <div class="col">
          <?php
            echo $maior;
            echo $menor;    
          ?>
    
        </div>
      </div>
    </div>



    
    
    
  </body>
</html>