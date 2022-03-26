<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 4</title>
  </head>
  <body class="p-3 bg-danger">
    <?php
        function divisor($numero){
          $soma = 0;
          for ($i=1; $i <= ($numero/2); $i++){
            if($numero % $i == 0){
                echo $i,"+";
                  $soma += $i;
                }
            }
          echo "=",$soma;
          }
      ?>
    <div class="container rounded-3 p-3 shadow bg-light">
      <h2 class="text-center">Resultados</h2>
      <div class="row">
        <div class="col text-center fs-4">
        <?php
          $num1 = $_POST["num"];
          $num2 = $_POST["num2"];
          $num3 = $_POST["num3"];
          $num4 = $_POST["num4"];
          $num5 = $_POST["num5"];
          if ($num1 > 0){
            divisor($num1);
          }else{
            echo "Numero negativo!";
          }
          echo "<br>";
          if ($num2 > 0){
            divisor($num2);
          }else{
            echo "Numero negativo!";
          }
          echo "<br>";
          if ($num3 > 0){
            divisor($num3);
          }else{
            echo "Numero negativo!";
          }
          echo "<br>";
          if ($num4 > 0){
            divisor($num4);
          }else{
            echo "Numero negativo!";
          }
          echo "<br>";
          if ($num5 > 0){
            divisor($num5);
          }else{
            echo "Numero negativo!";
          }
          echo "<br>";
         
        
        ?>

        </div>

      </div>

    </div>
      
   
  </body>
</html>