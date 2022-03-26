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
  <body class="p-3 bg-warning">
  <?php
        function imc($peso, $altura){
            $imc = $peso / $altura**2;
            if($imc < 18.5){
                echo "Magreza";
            }elseif($imc < 25){
                echo "Normal";
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
      
      ?>
      <h1 class="text-center">Seu IHC</h1>
      <div class="container rounded-3 p-3 shadow bg-dark fs-2 text-light">
            <div class="row">
                <div class="col text-center">
                    <?php
                        $Peso = $_POST["peso"];
                        $Altura = $_POST["altura"];
            
                        imc($Peso,$Altura);
                    ?>
                </div>
            </div>
          
      </div>
      
      
    


     
  </body>
</html>