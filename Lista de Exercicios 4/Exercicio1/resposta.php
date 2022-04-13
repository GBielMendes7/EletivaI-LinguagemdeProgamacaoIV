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
  <body class="bg-danger bg-gradient">
    <?php
        $maior = 0;
        $menor = 100;
        if($_POST){
          $tempos = $_POST["tempo"];
          session_start();
          $voltas = $_SESSION["voltas"];
          if(($voltas >= 1) && ($tempos > "00:00")){
            for($i = 0; $i < $voltas; $i++){
              if($tempos[$i] > $maior){
                $maior = $tempos[$i];
              }
              return $maior;

              if($tempos[$i] < $menor[$i]){
                $menor = $tempos;
              }
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
            echo "A melhor volta foi: <br>";
            echo "1º:",$maior,"<br>";
            echo "A pior volta foi: <br>";
            echo "2º",$menor,"<br>";    
          ?>
    
        </div>
      </div>
    </div>



    
    
    
  </body>
</html>