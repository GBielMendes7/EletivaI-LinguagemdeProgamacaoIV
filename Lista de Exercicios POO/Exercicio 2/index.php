<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercício 1</title>
  </head>
  <body>
    <?php

        require_once("Funcionario.php");
        require_once("Servente.php");
        require_once("Motorista.php");
        require_once("MestreDeObras.php");

        $fun1 = new Funcionario("joão",01,1200.00);
        $fun1->Mostrar();
        echo " Salario lquido:".$fun1->getSalarioLiquido();
        echo"</br>";

        $fun2 = new Servente("Pedro",02,1200.00);
        $fun2->Mostrar();
        echo " Salario liquido:".$fun2->getSalarioLiquido();
        echo "Insalubridade:".$fun2->CalculoInsalubridade();
        echo"</br>";

        $fun3 = new Motorista("Maria",03,1200.00,10000);
        $fun3->Mostrar();
        echo " Salario liquido:".$fun3->getSalarioLiquido();
        echo"</br>";

        $fun4 = new MestreDeObras("joão de luz",04,1200.00,10);
        $fun4->Mostrar();
        echo " Salario liquido:".$fun4->getSalarioLiquido();
        echo "Funcionarios comandados:".$fun4->FunComandado();
        echo"</br>";



    ?>
    
  </body>
</html>