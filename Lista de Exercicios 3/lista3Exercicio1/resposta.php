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
    <h2 class="text-center text-light mt-4">Data</h2>
    <?php
      function verificarData($dia, $mes, $ano){
        echo $dia,"/",$mes,"/",$ano;
        echo "<br>";
        if(checkdate($dia, $mes, $ano)){
          echo "Válido";
        }
        else{
          echo "Invalido";
        }
      }

        $diaInformado = $_POST["dia"];
        $mesInformado = $_POST["mes"];
        $anoInformado = $_POST["ano"];
    ?>
    <div class="container mt-5 p-4 rounded-3 bg-white shadow w-50">
      <div class="row">
        <div class="col fs-3 text-center">
          <?php
            verificarData($diaInformado, $mesInformado, $anoInformado);
            echo "<br>";
            echo "Horas:",date("H:i:s");

          ?>

        </div>
      </div>

    </div>
    
    
    
  </body>
</html>