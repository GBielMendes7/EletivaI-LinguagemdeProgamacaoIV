<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercício 2 - Resposta</title>
  </head>
  <body>
      <?php
        $num = $_POST["num"];
        $numteste = 1;

        for ($i=1; $i <= 20; $i++){
          if($numteste <= 10){
            $vetor[$i] = "$numteste";
          }
          else{
            $numteste = 0;
          }
          $numteste++;
        
        }

        foreach($vetor as $chave => $i){
            if($num == $i){
                echo "numero é $i e a chave é $chave";
            }
        }
    
      
      ?>
    
  </body>
</html>