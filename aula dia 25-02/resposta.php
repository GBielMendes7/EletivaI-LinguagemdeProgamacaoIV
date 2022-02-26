<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>calculo</h1>

    <?php
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $total = $valor1 * $valor2;
    
    ?>

    <div>
        <?php
            echo "$valor1 X $valor2 = $total";
        
        ?>
    </div>
    <?php
        echo "$valor1 X $valor2 = $total";
        echo "valor 1 é: $valor1 e valor 2 é: $valor2";
    
    ?>

    
  </body>
</html>