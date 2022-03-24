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
  <body class="mt-5 p-4 bg-success bg-gradient">
    <h1 class="text-center text-light">Alunos</h1>
    <?php
      function ondenar($vetor){
          sort($vetor);
          foreach($vetor as $chave => $i){
            echo "Aluno:",$chave,"  Nome:",$i;
            echo "<br>";
           
          }
        }

      for ($i=1; $i <= 10; $i++){
        $vetor[$i] = $_POST["aluno$i"];
      }
    
    ?>
    
    <div class="container mt-3 p-4 rounded-3 bg-white shadow w-50 text-center">
      <?php
        ondenar($vetor);
      ?>

    </div>


  </body>
</html>