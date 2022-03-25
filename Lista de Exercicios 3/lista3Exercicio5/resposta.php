<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 5</title>
  </head>
  <body>
      <?php
        function imc($peso, $altura){
            $imc = $peso / $altura**2;
            if($imc < 16){
                echo "Magreza grave";
            }elseif($imc < 17){
                echo "Magreza moderada";
            }elseif($imc < 18.5){
                echo "Magreza leve";
            }elseif($imc < 25){
                echo "Saudável";
            }elseif($imc < 30){
                echo "Sobrepeso";
            }elseif($imc < 35){
                echo "Obesidade Grau I";
            }elseif($imc < 40){
                echo "Obesidade Grau II (severa)";
            }else{
                echo"Obesidade Grau III (mórbida)";
            }
        }

        $Peso = $_POST["peso"];
        $Altura = $_POST["altura"];

        imc($Peso,$Altura);

      
      ?>
      
    


     
  </body>
</html>