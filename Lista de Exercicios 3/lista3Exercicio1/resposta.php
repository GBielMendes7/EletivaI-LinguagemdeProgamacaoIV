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
  <body>
    <?php
        function verificarData($dia, $mes, $ano){
            echo $dia,"/",$mes,"/",$ano;
            if(checkdate($dia, $mes, $ano)){
                echo "Válido";
                echo date("w");
            }
            else{
                echo "Invalido";
            }
        }

        $diaInformado = $_POST["dia"];
        $mesInformado = $_POST["mes"];
        $anoInformado = $_POST["ano"];

        verificarData($diaInformado, $mesInformado, $anoInformado);

    
    
    ?>
    
    
  </body>
</html>