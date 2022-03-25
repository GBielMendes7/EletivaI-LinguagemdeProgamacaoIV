<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 3</title>
  </head>
  <body>
      <?php
        function maiorMenor($numero1, $numero2){
            if ($numero1 > $numero2){
                echo "O maior numero digitado foi o", $numero1;
            }elseif($numero1 == $numero2){
                echo "os números digitados são iguais";
            }
            else{
                echo "O maior numero digitado foi o", $numero2;
            }
        }
        $num1 = $_POST["num"];
        $num2 = $_POST["num2"];

        maiorMenor($num1, $num2);
      
      ?>
    
     
  </body>
</html>